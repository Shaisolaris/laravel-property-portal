@php
    $steps = [
        [
            'is_active' => false,
            'is_done' => false,
            'name' => "Basic Information"
        ],
        [
            'is_active' => false,
            'is_done' => false,
            'name' => "Advance Information"
        ],
        [
            'is_active' => false,
            'is_done' => false,
            'name' => "Curriculum"
        ],
        [
            'is_active' => false,
            'is_done' => false,
            'name' => "Assignments & Quiz"
        ],
        [
            'is_active' => false,
            'is_done' => false,
            'name' => "Pricing & Payments"
        ],
        [
            'is_active' => false,
            'is_done' => false,
            'name' => "Publish Course"
        ]
    ];

    if(!is_null($number)) {

        foreach ($steps as $step) $step['is_active'] = false;

        $steps[$number - 1]['is_active'] = true;
    } else {
        $steps[0]['is_active'] = true;
    }
@endphp

<div class="d-flex gap-3 wrapper-form-add-new-course">
    @foreach($steps as $key => $step)
        <div class="navigation-add-new-course d-flex gap-3 align-items-center">
            <div class="d-flex navigation-add-new-course__item @if($step['is_active']) active @endif">
                <div class="rounded-circle navigation-add-new-course__item__marker d-flex justify-content-center align-items-center">
                    @if(!$step['is_done'])
                        <i class="bx bx-file-blank"></i>
                    @else
                        <i class="ri-check-line fs-16"></i>
                    @endif
                </div>
                @if($step['is_active'])
                    <div class="d-flex flex-column rounded-circle ms-2 navigation-add-new-course__text">
                        <div class="text-dim-gray fs-12">Step {{$key + 1}}</div>
                        <div class="text-black fs-14">{{$step['name']}}</div>
                    </div>
                @endif
            </div>
            @if(count($steps) != $key + 1)
                <div class="navigation-add-new-course__marker">
                    <i class="bx bx-chevron-right"></i>
                </div>
            @endif
        </div>
    @endforeach
</div>
