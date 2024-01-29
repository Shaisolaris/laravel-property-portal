<?php

namespace App\Services;

use App\Models\User;
use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Collection;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use App\Enums\EducationInstitutions\EducationInstitutionsEnum;
use Illuminate\Support\Facades\URL;

class HandleInertiaRequestService
{

    public function userResponse($request)
    {
        return $request->user()
            ? UserResource::make($request->user()->load(['roles']))->response()->getData(true)
            : null;
    }


    public function setNavigations(): Collection
    {
        $checkAuth = Auth::check();

        if (!$checkAuth) {
            return collect();
        }

        $user = Auth::user();
        $institution = $user->institution_type;

        if ($user->hasRole(UserRoleEnum::Organizer()->value)) return $this->setMenuOrganizer($user);

        $navigations = collect([
            [
                'route' => '',
                'active' => request()->routeIs('general.dashboard'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'dashboard'
            ],
        ]);

        switch ($user->roleName) {
            case UserRoleEnum::Instructor()->value:
                if ($institution === EducationInstitutionsEnum::Academy()->value) {
                    $navigations->push(
                        [
                            'route' => route('general.' . $institution . '.add-step', ['program' => $institution == 'academy' ? 'course' : 'classes']),
                            'active' => request()->routeIs('general.' . $institution . '.add-step'),
                            'icon' => 'ri-add-circle-line',
                            'tKey' => 'add-new-course'
                        ]
                    );
                }

                $navigations->push(
                    $institution === EducationInstitutionsEnum::School()->value
                        ?
                        [
                            'route' => route('school.my-classes'),
                            'active' => request()->routeIs('school.my-classes'),
                            'icon' => 'ri-computer-line',
                            'tKey' => 'my-classes'
                        ]
                        :
                        [
                            'route' => route('academy.my-courses'),
                            'active' => request()->routeIs('academy.my-courses'),
                            'icon' => 'ri-computer-line',
                            'tKey' => 'my-courses'
                        ],
                    [
                        'route' => route('assignment.assignment.index'),
                        'active' => request()->routeIs('assignment.assignment.index'),
                        'icon' => ' ri-file-text-line',
                        'tKey' => 'assignments'
                    ],
                );

                if ($institution === EducationInstitutionsEnum::School()->value) {
                    $navigations->push([
                        'route' => route('quiz.quiz.index'),
                        'active' => request()->routeIs('quiz.quiz.index'),
                        'icon' => 'ri-question-line',
                        'tKey' => 'quizzes'
                    ]);
                }

                $navigations->push([
                    'route' => route('general.grade'),
                    'active' => request()->routeIs('general.grade'),
                    'icon' => 'ri-calendar-check-line',
                    'tKey' => 'grades'
                ]);

                break;
            case UserRoleEnum::Student()->value:
//                $navigations->push();
                break;
            default:
                break;
        }

        $navigations->push(
            [
                'route' => route('general.payment'),
                'active' => request()->routeIs('general.payment'),
                'icon' => 'ri-bank-card-line',
                'tKey' => 'payments'
            ],
            [
                'route' => route('general.settings.index'),
                'active' => request()->routeIs('general.settings.index'),
                'icon' => ' ri-settings-2-line',
                'tKey' => 'settings'
            ],
            [
                'route' => route('auth.logout'),
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'tKey' => 'logout'
            ]
        );

        return $navigations;
    }


    public function setFlush($request): array
    {
        $sessions = $request->session();
        $types = ['success', 'warning', 'error', 'info'];
        $flashMessage = [];

        foreach ($types as $type) {
            if ($sessions->has($type)) {
                $flashMessage = $sessions->get($type);
                break;
            }
        }

        return $flashMessage;
    }


    private function setMenuStudent(User $user)
    {

    }

    private function setMenuOrganizer(User $user): Collection
    {
        return collect();
    }
}
