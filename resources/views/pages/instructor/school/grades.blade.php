@extends('layouts.detached-layout')

@section('breadcrumbs')
    <x-breadcrumbs title="grade" />
@endsection

@section('content')
    <x-table.base key-header="{{\App\Enums\TableHeaderEnum::HEADER_INSTRUCTOR_SCHOOL_GRADES}}" variable="dim-gray">
        <x-slot:body>
            @foreach(range(0, 3) as $index)
                <tr>
                    <td>
                        <x-avatar src="{{ Auth::user()?->avatar }}" size="xs" rounded="circle" />
                        <span>{{ Auth::user()?->full_name }}</span>
                    </td>
                    <td colspan="5">
                        <div class="row align-items-center g-2">
{{--                            <div class="col col-lg-">--}}
{{--                                <x-avatar src="{{ Auth::user()?->avatar }}" size="xs" rounded="circle" />--}}
{{--                                <span>{{ Auth::user()?->full_name }}</span>--}}
{{--                            </div>--}}
                            <div class="col col-2">
                                <button class="px-5">85</button>
                            </div>
                            <div class="col col-2">
                                <button class="px-5">90</button>
                            </div>
                            <div class="col col-2">
                                <button class="px-5">75</button>
                            </div>
                            <div class="col col-2">
                                <button class="px-5">80,5</button>
                            </div>
                            <div class="col col-2">
                                <i class="ri-arrow-right-s-line align-bottom fw-medium" style="font-size: 25px"></i>
                                <i class="ri-arrow-up-s-line align-bottom fw-medium" style="font-size: 25px"></i>
                            </div>
                        </div>

                        <x-table.only-table key-header="{{\App\Enums\TableHeaderEnum::HEADER_INSTRUCTOR_SCHOOL_GRADES_DROPDOWN}}" variable="dim-gray">
                            <x-slot:body>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                            </x-slot:body>
                        </x-table.only-table>
                    </td>
                </tr>
            @endforeach
        </x-slot:body>
    </x-table.base>
@endsection