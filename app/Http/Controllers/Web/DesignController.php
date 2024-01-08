<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class DesignController extends Controller
{
    public function academy()
    {
        return view('design.academy_landing_page');
    }

    public function categories()
    {
        return view('design.categories');
    }

    public function helpAndSupport()
    {
        return view('design.support');
    }

    public function school()
    {
        return view('design.school_landing_page');
    }

    public function courseList()
    {
        return view('design.courses_list');
    }

    public function courseCard()
    {
        return view('design.courses_card');
    }

    public function allCourse()
    {
        return view('design.all_courses');
    }

    public function courseDetails()
    {
        return view('design.courses_details');
    }

    public function classDetails()
    {
        return view('design.class_details');
    }

    public function classList()
    {
        return view('design.class_list');
    }

    public function shortAndCausalCourses()
    {
        return view('design.short_and_causal_courses');
    }

    public function myCourses()
    {
        return view('design.my_courses');
    }

    public function studentDashboard()
    {
        return view('design.student_dashboard');
    }

    public function myMentor()
    {
        return view('design.my_mentor');
    }

    public function myCoursesCourse()
    {
        return view('design.my_courses_course');
    }

    public function subMentor()
    {
        return view('design.sub_mentor');
    }

    public function myCoursesAssignment()
    {
        return view('design.my_courses_assignment');
    }

    public function myAssignments()
    {
        return view('design.my_assignments');
    }

    public function myAssignmentsBrief()
    {
        return view('design.my_assignment_brief');
    }

    public function myMentorSession()
    {
        return view('design.my_mentor_session');
    }

    public function payment()
    {
        return view('pages.instructor.general.payments');
        return view('design.payment');
    }

    public function dashboardSettings()
    {
        return view('design.dashboard_settings');
    }

    public function learningResource()
    {
        return view('design.learning_resources');
    }

    public function tutorAndLiveSessions()
    {
        return view('design.tutors_and_live_sessions');
    }

    public function myGrades()
    {
        return view('design.my_grades');
    }

    public function schoolMyAssignments()
    {
        return view('design.schools_my_assignments');
    }

    public function myClasses()
    {
        return view('design.my_classes_grid');
    }

    public function myClassGroupCall()
    {
        return view('design.my_class_group_call');
    }

    public function mentorshipSingleCall()
    {
        return view('design.mentorship_single_call');
    }

    public function dashboardSchool()
    {
        return view('design.dashboard-school');
    }

    public function dashboardSchoolSetting()
    {
        return view('design.dashboard-school-setting');
    }

    public function dashboardSchoolPodcast()
    {
        return view('design.dashboard_school_podcast');
    }

    public function dashboardSchoolMentorship()
    {
        return view('design.dashboard-school-mentorship');
    }

    public function calender()
    {
        return view('design.calendar');
    }

    public function messages()
    {
        return view('design.messages');
    }

    public function podcastOpen()
    {
        return view('design.podcast_open');
    }
}
