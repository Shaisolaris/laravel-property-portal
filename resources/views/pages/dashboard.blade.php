@extends('layouts.detached-layout')

<?php
$items = [
    [
        "icon" => 'ri-group-fill',
        'text' => 'Total Students',
        'count' => 15
    ],
    [
        "icon" => 'ri-computer-fill',
        'text' => 'My Courses',
        'count' => 10
    ],
    [
        "icon" => 'ri-team-fill',
        'text' => 'Pending Meetings',
        'count' => 07
    ], [
        "icon" => 'ri-team-fill',
        'text' => 'Pending Meetings',
        'count' => 15
    ], [
        "icon" => 'ri-team-fill',
        'text' => 'Pending Meetings',
        'count' => '$1,477.60'
    ],
];
?>


@section('content')
    <x-card>
        <div class="d-flex justify-content-between">
            @foreach($items as $item)
                <div class="fs-16 p-2">
                    <x-icon-border :icon="$item['icon']" />
                    <div class="pt-3">{{ $item['text'] }}</div>
                    <div>{{ $item['count'] }}</div>
                </div>
            @endforeach
        </div>
    </x-card>

    <x-form.input label="Title" placeholder="tt" />
    <x-form.input label="Title" icon="ri-home-7-line" />
    <x-form.date label="Date" icon="ri-home-7-line" />
    <x-form.textarea label="Textarea" icon="ri-home-7-line" />
    <x-form.editor label="Editor" icon="ri-home-7-line" />

    <hr>

    <x-badge key="Accepted" variable="thistle"  />
    <x-badge key="Active" variable="light-steel-blue" />
    <x-badge key="Not Accepted" variable="crimson" size="md" />

    <hr>
    <x-button-toggle-modal target=".bs-modal-edit-section-name-modal" key="edit-section-name-modal" />
    @include('modals.edit-section-name-modal', ['target' => 'bs-modal-edit-section-name-modal','title' => 'Edit Section name'])

    <x-button-toggle-modal target=".bs-modal-lecture-video-modal" key="lecture-video-modal" />
    @include('modals.lecture-video-modal', ['target' => 'bs-modal-lecture-video-modal','title' => 'Lecture Video'])

    <x-button-toggle-modal target=".bs-modal-attach-file-modal" key="attach-file-modal" />
    @include('modals.attach-file-modal', ['target' => 'bs-modal-attach-file-modal','title' => 'Attach File'])

    <x-button-toggle-modal target=".bs-modal-add-lecture-caption-modal" key="add-lecture-caption-modal" />
    @include('modals.add-lecture-caption-modal', ['target' => 'bs-modal-add-lecture-caption-modal','title' => 'Add lecture caption'])

    <x-button-toggle-modal target=".bs-modal-add-new-payment-method-modal" key="add-new-payment-method-modal" />
    @include('modals.add-new-payment-method-modal', ['target' => 'bs-modal-add-new-payment-method-modal','title' => 'Add New Payment method'])
    <hr>

    <x-form.input type="checkbox" />

    <hr>

    <x-form.multiselect />

    <hr>

    <div class="row project-wrapper">
        <div class="col-xxl-8">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Active
                                        Projects</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span
                                                class="counter-value"
                                                data-target="825"
                                            >0</span></h4>
                                        <span class="badge bg-danger-subtle text-danger fs-12"><i
                                                class="ri-arrow-down-s-line fs-13 align-middle me-1"
                                            ></i>5.02 %</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Projects this month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-2 fs-2">
                                        <i data-feather="award" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted mb-3">New Leads</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span
                                                class="counter-value"
                                                data-target="7522"
                                            >0</span></h4>
                                        <span class="badge bg-success-subtle text-success fs-12"><i
                                                class="ri-arrow-up-s-line fs-13 align-middle me-1"
                                            ></i>3.58 %</span>
                                    </div>
                                    <p class="text-muted mb-0">Leads this month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded-2 fs-2">
                                        <i data-feather="clock" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Hours</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span
                                                class="counter-value"
                                                data-target="168"
                                            >0</span>h <span
                                                class="counter-value"
                                                data-target="40"
                                            >0</span>m</h4>
                                        <span class="badge bg-danger-subtle text-danger fs-12"><i
                                                class="ri-arrow-down-s-line fs-13 align-middle me-1"
                                            ></i>10.35 %</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Work this month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Projects Overview</h4>
                            <div>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    ALL
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    1M
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    6M
                                </button>
                                <button type="button" class="btn btn-soft-primary btn-sm">
                                    1Y
                                </button>
                            </div>
                        </div>

                        <div class="card-header p-0 border-0 bg-light-subtle">
                            <div class="row g-0 text-center">
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value" data-target="9851">0</span>
                                        </h5>
                                        <p class="text-muted mb-0">Number of Projects</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value" data-target="1026">0</span>
                                        </h5>
                                        <p class="text-muted mb-0">Active Projects</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1">$<span
                                                class="counter-value"
                                                data-target="228.89"
                                            >0</span>k</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                        <h5 class="mb-1 text-success"><span
                                                class="counter-value"
                                                data-target="10589"
                                            >0</span>h</h5>
                                        <p class="text-muted mb-0">Working Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 pb-2">
                            <div>
                                <div
                                    id="column_chart"
                                    data-colors='["--vz-info", "--vz-primary", "--vz-success"]'
                                    class="apex-charts"
                                    dir="ltr"
                                >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4">
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="card-title mb-0">Upcoming Schedules</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="upcoming-scheduled">
                        <input
                            type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y"
                            data-deafult-date="today" data-inline-date="true"
                        >
                    </div>

                    <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Events:</h6>
                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                        <div class="flex-shrink-0 avatar-sm">
                            <span class="mini-stat-icon avatar-title rounded-circle text-primary bg-primary-subtle fs-4">
                                09
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Development planning</h6>
                            <p class="text-muted mb-0">iTest Factory </p>
                        </div>
                        <div class="flex-shrink-0">
                            <p class="text-muted mb-0">9:20 <span class="text-uppercase">am</span></p>
                        </div>
                    </div>
                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                        <div class="flex-shrink-0 avatar-sm">
                            <span class="mini-stat-icon avatar-title rounded-circle text-primary bg-primary-subtle fs-4">
                                12
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Design new UI and check sales</h6>
                            <p class="text-muted mb-0">Meta4Systems</p>
                        </div>
                        <div class="flex-shrink-0">
                            <p class="text-muted mb-0">11:30 <span class="text-uppercase">am</span></p>
                        </div>
                    </div>
                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                        <div class="flex-shrink-0 avatar-sm">
                            <span class="mini-stat-icon avatar-title rounded-circle text-primary bg-primary-subtle fs-4">
                                25
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Weekly catch-up </h6>
                            <p class="text-muted mb-0">Nesta Technologies</p>
                        </div>
                        <div class="flex-shrink-0">
                            <p class="text-muted mb-0">02:00 <span class="text-uppercase">pm</span></p>
                        </div>
                    </div>
                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                        <div class="flex-shrink-0 avatar-sm">
                            <span class="mini-stat-icon avatar-title rounded-circle text-primary bg-primary-subtle fs-4">
                                27
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">James Bangs (Client) Meeting</h6>
                            <p class="text-muted mb-0">Nesta Technologies</p>
                        </div>
                        <div class="flex-shrink-0">
                            <p class="text-muted mb-0">03:45 <span class="text-uppercase">pm</span></p>
                        </div>
                    </div>

                    <div class="mt-3 text-center">
                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all Events</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Projects Overview</h4>
                        <div>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-soft-primary btn-sm">
                                1Y
                            </button>
                        </div>
                    </div>

                    <div class="card-header p-0 border-0 bg-light-subtle">
                        <div class="row g-0 text-center">
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="9851">0</span>
                                    </h5>
                                    <p class="text-muted mb-0">Number of Projects</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="1026">0</span>
                                    </h5>
                                    <p class="text-muted mb-0">Active Projects</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1">
                                        $<span
                                            class="counter-value"
                                            data-target="228.89"
                                        >0</span>k</h5>
                                    <p class="text-muted mb-0">Revenue</p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0 border-end-0">
                                    <h5 class="mb-1 text-success"><span
                                            class="counter-value"
                                            data-target="10589"
                                        >0</span>h</h5>
                                    <p class="text-muted mb-0">Working Hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 pb-2">
                        <div>
                            <div
                                id="column_chart_datalabel"
                                data-colors='["--vz-primary"]'
                                class="apex-charts"
                                dir="ltr"
                            >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js') }}"></script>

    <script src="{{ URL::asset('build/scripts/pages/apexcharts-column.init.js') }}"></script>
    <script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('build/scripts/app.js') }}"></script>
@endsection
