<?php

namespace App\Http\Controllers\Panel;

use App\Bitwise\UserLevelOfTraining;
use App\Http\Controllers\Controller;
use App\Mixins\RegistrationPackage\UserPackage;
use App\Models\Comment;
use App\Models\Gift;
use App\Models\Meeting;
use App\Models\MeetingTime;
use App\Models\Region;
use App\Models\ReserveMeeting;
use App\Models\Role;
use App\Models\Sale;
use App\Models\Support;
use App\Models\UserMeta;
use App\Models\UserOccupation;
use App\Models\Webinar;
use App\Models\WebinarAssignment;
use App\Models\WebinarAssignmentHistory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();

        $nextBadge = $user->getBadges(true, true);

        $data = [
            'pageTitle' => trans('panel.dashboard'),
            'nextBadge' => $nextBadge
        ];

        if (!$user->isUser()) {
            $meetingIds = Meeting::where('creator_id', $user->id)->pluck('id')->toArray();
            $pendingAppointments = ReserveMeeting::whereIn('meeting_id', $meetingIds)
                ->whereHas('sale')
                ->where('status', ReserveMeeting::$pending)
                ->count();

            $userWebinarsIds = $user->webinars->pluck('id')->toArray();
            $supports = Support::whereIn('webinar_id', $userWebinarsIds)->where('status', 'open')->get();

            $comments = Comment::whereIn('webinar_id', $userWebinarsIds)
                ->where('status', 'active')
                ->whereNull('viewed_at')
                ->get();

            $time = time();
            $firstDayMonth = strtotime(date('Y-m-01', $time));// First day of the month.
            $lastDayMonth = strtotime(date('Y-m-t', $time));// Last day of the month.

            $monthlySales = Sale::where('seller_id', $user->id)
                ->whereNull('refund_at')
                ->whereBetween('created_at', [$firstDayMonth, $lastDayMonth])
                ->get();

            $data['pendingAppointments'] = $pendingAppointments;
            $data['supportsCount'] = count($supports);
            $data['commentsCount'] = count($comments);
            $data['monthlySalesCount'] = count($monthlySales) ? $monthlySales->sum('total_amount') : 0;
            $data['monthlyChart'] = $this->getMonthlySalesOrPurchase($user);
        } else {
            $webinarsIds = $user->getPurchasedCoursesIds();

            $webinars = Webinar::whereIn('id', $webinarsIds)
                ->where('status', 'active')
                ->get();

            $reserveMeetings = ReserveMeeting::where('user_id', $user->id)
                ->whereHas('sale', function ($query) {
                    $query->whereNull('refund_at');
                })
                ->where('status', ReserveMeeting::$open)
                ->get();

            $supports = Support::where('user_id', $user->id)
                ->whereNotNull('webinar_id')
                ->where('status', 'open')
                ->get();

            $comments = Comment::where('user_id', $user->id)
                ->whereNotNull('webinar_id')
                ->where('status', 'active')
                ->get();

            $data['webinarsCount'] = count($webinars);
            $data['supportsCount'] = count($supports);
            $data['commentsCount'] = count($comments);
            $data['reserveMeetingsCount'] = count($reserveMeetings);
            $data['monthlyChart'] = $this->getMonthlySalesOrPurchase($user);
        }

        $data['giftModal'] = $this->showGiftModal($user);

        return view(getTemplate() . '.panel.dashboard.index', $data);
    }

    private function showGiftModal($user)
    {
        $gift = Gift::query()->where('email', $user->email)
            ->where('status', 'active')
            ->where('viewed', false)
            ->where(function ($query) {
                $query->whereNull('date');
                $query->orWhere('date', '<', time());
            })
            ->whereHas('sale')
            ->first();

        if (!empty($gift)) {
            $gift->update([
                'viewed' => true
            ]);

            $data = [
                'gift' => $gift
            ];

            $result = (string)view()->make('web.default.panel.dashboard.gift_modal', $data);
            $result = str_replace(array("\r\n", "\n", "  "), '', $result);

            return $result;
        }

        return null;
    }

    private function getMonthlySalesOrPurchase($user)
    {
        $months = [];
        $data = [];

        // all 12 months
        for ($month = 1; $month <= 12; $month++) {
            $date = Carbon::create(date('Y'), $month);

            $start_date = $date->timestamp;
            $end_date = $date->copy()->endOfMonth()->timestamp;

            $months[] = trans('panel.month_' . $month);

            if (!$user->isUser()) {
                $monthlySales = Sale::where('seller_id', $user->id)
                    ->whereNull('refund_at')
                    ->whereBetween('created_at', [$start_date, $end_date])
                    ->sum('total_amount');

                $data[] = round($monthlySales, 2);
            } else {
                $monthlyPurchase = Sale::where('buyer_id', $user->id)
                    ->whereNull('refund_at')
                    ->whereBetween('created_at', [$start_date, $end_date])
                    ->count();

                $data[] = $monthlyPurchase;
            }
        }

        return [
            'months' => $months,
            'data' => $data
        ];
    }

    public function academyDashboard(Request $request)
    {
        $data = [
            'sales' => $this->getDashboardCourses(),
            'instructors' => $this->getDashboardMentors($request),
            'assignments' => $this->getDashboardAssignments($request),
        ];
        return view('web.public_academy.dashboard', $data);
    }

    public function getDashboardCourses()
    {
        $user = auth()->user();

        $giftsIds = Gift::query()->where('email', $user->email)
            ->where('status', 'active')
            ->whereNull('product_id')
            ->where(function ($query) {
                $query->whereNull('date');
                $query->orWhere('date', '<', time());
            })
            ->whereHas('sale')
            ->pluck('id')
            ->toArray();

        $query = Sale::query()
            ->where(function ($query) use ($user, $giftsIds) {
                $query->where('sales.buyer_id', $user->id);
                $query->orWhereIn('sales.gift_id', $giftsIds);
            })
            ->whereNull('sales.refund_at')
            ->where('access_to_purchased_item', true)
            ->where(function ($query) {
                $query->where(function ($query) {
                    $query->whereNotNull('sales.webinar_id')
                        ->where('sales.type', 'webinar')
                        ->whereHas('webinar', function ($query) {
                            $query->where('status', 'active');
                        });
                });
                $query->orWhere(function ($query) {
                    $query->whereNotNull('sales.bundle_id')
                        ->where('sales.type', 'bundle')
                        ->whereHas('bundle', function ($query) {
                            $query->where('status', 'active');
                        });
                });
                $query->orWhere(function ($query) {
                    $query->whereNotNull('gift_id');
                    $query->whereHas('gift');
                });
            });


        $sales = deepClone($query)
            ->with([
                'webinar' => function ($query) {
                    $query->with([
                        'files',
                        'reviews' => function ($query) {
                            $query->where('status', 'active');
                        },
                        'category',
                        'teacher' => function ($query) {
                            $query->select('id', 'full_name');
                        },
                    ]);
                    $query->withCount([
                        'sales' => function ($query) {
                            $query->whereNull('refund_at');
                        }
                    ]);
                },
                'bundle' => function ($query) {
                    $query->with([
                        'reviews' => function ($query) {
                            $query->where('status', 'active');
                        },
                        'category',
                        'teacher' => function ($query) {
                            $query->select('id', 'full_name');
                        },
                    ]);
                }
            ])
            ->orderBy('created_at', 'desc')
            ->take(2)
            ->get();

        foreach ($sales as $sale) {
            if (!empty($sale->gift_id)) {
                $gift = $sale->gift;

                $sale->webinar_id = $gift->webinar_id;
                $sale->bundle_id = $gift->bundle_id;

                $sale->webinar = !empty($gift->webinar_id) ? $gift->webinar : null;
                $sale->bundle = !empty($gift->bundle_id) ? $gift->bundle : null;

                $sale->gift_recipient = !empty($gift->receipt) ? $gift->receipt->full_name : $gift->name;
                $sale->gift_sender = $sale->buyer->full_name;
                $sale->gift_date = $gift->date;;
            }
        }
        return $sales;
    }

    public function getDashboardMentors($request)
    {
        $query = User::where('users.status', 'active')
            ->where(function ($query) {
                $query->where('users.ban', false)
                    ->orWhere(function ($query) {
                        $query->whereNotNull('users.ban_end_at')
                            ->orWhere('users.ban_end_at', '<', time());
                    });
            })
            ->with([
                'meeting' => function ($query) {
                    $query->with('meetingTimes');
                    $query->withCount('meetingTimes');
                },
                'occupations'
            ]);

        $query = $this->handleFilters($query, $request);

        $query = $query->addSelect(DB::raw('ST_AsText(location) as userLocation'));

        $instructors = deepClone($query)->paginate(4);

        foreach ($instructors as $instructor) {
            $instructor->location = $instructor->userLocation;
        }

        if ($request->ajax()) {
            return $this->handleLoadMoreHtml($instructors);
        }

        $mapUsers = $query->whereNotNull('location')->get();

        foreach ($mapUsers as $mapUser) {
            $mapUser->price = $mapUser->meeting ? convertPriceToUserCurrency($mapUser->meeting->amount) : 0;
            $mapUser->avatar = $mapUser->getAvatar();
            $mapUser->rate = $mapUser->rates();
            $mapUser->profileUrl = url($mapUser->getProfileUrl());

            $mapUser->location = \Geo::get_geo_array($mapUser->userLocation);
        }

        $seoSettings = getSeoMetas('instructor_finder');
        $pageTitle = !empty($seoSettings['title']) ? $seoSettings['title'] : trans('home.instructors');
        $pageDescription = !empty($seoSettings['description']) ? $seoSettings['description'] : trans('home.instructors');
        $pageRobot = getPageRobot('instructor_finder');

        $data = [
            'pageTitle' => $pageTitle,
            'pageDescription' => $pageDescription,
            'pageRobot' => $pageRobot,
            'mapUsers' => $mapUsers,
            'instructors' => $instructors,
        ];

        $locationData = $this->getLocationData($request);
        $data = array_merge($data, $locationData);
        return $data['instructors'];
    }

    private function handleFilters($query, Request $request)
    {
        $categoryId = $request->get('category_id', null);
        $levelOfTraining = $request->get('level_of_training', null);
        $gender = $request->get('gender', null);
        $meetingSupport = $request->get('meeting_type', null);
        $population = $request->get('population', null);
        $countryId = $request->get('country_id', null);
        $provinceId = $request->get('province_id', null);
        $cityId = $request->get('city_id', null);
        $districtId = $request->get('district_id', null);
        $sort = $request->get('sort', null);
        $availableForMeetings = $request->get('available_for_meetings', null);
        $hasFreeMeetings = $request->get('free_meetings', null);
        $withDiscount = $request->get('discount', null);

        if (empty($request->get('role', null))) {
            $role = [Role::$organization, Role::$teacher];
        } else {
            $role = [$request->get('role')];
        }

        $query->whereIn('users.role_name', $role);

        if (!empty($categoryId)) {
            $userIds = UserOccupation::where('category_id', $categoryId)->pluck('user_id')->toArray();

            $query->whereIn('users.id', $userIds);
        }

        if (!empty($levelOfTraining) and in_array($levelOfTraining, UserLevelOfTraining::$levelOfTraining)) {
            $levelBit = (new UserLevelOfTraining())->getValue($levelOfTraining);

            $query->whereRaw('users.level_of_training & ? > 0', [$levelBit]);
        }

        if (!empty($gender)) {
            $userIds = UserMeta::where('name', 'gender')
                ->where('value', $gender)
                ->pluck('user_id')
                ->toArray();

            $query->whereIn('users.id', $userIds);
        }

        if (!empty($meetingSupport) and $meetingSupport != 'all') {
            $query->where('users.meeting_type', $meetingSupport);
        }

        if (!empty($population) and in_array($population, ['single', 'group'])) {
            $query->whereHas('meeting', function ($query) use ($population) {
                if ($population == 'single') {
                    $query->where('group_meeting', false);
                } elseif ($population == 'group') {
                    $query->where('group_meeting', true);
                }
            });
        }

        $query = $this->handlePriceFilter($query, $request);


        $query = $this->handleAgeFilter($query, $request);


        if (!empty($countryId)) {
            $query->where('country_id', $countryId);
        }
        if (!empty($provinceId)) {
            $query->where('province_id', $provinceId);
        }
        if (!empty($cityId)) {
            $query->where('city_id', $cityId);
        }
        if (!empty($districtId)) {
            $query->where('district_id', $districtId);
        }

        $query = $this->handleDaysAndTimeFilter($query, $request);

        if (!empty($availableForMeetings) and $availableForMeetings == 'on') {
            $query = $this->handleAvailableForMeetings($query);
        }

        if (!empty($hasFreeMeetings) and $hasFreeMeetings == 'on') {
            $query = $this->handleHasFreeMeetings($query);
        }

        if (!empty($withDiscount) and $withDiscount == 'on') {
            $query = $this->handleWithDiscount($query);
        }

        if (!empty($sort)) {
            if ($sort == 'top_rate') {
                $roleForSort = ($request->get('role') == Role::$organization) ? Role::$organization : Role::$teacher;

                $query = $this->getBestRateUsers($query, $roleForSort);
            }

            if ($sort == 'top_sale') {
                $query = $this->getTopSalesUsers($query);
            }
        } else {
            // order by meetings
            $query->leftJoin('meetings', 'meetings.creator_id', '=', 'users.id')
                ->select('users.*', DB::raw('count(meetings.id) as meetingCounts'))
                ->groupBy('users.id')
                ->orderBy('meetingCounts', 'desc')
                ->orderBy('users.id', 'desc');
        }

        return $query;
    }

    private function handlePriceFilter($query, Request $request)
    {
        $minPrice = $request->get('min_price', null);
        $maxPrice = $request->get('max_price', null);

        if (!empty($minPrice) or !empty($maxPrice)) {
            $userIds = Meeting::where('disabled', false)
                ->where(function ($query) use ($minPrice, $maxPrice) {
                    if (!empty($minPrice)) {
                        $query->where('amount', '>=', $minPrice);

                        if (!empty($maxPrice)) {
                            $query->where('amount', '<=', $maxPrice);
                        }
                    } else {
                        $query->whereNull('amount');
                        $query->orWhere('amount', '=', '0');
                    }
                })
                ->pluck('creator_id')
                ->toArray();

            $query->whereIn('users.id', $userIds);
        }

        return $query;
    }

    private function handleAgeFilter($query, Request $request)
    {
        $minAge = $request->get('min_age', null);
        $maxAge = $request->get('max_age', null);

        if (!empty($minAge) or !empty($maxAge)) {
            $userAgeQuery = UserMeta::where('name', 'age');

            if (!empty($minAge)) {
                $userAgeQuery->whereRaw('value >= ' . $minAge);
            }

            if (!empty($maxAge)) {
                $userAgeQuery->whereRaw('value <= ' . $maxAge);
            }

            $userIds = $userAgeQuery->pluck('user_id')->toArray();

            $query->whereIn('users.id', $userIds);
        }

        return $query;
    }

    private function handleDaysAndTimeFilter($query, Request $request)
    {
        $days = $request->get('day');
        $minTime = $request->get('min_time');
        $maxTime = $request->get('max_time');

        if ($minTime < 0) {
            $minTime = 0;
        }

        if ($maxTime > 23) {
            $maxTime = 23;
        }

        if ($maxTime == 23) {
            $maxTime = '23:59';
        }

        if (!empty($minTime) and !empty($maxTime)) {
            $minTimeFilter = Carbon::createFromTimeString($minTime);
            $maxTimeFilter = Carbon::createFromTimeString($maxTime);

            $meetingsTimes = null;

            if (!empty($days) and is_array($days)) {
                $meetingsTimes = MeetingTime::whereIn('meeting_times.day_label', $days)
                    ->get();
            } else if ($minTime != '1' and $maxTime != '23:59') {
                $meetingsTimes = MeetingTime::query()->get();
            }

            if (!empty($meetingsTimes)) {
                $meetingsIds = [];

                foreach ($meetingsTimes as $meetingsTime) {
                    $time = explode('-', $meetingsTime->time);

                    $startTime = Carbon::createFromTimeString($time[0]);
                    $endTime = Carbon::createFromTimeString($time[1]);

                    if ($minTimeFilter <= $startTime and $maxTimeFilter >= $endTime) {
                        $meetingsIds[] = $meetingsTime->meeting_id;
                    }
                }

                $userIds = Meeting::whereIn('id', $meetingsIds)
                    ->where('disabled', false)
                    ->pluck('creator_id')
                    ->toArray();

                $query->whereIn('users.id', $userIds);
            }
        }

        return $query;
    }

    private function getLocationData(Request $request)
    {
        $countries = Region::select(DB::raw('*, ST_AsText(geo_center) as geo_center'))
            ->where('type', Region::$country)
            ->get();

        $provinces = null;
        $cities = null;
        $districts = null;
        $mapCenter = [37.718590, 37.617188]; // default Location
        $mapZoom = 3;

        if ($request->get('country_id')) {
            $provinces = Region::select(DB::raw(' *, ST_AsText(geo_center) as geo_center'))
                ->where('type', Region::$province)
                ->where('country_id', $request->get('country_id'))
                ->get();

            $country = $countries->where('id', $request->get('country_id'))->first();

            if ($country) {
                $mapCenter = \Geo::get_geo_array($country->geo_center);
                $mapZoom = 5;
            }
        }

        if ($request->get('province_id')) {

            if (!empty($provinces)) {
                $province = $provinces->where('id', $request->get('province_id'))->first();

                if ($province) {
                    $mapCenter = \Geo::get_geo_array($province->geo_center);
                    $mapZoom = 7;
                }
            }

            $cities = Region::select(DB::raw(' *, ST_AsText(geo_center) as geo_center'))
                ->where('type', Region::$city)
                ->where('province_id', $request->get('province_id'))
                ->get();
        }

        if ($request->get('city_id')) {

            if (!empty($cities)) {
                $city = $cities->where('id', $request->get('city_id'))->first();

                if ($city) {
                    $mapCenter = \Geo::get_geo_array($city->geo_center);
                    $mapZoom = 12;
                }
            }

            $districts = Region::select(DB::raw(' *, ST_AsText(geo_center) as geo_center'))
                ->where('type', Region::$district)
                ->where('city_id', $request->get('city_id'))
                ->get();
        }


        if (!empty($districts) and $request->get('district_id')) {
            $district = $districts->where('id', $request->get('district_id'))->first();

            if ($district) {
                $mapCenter = \Geo::get_geo_array($district->geo_center);
                $mapZoom = 14;
            }
        }

        return [
            'countries' => $countries,
            'provinces' => $provinces,
            'cities' => $cities,
            'districts' => $districts,
            'mapCenter' => $mapCenter,
            'mapZoom' => $mapZoom,
        ];
    }

    public function getDashboardAssignments($request, $id = 0)
    {
        $user = auth()->user();

        $purchasedCoursesIds = Sale::where('buyer_id', $user->id)
            ->whereNotNull('webinar_id')
            ->whereNull('refund_at')
            ->pluck('webinar_id')
            ->toArray();

        $webinars = Webinar::select('id', 'creator_id', 'teacher_id')
            ->whereIn('id', $purchasedCoursesIds)
            ->where('status', 'active')
            ->get();

        $query = WebinarAssignment::whereIn('webinar_id', $purchasedCoursesIds)
            ->where('status', 'active');

        $courseAssignmentsCount = deepClone($query)->count();

        $pendingReviewCount = deepClone($query)->whereHas('assignmentHistory', function ($query) use ($user) {
            $query->where('student_id', $user->id);
            $query->where('status', WebinarAssignmentHistory::$pending);
        })->count();

        $passedCount = deepClone($query)->whereHas('assignmentHistory', function ($query) use ($user) {
            $query->where('student_id', $user->id);
            $query->where('status', WebinarAssignmentHistory::$passed);
        })->count();

        $failedCount = deepClone($query)->whereHas('assignmentHistory', function ($query) use ($user) {
            $query->where('student_id', $user->id);
            $query->where('status', WebinarAssignmentHistory::$notPassed);
        })->count();


        $query = $this->handleMyAssignmentsFilters($request, $query, $user);

        $assignments = $query->with([
            'webinar',
            'assignmentHistory' => function ($query) use ($user) {
                $query->where('student_id', $user->id);
                $query->with([
                    'messages' => function ($query) use ($user) {
                        $query->where('sender_id', $user->id);
                        $query->orderBy('created_at', 'desc');
                    }
                ]);
            },
        ])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        foreach ($assignments as &$assignment) {
            $this->getAssignmentDeadline($assignment, $user);
            $assignment->usedAttemptsCount = 0;

            if (!empty($assignment->assignmentHistory) and count($assignment->assignmentHistory->messages)) {
                try {
                    $assignment->last_submission = $assignment->assignmentHistory->messages->first()->created_at;
                    $assignment->first_submission = $assignment->assignmentHistory->messages->last()->created_at;
                    $assignment->usedAttemptsCount = $assignment->assignmentHistory->messages->count();
                } catch (\Exception $exception) {

                }
            }
        }


        $assignmentDetailsQuery = WebinarAssignment::whereIn('webinar_id', $purchasedCoursesIds)
            ->where('status', 'active')->where('id', $id);

        $assignmentDetails = $assignmentDetailsQuery->with([
            'webinar',
            'assignmentHistory' => function ($query) use ($user) {
                $query->where('student_id', $user->id);
                $query->with([
                    'messages' => function ($query) use ($user) {
                        $query->where('sender_id', $user->id);
                        $query->orderBy('created_at', 'desc');
                    }
                ]);
            },
        ])->first();

        $data = [
            'pageTitle' => trans('update.my_assignments'),
            'assignments' => $assignments,
            'webinars' => $webinars,
            'courseAssignmentsCount' => $courseAssignmentsCount,
            'pendingReviewCount' => $pendingReviewCount,
            'passedCount' => $passedCount,
            'failedCount' => $failedCount,
            'assignmentDetails' => $assignmentDetails
        ];
        return $data['assignments'];
    }

    private function handleMyAssignmentsFilters(Request $request, $query, $user)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $webinarId = $request->get('webinar_id');
        $status = $request->get('status');

        // $from and $to
        $query = fromAndToDateFilter($from, $to, $query, 'created_at');

        if (!empty($webinarId)) {
            $query->where('webinar_id', $webinarId);
        }

        if (!empty($status)) {
            $query->whereHas('assignmentHistory', function ($query) use ($user, $status) {
                $query->where('student_id', $user->id);
                $query->where('status', $status);
            });
        }

        return $query;
    }

    private function getAssignmentDeadline(&$assignment, $user)
    {
        if (!empty($assignment->deadline)) {
            $sale = Sale::where('buyer_id', $user->id)
                ->where('webinar_id', $assignment->webinar_id)
                ->whereNull('refund_at')
                ->first();

            $assignment->deadlineTime = strtotime("+{$assignment->deadline} days", $sale->created_at);
        }
    }
}
