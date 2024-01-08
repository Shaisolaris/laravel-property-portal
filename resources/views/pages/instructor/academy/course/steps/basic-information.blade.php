<div class="base-information">
    <x-card.base>
        <div class="form-field mb-3">
            <x-form.input name="title" label="Title" id="title" placeholder="Enter course title"/>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <x-form.select name="course_type" id="course_type" label="Course type*"
                               :options="[['English', 'English'], ['French', 'French'], ['Spanish', 'Spanish']]"
                               placeholder="Video course"/>
            </div>
            <div class="col-6">
                <x-form.select name="language" id="language" label="Language*"
                               :options="[['English', 'English'], ['French', 'French'], ['Spanish', 'Spanish']]"
                               placeholder="English"/>
            </div>
        </div>
        <div class="form-field mb-3">
            <x-form.textarea name="seo_meta_description" id="seo_meta_description" label="SEO Meta Description"
                             id="seo_meta_description"/>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <x-form.file-input name="thumbnail" id="thumbnail" icon="ri-upload-2-line" label="Thumbnail*"
                                   placeholder="360 x 250 preferred"/>
            </div>
            <div class="col-6">
                <x-form.file-input name="cover_image" id="cover_image" icon="ri-upload-2-line" label="Cover Image*"
                                   placeholder="360 x 250 preferred"/>
            </div>
        </div>
        <div class="form-field mb-3">
            <x-form.input name="duration_minutes" label="Duration (Minutes)*" id="duration_minutes"
                          placeholder="Course duration (hh/mm/ss)"/>
        </div>
        <div class="form-field mb-3">
            <x-form.file-input name="demo_video" id="demo_video" icon="ri-upload-2-line" label="Demo Video (Optional)"
                               placeholder="mp4 preferred"/>
        </div>
        <div class="form-field mb-3">
            <x-form.editor name="description" id="description" label="Description"
                           placeholder="Start writing something..."/>
        </div>
        <div class="form-field mb-3">
            <x-form.dynamic-fields name="course_benefits"
                                   id="course_benefits"
                                   :label="'Course benefits'"
                                   placeholder="Benefit one"
            />
        </div>
    </x-card.base>
</div>
