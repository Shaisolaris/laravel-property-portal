<script>
    const changeState = (type = 'edit', dataEdit = '', dataClose = '') => {
        let firstElements = document.querySelectorAll(`[data-state-block=${dataEdit}]`);
        let secondElements = document.querySelectorAll(`[data-state-block=${dataClose}]`);

        if(type === 'edit') {
            if(firstElements.length > 0) {
                for(const element of firstElements) {
                    element.className = '';
                    element.classList.add('d-none');
                }
            }

            if(secondElements.length > 0) {
                for(const element of secondElements) {
                    element.className = '';
                    element.classList.add('d-block');
                }
            }
        }

        if(type === 'cancel') {
            if(firstElements.length > 0) {
                for(const element of firstElements) {
                    element.className = '';
                    element.classList.add('d-block');
                }
            }

            if(secondElements.length > 0) {
                for(const element of secondElements) {
                    element.className = '';
                    element.classList.add('d-none');
                }
            }
        }
    }
</script>

<x-card.base>
    <div class="pb-3">
        <x-text key="page.settings.profile.profile-photo" class="fw-medium" />
    </div>

    <div class="position-relative">
        <div class="d-flex w-100">
            <div class="me-4">
                <x-avatar
                    :src="$user->avatar"
                    size="xl"
                    rounded="circle"
                />
            </div>
            <div class="text-dim-gray pt-2 w-75 text-start">
                {{ $user->bio ?? 'Please add your bio...' }}
            </div>
        </div>

        <div class="position-absolute end-0 text-end" style="bottom: 15px">
            <x-button.simple icon="ri-upload-2-line" key="upload" />
        </div>
    </div>

    <x-line />

    <div>
        <div class="pb-3">
            <x-text key="page.settings.profile.basic-information.title" class="fw-medium" />
        </div>

        <form method="POST" action="">
            <div class="row gy-3">
                <div class="col-12">
                    <div class="row align-items-center gx-4">
                        <div class="col col-12 col-sm-3">
                            <x-text
                                key="page.settings.profile.basic-information.items.0"
                                class="text-dim-gray fw-medium"
                            />
                        </div>
                        <div class="col col-12 col-sm-5">
                            <div data-state-block="full-name-edit">
                                <div class="fw-medium">{{$user->full_name}}</div>
                            </div>

                            <div class="d-none" data-state-block="full-name-confirm-cancel">
                                <x-form.input name="full_name" :value="$user->full_name" />
                            </div>
                        </div>
                        <div class="text-start text-sm-end col-12 col-sm-4">
                            <div data-state-block="full-name-edit">
                                <x-icon type="button" icon-class="ri-edit-box-line text-royal-blue hover-element" onclick="changeState('edit', 'full-name-edit', 'full-name-confirm-cancel')" />
                            </div>

                            <div class="d-none" data-state-block="full-name-confirm-cancel">
                                <x-button.simple icon="ri-check-line" />
                                <x-button.simple type="button" icon="ri-close-fill" onclick="changeState('cancel', 'full-name-edit', 'full-name-confirm-cancel')" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row align-items-center gx-4">
                        <div class="col col-12 col-sm-3">
                            <x-text
                                key="page.settings.profile.basic-information.items.1"
                                class="text-dim-gray fw-medium"
                            />
                        </div>
                        <div class="col col-12 col-sm-5">
                            <div data-state-block="birth_date-edit">
                                <div class="fw-medium">{{Carbon\Carbon::now()->format('d M, Y')}}</div>
                            </div>

                            <div class="d-none" data-state-block="birth_date-confirm-cancel">
                                <x-form.input type="date" name="birth_date" />
                            </div>
                        </div>
                        <div class="text-start text-sm-end col-12 col-sm-4">
                            <div data-state-block="birth_date-edit">
                                <x-icon type="button" icon-class="ri-edit-box-line text-royal-blue hover-element" onclick="changeState('edit', 'birth_date-edit', 'birth_date-confirm-cancel')" />
                            </div>

                            <div class="d-none" data-state-block="birth_date-confirm-cancel">
                                <x-button.simple icon="ri-check-line" />
                                <x-button.simple type="button" icon="ri-close-fill" onclick="changeState('cancel', 'birth_date-edit', 'birth_date-confirm-cancel')" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row align-items-center gx-4">
                        <div class="col col-12 col-sm-3">
                            <x-text
                                key="page.settings.profile.basic-information.items.2"
                                class="text-dim-gray fw-medium"
                            />
                        </div>
                        <div class="col col-12 col-sm-5">
                            <div data-state-block="gender-edit">
                                <div class="fw-medium">{{\Illuminate\Support\Str::ucfirst($user->gender)}}</div>
                            </div>

                            <div class="d-none" data-state-block="gender-confirm-cancel">
                                <x-form.input name="gender" :value="$user->gender" />
                            </div>
                        </div>
                        <div class="text-start text-sm-end col-12 col-sm-4">
                            <div data-state-block="gender-edit">
                                <x-icon type="button" icon-class="ri-edit-box-line text-royal-blue hover-element" onclick="changeState('edit', 'gender-edit', 'gender-confirm-cancel')" />
                            </div>

                            <div class="d-none" data-state-block="gender-confirm-cancel">
                                <x-button.simple icon="ri-check-line" />
                                <x-button.simple type="button" icon="ri-close-fill" onclick="changeState('cancel', 'gender-edit', 'gender-confirm-cancel')" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row align-items-center gx-4">
                        <div class="col col-12 col-sm-3">
                            <x-text
                                key="page.settings.profile.basic-information.items.3"
                                class="text-dim-gray fw-medium"
                            />
                        </div>
                        <div class="col col-12 col-sm-5">
                            <div data-state-block="timezone-edit">
                                <div class="fw-medium">{{$user->timezone}}</div>
                            </div>

                            <div class="d-none" data-state-block="timezone-confirm-cancel">
                                <x-form.input name="timezone" :value="$user->timezone" />
                            </div>
                        </div>
                        <div class="text-start text-sm-end col-12 col-sm-4">
                            <div data-state-block="timezone-edit">
                                <x-icon type="button" icon-class="ri-edit-box-line text-royal-blue hover-element" onclick="changeState('edit', 'timezone-edit', 'timezone-confirm-cancel')" />
                            </div>

                            <div class="d-none" data-state-block="timezone-confirm-cancel">
                                <x-button.simple icon="ri-check-line" />
                                <x-button.simple type="button" icon="ri-close-fill" onclick="changeState('cancel', 'timezone-edit', 'timezone-confirm-cancel')" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row align-items-center gx-4">
                        <div class="col col-12 col-sm-3">
                            <x-text
                                key="page.settings.profile.basic-information.items.4"
                                class="text-dim-gray fw-medium"
                            />
                        </div>
                        <div class="col col-12 col-sm-5">
                            <div data-state-block="languages-edit">
                                @if(count(getUserLanguagesLists()) > 0)
                                    @foreach(getUserLanguagesLists() as $lang)
                                        <span class="fw-medium">{{ $lang }}@if(!$loop->last),@endif</span>
                                    @endforeach
                                @endif
                            </div>

                            <div class="d-none" data-state-block="languages-confirm-cancel">
                                <x-form.select name="languages" :options="[['English', 'English'], ['French', 'French'], ['Spanish', 'Spanish']]" />
                            </div>
                        </div>
                        <div class="text-start text-sm-end col-12 col-sm-4">
                            <div data-state-block="languages-edit">
                                <x-icon type="button" icon-class="ri-edit-box-line text-royal-blue hover-element" onclick="changeState('edit', 'languages-edit', 'languages-confirm-cancel')" />
                            </div>

                            <div class="d-none" data-state-block="languages-confirm-cancel">
                                <x-button.simple icon="ri-check-line" />
                                <x-button.simple type="button" icon="ri-close-fill" onclick="changeState('cancel', 'languages-edit', 'languages-confirm-cancel')" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-card.base>