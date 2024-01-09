<div class="advance-information">
    <x-card.base>
        <div class="form-field mb-3">
            <x-form.date-time-picker name="duration" label="Duration (hh/mm/ss)*" id="duration_picker"/>
        </div>
        <div class="form-field mb-3">
            <x-form.multiselect name="tags" label="Tags*" id="tags" placeholder="Type tag name and press enter"/>
        </div>
        <div class="form-field mb-3">
            <x-form.select name="category" id="category" label="Category*"
                           :options="[['English', 'English'], ['French', 'French'], ['Spanish', 'Spanish']]"
                           placeholder="Select a category"/>
        </div>
        <div>
            <div class="fs-12 mb-3 text-black">Category Filters</div>
            <div class="row">
                <div class="col-4">
                    <x-card.base>
                        <div class="text-center font-weight-bold">Level</div>
                        <x-form.input reverseInputBox="true" type="checkbox" name="beginner" label="Beginner"/>
                        <x-form.input reverseInputBox="true" type="checkbox" name="intermediate" label="Intermediate"/>
                        <x-form.input reverseInputBox="true" type="checkbox" name="expert" label="Expert"/>
                    </x-card.base>
                </div>
                <div class="col-4">
                    <x-card.base>
                        <div class="text-center font-weight-bold">Language</div>
                        <x-form.input reverseInputBox="true" type="checkbox" name="english" label="English"/>
                        <x-form.input reverseInputBox="true" type="checkbox" name="arabian" label="العربية"/>
                        <x-form.input reverseInputBox="true" type="checkbox" name="portugal" label="Português"/>
                    </x-card.base>
                </div>
                <div class="col-4">
                    <x-card.base>
                        <div class="text-center font-weight-bold">Topic</div>
                        <x-form.input reverseInputBox="true" type="checkbox" name="makeup_artistry"
                                      label="Makeup Artistry"/>
                        <x-form.input reverseInputBox="true" type="checkbox" name="hair_styling" label="Hair Styling"/>
                        <x-form.input reverseInputBox="true" type="checkbox" name="skincare" label="Skincare"/>
                        <x-form.input reverseInputBox="true" reverseInputBox="true" type="checkbox" name="fashion"
                                      label="Fashion"/>
                        <x-form.input reverseInputBox="true" type="checkbox" name="nail_art" label="Nail Art"/>
                    </x-card.base>
                </div>
            </div>
        </div>
    </x-card.base>
</div>
