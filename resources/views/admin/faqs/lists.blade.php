@extends('admin.layouts.app')

@push('libraries_top')

@endpush

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ trans('update.general_faqs') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ getAdminPanelUrl() }}">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ trans('update.general_faqs') }}</div>
            </div>
        </div>

        <div class="section-body">
            <section class="card">
                <div class="card-body">
                    <form method="get" class="mb-0">

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="input-label">{{trans('admin/main.search')}}</label>
                                    <input type="text" name="title" value="{{ request()->get('title') }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="input-label">{{trans('update.general_faqs_select_page')}}</label>
                                    <select name="category" data-plugin-selectTwo class="form-control populate">
                                        <option value="">---Select---</option>
                                        <option value="academy">Academy Landing Page</option>
                                        <option value="school">School Landing Page</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group mt-1">
                                    <label class="input-label mb-4"> </label>
                                    <input type="submit" class="text-center btn btn-primary w-100" value="{{trans('admin/main.show_results')}}">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </section>

            <section class="card">
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-striped font-14">

                            <tr>
                                <th>{{trans('update.general_faqs_select_page')}}</th>
                                <th class="text-center">{{trans('update.general_faqs_select_page')}}</th>
                                <th class="text-center">{{trans('update.general_faqs_question')}}</th>
                                <th class="text-left">{{trans('update.general_faqs_answer')}}</th>
                                <th class="text-center">{{trans('admin/main.actions')}}</th>
                            </tr>

                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->page }}</td>
                                    <td>{{ $item->question }}</td>
                                    <td>{{ $item->answer }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>

                <div class="card-footer text-center">
                    {{ $data->appends(request()->input())->links() }}
                </div>
            </section>

        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
