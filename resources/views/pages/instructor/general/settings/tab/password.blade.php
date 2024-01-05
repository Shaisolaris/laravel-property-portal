<form method="POST" action="">
    <x-card.base>
        <div class="row gy-3">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3 text-start">
                        <div>{{ trans('translation.label.email') }}</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <x-form.input
                            name="email"
                            :value="\Illuminate\Support\Facades\Auth::user()->email"
                        />
                    </div>
                    <div class="col-12 col-md-3 text-end">
                        <x-link key="change" href="javascript:void(0);" />
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3 text-start">
                        <div>{{ trans('translation.label.password') }}</div>
                    </div>
                    <div class="col-12 col-md-6">
                        <x-form.input name="password" type="password" value="grg" />
                    </div>
                    <div class="col-12 col-md-3 text-end">
                        <x-link key="update" href="javascript:void(0);" />
                    </div>
                </div>
            </div>
        </div>
    </x-card.base>
</form>