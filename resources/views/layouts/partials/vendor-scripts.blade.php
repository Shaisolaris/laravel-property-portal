<script src="{{ URL::asset('build/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ URL::asset('build/scripts/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ URL::asset('build/scripts/plugins.js') }}"></script>

{{--TEMP PLACE--}}
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js') }}"></script>
<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js') }}"></script>

<script src="{{ URL::asset('build/libs/quill/quill.min.js') }}"></script>
{{--<script src="{{ URL::asset('build/scripts/pages/form-editor.init.js') }}"></script>--}}
<script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
<script src="{{ URL::asset('build/scripts/app.js') }}"></script>
{{----}}
@yield('script')
@yield('script-bottom')
