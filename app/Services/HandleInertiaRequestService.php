<?php

namespace App\Services;

use App\Enums\User\UserRoleEnum;
use Illuminate\Support\Collection;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use App\Enums\EducationInstitutions\EducationInstitutionTypeEnum;
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
        if (!Auth::check()) {
            return collect();
        }

        $user = Auth::user();

        $institution = $user->institution_type;

        if (!$user->hasRole(UserRoleEnum::adminRoles())) {
            URL::defaults(['institution' => $institution, 'role' => $user->role_name]);
        }

        if ($user->isOrganizer()) {
            return $this->setMenuSchoolOrganizer();
        }

        if ($user->hasRole(UserRoleEnum::adminRoles())) {
            return $this->setMenuAdmin();
        }

        if ($user->institution_type == EducationInstitutionTypeEnum::School()->value) {
            if ($user->isInstructor()) {
                return $this->setMenuSchoolInstructor($institution);
            }

            if ($user->isStudent()) {
                return $this->setMenuSchoolStudent();
            }

            if ($user->isOrganizer()) {
                return $this->setMenuSchoolOrganizer();
            }
        }

        if ($user->institution_type == EducationInstitutionTypeEnum::Academy()->value) {
            if ($user->isInstructor()) {
                return $this->setMenuAcademyInstructor($institution);
            }

            if ($user->isStudent()) {
                return $this->setMenuAcademyStudent();
            }

            if ($user->isOrganizer()) {
                return $this->setMenuAcademyOrganizer();
            }
        }

        return collect();
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


    private function setMenuSchoolOrganizer(): Collection
    {
        return collect([
            [
                'route' => route('general.dashboard'),
                'active' => request()->routeIs('general.dashboard'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'dashboard'
            ],
            [
                'route' => route('school.manage-user.index'),
                'active' => request()->routeIs('school.manage-user.index'),
                'icon' => 'ri-group-fill',
                'tKey' => 'manage-users'
            ],
            [
                'route' => route('school.class.list'),
                'active' => request()->routeIs(['school.class.list', 'school.class.edit', 'school.class.schedule', 'school.class.student', 'school.class.subject']),
                'icon' => 'ri-book-2-fill',
                'tKey' => 'classes'
            ],
            [
                'route' => route('general.settings.index'),
                'active' => request()->routeIs('general.settings.index'),
                'icon' => 'ri-settings-2-line',
                'tKey' => 'settings'
            ],
//            [
//                'route' => route('payment.history'),
//                'active' => request()->routeIs('payment.history'),
//                'icon' => 'ri-bank-card-line',
//                'tKey' => 'payments'
//            ],
            [
                'route' => route('auth.logout'),
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'tKey' => 'logout'
            ]
        ]);
    }


    private function setMenuAcademyOrganizer(): Collection
    {
        return collect([
            [
                'route' => route('general.dashboard'),
                'active' => request()->routeIs('general.dashboard'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'dashboard'
            ],
//            [
//                'route' => route('payment.history'),
//                'active' => request()->routeIs('payment.history'),
//                'icon' => 'ri-bank-card-line',
//                'tKey' => 'payments'
//            ],
            [
                'route' => route('general.settings.index'),
                'active' => request()->routeIs('general.settings.index'),
                'icon' => 'ri-settings-2-line',
                'tKey' => 'settings'
            ],
            [
                'route' => route('auth.logout'),
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'tKey' => 'logout'
            ]
        ]);
    }


    private function setMenuSchoolInstructor(): Collection
    {
        return collect([
            [
                'route' => route('general.dashboard'),
                'active' => request()->routeIs('general.dashboard'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'dashboard'
            ],
            [
                'route' => route('school.my-class.index'),
                'active' => request()->routeIs('school.my-class.index') || request()->routeIs('school.my-class.subject'),
                'icon' => 'ri-book-2-fill',
                'tKey' => 'my-classes'
            ],
            [
                'route' => route('assignment.assignment.index'),
                'active' => request()->routeIs('assignment.assignment.index'),
                'icon' => 'ri-file-text-line',
                'tKey' => 'assignments'
            ],
            [
                'route' => route('quiz.index'),
                'active' => request()->routeIs('quiz.index'),
                'icon' => 'ri-question-line',
                'tKey' => 'quizzes'
            ],
            [
                'route' => route('general.grade'),
                'active' => request()->routeIs('general.grade'),
                'icon' => 'ri-calendar-check-line',
                'tKey' => 'grades'
            ],
//            [
//                'route' => route('payment.payment-credential.index'),
//                'active' => request()->routeIs('payment.payment-credential.index') || request()->routeIs('payment.history')|| request()->routeIs('payment.withdrawal-request.index'),
//                'icon' => 'ri-bank-card-line',
//                'tKey' => 'payments'
//            ],
            [
                'route' => route('general.settings.index'),
                'active' => request()->routeIs('general.settings.index'),
                'icon' => 'ri-settings-2-line',
                'tKey' => 'settings'
            ],
            [
                'route' => route('auth.logout'),
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'tKey' => 'logout'
            ]
        ]);
    }


    private function setMenuAcademyInstructor(string $institution): Collection
    {
        return collect([
            [
                'route' => route('general.dashboard'),
                'active' => request()->routeIs('general.dashboard'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'dashboard'
            ],
            [
                'route' => route('general.institution.add-step', ['program' => $institution == 'academy' ? 'course' : 'classes']),
                'active' => request()->routeIs('general.institution.add-step'),
                'icon' => 'ri-add-circle-line',
                'tKey' => 'add-new-course'
            ],
            [
                'route' => route('academy.my-courses'),
                'active' => request()->routeIs('academy.my-courses'),
                'icon' => 'ri-book-2-fill',
                'tKey' => 'my-courses'
            ],
            [
                'route' => route('assignment.assignment.index'),
                'active' => request()->routeIs('assignment.assignment.index'),
                'icon' => 'ri-file-text-line',
                'tKey' => 'assignments'
            ],
            [
                'route' => route('general.grade'),
                'active' => request()->routeIs('general.grade'),
                'icon' => 'ri-calendar-check-line',
                'tKey' => 'grades'
            ],
//            [
//                'route' => route('payment.history'),
//                'active' => request()->routeIs('payment.history'),
//                'icon' => 'ri-bank-card-line',
//                'tKey' => 'payments'
//            ],
            [
                'route' => route('general.settings.index'),
                'active' => request()->routeIs('general.settings.index'),
                'icon' => 'ri-settings-2-line',
                'tKey' => 'settings'
            ],
            [
                'route' => route('auth.logout'),
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'tKey' => 'logout'
            ]
        ]);
    }


    private function setMenuSchoolStudent(): Collection
    {
        return collect([
            [
                'route' => route('general.dashboard'),
                'active' => request()->routeIs('general.dashboard'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'dashboard'
            ],
            [
                'route' => route('school.student-subject.index'),
                'active' => request()->routeIs('school.student-subject.index'),
                'icon' => 'ri-book-2-fill',
                'tKey' => 'my-subjects'
            ],
            [
                'route' => route('quiz.index'),
                'active' => request()->routeIs('quiz.index'),
                'icon' => 'ri-question-line',
                'tKey' => 'quizzes'
            ],
//            [
//                'route' => route('payment.history'),
//                'active' => request()->routeIs('payment.history'),
//                'icon' => 'ri-bank-card-line',
//                'tKey' => 'payments'
//            ],
            [
                'route' => route('general.settings.index'),
                'active' => request()->routeIs('general.settings.index'),
                'icon' => 'ri-settings-2-line',
                'tKey' => 'settings'
            ],
            [
                'route' => route('auth.logout'),
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'tKey' => 'logout'
            ]
        ]);
    }


    private function setMenuAcademyStudent(): Collection
    {
        return collect([
            [
                'route' => route('general.dashboard'),
                'active' => request()->routeIs('general.dashboard'),
                'icon' => 'ri-layout-left-line',
                'tKey' => 'dashboard'
            ],
//            [
//                'route' => route('payment.history'),
//                'active' => request()->routeIs('payment.history'),
//                'icon' => 'ri-bank-card-line',
//                'tKey' => 'payments'
//            ],
            [
                'route' => route('general.settings.index'),
                'active' => request()->routeIs('general.settings.index'),
                'icon' => 'ri-settings-2-line',
                'tKey' => 'settings'
            ],
            [
                'route' => route('auth.logout'),
                'active' => false,
                'icon' => 'ri-logout-box-r-line',
                'tKey' => 'logout'
            ]
        ]);
    }


    private function setMenuAdmin(): Collection
    {
        return collect([
            [
                'route' => route('admin.dashboard'),
                'active' => request()->routeIs('admin.dashboard'),
                'icon' => 'ri-home-8-line',
                'tKey' => 'dashboard',
            ],
            [
                'route' => route('admin.user.index'),
                'active' => request()->routeIs('admin.user.*'),
                'icon' => 'mdi mdi-account-group',
                'tKey' => 'admin.users',
            ],
            [
                'route' => route('admin.institution.index'),
                'active' => request()->routeIs('admin.institution.*'),
                'icon' => 'mdi mdi-school-outline',
                'tKey' => 'admin.institutions',
            ],
            [
                'route' => route('admin.country.index'),
                'active' => request()->routeIs('admin.country.*'),
                'icon' => 'mdi mdi-map-check-outline',
                'tKey' => 'admin.countries',
            ],
            [
                'route' => route('admin.settings.edit'),
                'active' => request()->routeIs('admin.settings.*'),
                'icon' => 'mdi mdi-cogs',
                'tKey' => 'admin.settings',
            ],
        ]);
    }
}
