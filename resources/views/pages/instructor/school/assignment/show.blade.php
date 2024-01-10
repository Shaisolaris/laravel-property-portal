@extends('layouts.detached-layout')


@section('breadcrumbs')
    <x-breadcrumbs title="assignment-one">
        <x-slot:rightSide>
            <x-button.simple
                icon="ri-arrow-left-s-line"
                key="back-to-assignment"
                :href="route('instructor.school.assignment.index')"
            />
        </x-slot:rightSide>
    </x-breadcrumbs>
@endsection

@section('content')
    <x-card.base>
        <div class="accordion accordion-not-border" id="default-accordion-example">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                    >
                        <div>
                            <div class="fs-16 fw-medium w-100">Assignment one</div>
                            <div class="text-dim-gray fw-normal fs-14 w-100">Frontend basics: HTML and CSS</div>
                        </div>
                    </button>

                    <div class="row py-4">
                        <div class="col col-xl-10 col-xxl-11">
                            <x-avatar src="{{ Auth::user()?->avatar }}" size="xs" rounded="circle" />
                            <span>{{ Auth::user()?->full_name }}</span>
                            <x-progress percentage="10" />
                            <div class="d-flex justify-content-between pt-2">
                                <div class="text-dim-gray fs-14 fw-normal">Assigned: 02 Oct 2023</div>
                                <div class="text-dim-gray fs-14 fw-normal">Deadline: 14 Oct 2023</div>
                            </div>
                        </div>
                        <div class="col col-xl-2 col-xxl-1 text-end">
                            <span class="badge badge-lg bg-beige">
                                <x-text key="score" class="fs-16 text-dim-gray" />
                                <div class="fs-20 fw-medium pt-3">5</div>
                            </span>
                        </div>
                    </div>
                </h2>
                <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#default-accordion-example"
                >
                    <div class="accordion-body">
                        <x-card.base>1</x-card.base>
                        <x-card.base>2</x-card.base>
                        <x-card.base>3</x-card.base>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                    >
                        Why do we use it ?
                    </button>
                </h2>
                <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#default-accordion-example"
                >
                    <div class="accordion-body">

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                    >
                        Where does it come from ?
                    </button>
                </h2>
                <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#default-accordion-example"
                >
                    <div class="accordion-body">

                    </div>
                </div>
            </div>
        </div>


    </x-card.base>

    <x-text key="accepted" class="d-block fw-medium fs-18" />

    <x-card.base>

    </x-card.base>
@endsection
