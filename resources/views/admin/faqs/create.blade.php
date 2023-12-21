@extends('admin.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/vendors/summernote/summernote-bs4.min.css">
@endpush

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ trans('update.general_faqs') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a
                        href="{{ getAdminPanelUrl() }}">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ trans('update.general_faqs') }}</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <form
                                        action="{{ getAdminPanelUrl() }}/general-faqs/{{ !empty($support) ? $support->id.'/update' : 'store' }}"
                                        method="Post">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>{{ trans('update.general_faqs_select_page') }}</label>
                                            <select name="page"
                                                    class="form-control  @error('page') is-invalid @enderror">
                                                <option value="">---Select---</option>
                                                <option value="academy">Academy Landing Page</option>
                                                <option value="school">School Landing Page</option>
                                            </select>
                                            @error('page')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('update.general_faqs_question') }}</label>
                                            <input type="text" name="question"
                                                   class="form-control  @error('question') is-invalid @enderror"/>
                                            @error('question')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('update.general_faqs_answer') }}</label>
                                            <input type="text" name="answer"
                                                   class="form-control  @error('answer') is-invalid @enderror"/>
                                            @error('answer')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>{{ trans('update.general_faqs_active') }}</label>
                                            <select name="status"
                                                    class="form-control  @error('status') is-invalid @enderror">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-12 col-md-4 mt-2 mt-md-0">
                                                <button class="btn btn-primary w-100">{{ trans('admin/main.save') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
