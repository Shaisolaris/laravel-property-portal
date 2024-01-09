@php

$template = [
    'title' => 'Section title',
    'name' => 'Section name',
    'position' => 1,
    'items' => [
        [
            'title' => 'Lecture name',
            'position' => 1,
            'fields' => [
                [
                    'icon' => 'ri-upload-2-line',
                    'placeholder' => 'Video',
                    'name' => 'video',
                    'value' => ''
                ],
                [
                    'icon' => 'ri-upload-2-line',
                    'placeholder' => 'Attache file',
                    'name' => 'attache_file',
                    'value' => ''
                ],
                [
                    'icon' => 'ri-add-line',
                    'placeholder' => 'Captions',
                    'name' => 'captions',
                    'value' => ''
                ],
                [
                    'icon' => 'ri-add-line',
                    'placeholder' => 'Description',
                    'name' => 'description',
                    'value' => ''
                ],
                [
                    'icon' => 'ri-add-line',
                    'placeholder' => 'Lecture note',
                    'name' => 'lecture_note',
                    'value' => ''
                ],
            ]
        ]
    ]
];

$sections = [
    $template,
]
@endphp

<div class="curriculum-steps" id="curriculumSections">
    <div class="noted-element">
        <input type="hidden" name="data" id="storeSections" value='<?= json_encode($sections); ?>'>
        <div class="curriculum-step invisible position-absolute" id="section_">
            <div class="curriculum-step__header">
                <div class="d-flex">
                    <div class="curriculum-step__header--sort cursor-grab" id="sortedSection" data-section-id="">
                        <i class="las la-grip-lines"></i>
                    </div>
                    <div class="curriculum-step__header--name">
                        <span class="font-weight-bold">Section title:</span>
                        <span class="text-dim-gray me-2">Section name</span>
                    </div>
                </div>
                <div class="curriculum-step__header--actions cursor-pointer">
                    <div data-section-id="" id="addNewItemSection"><i class="ri-add-line"></i></div>
                    <div data-section-id="" id="editSection"><i class="ri-pencil-line"></i></div>
                    <div data-section-id="" id="deleteSection"><i class="ri-delete-bin-line"></i></div>
                </div>
            </div>
            <div class="curriculum-step__body">
                @foreach($template['items'] as $item_key => $item)
                    <div class="curriculum-step__body--item">
                        <div class="curriculum-step__body--item__header">
                            <div class="d-flex">
                                <div class="curriculum-step__body--item__header--sort cursor-grab" id="sortedItemSection" data-item-id="">
                                    <i class="las la-grip-lines"></i>
                                </div>
                                <div class="curriculum-step__body--item__header--name">
                                    {{$item['title']}}
                                </div>
                            </div>
                            <div class="curriculum-step__body--item__header--actions cursor-pointer">
                                <div data-section-id="" id="deleteItemSection"><i class="ri-delete-bin-line"></i></div>
                            </div>
                        </div>
                        <div class="curriculum-step__body--item-fields">
                            @foreach($item['fields'] as $field)
                                <div class="curriculum-step__body--item-fields-field">
                                    <x-form.input name="{{$field['name']}}" icon="{{$field['icon']}}" class="rounded-end" placeholder="{{$field['placeholder']}}"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @foreach($sections as $section_key => $section)
        <div class="curriculum-step" id="section_{{$section_key}}">
            <div class="curriculum-step__header">
                <div class="d-flex">
                    <div class="curriculum-step__header--sort cursor-grab" id="sortedSection" data-section-id="{{$section_key}}">
                        <i class="las la-grip-lines"></i>
                    </div>
                    <div class="curriculum-step__header--name">
                        <span class="font-weight-bold">{{$section['title']}}:</span>
                        <span class="text-dim-gray me-2">{{$section['name']}}</span>
                    </div>
                </div>
                <div class="curriculum-step__header--actions cursor-pointer">
                    <div data-section-id="{{$section_key}}" id="addNewItemSection"><i class="ri-add-line"></i></div>
                    <div data-section-id="{{$section_key}}" id="editSection"><i class="ri-pencil-line"></i></div>
                    <div data-section-id="{{$section_key}}" id="deleteSection"><i class="ri-delete-bin-line"></i></div>
                </div>
            </div>
            <div class="curriculum-step__body">
                @foreach($section['items'] as $item_key => $item)
                    <div class="curriculum-step__body--item">
                        <div class="curriculum-step__body--item__header">
                            <div class="d-flex">
                                <div class="curriculum-step__body--item__header--sort cursor-grab" id="sortedItemSection" data-item-id="{{$item_key}}">
                                    <i class="las la-grip-lines"></i>
                                </div>
                                <div class="curriculum-step__body--item__header--name">
                                    {{$item['title']}}
                                </div>
                            </div>
                            <div class="curriculum-step__body--item__header--actions cursor-pointer">
                                <div data-section-id="{{$section_key}}" id="deleteItemSection"><i class="ri-delete-bin-line"></i></div>
                            </div>
                        </div>
                        <div class="curriculum-step__body--item-fields">
                            @foreach($item['fields'] as $field)
                                <div class="curriculum-step__body--item-fields-field">
                                    <x-form.input name="{{$field['name']}}" icon="{{$field['icon']}}" class="rounded-end" placeholder="{{$field['placeholder']}}"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
    <div class="curriculum-steps--add cursor-pointer" id="addNewSection">
        <i class="ri-add-circle-line"></i>
        Add New Section
    </div>
</div>
<script>

    class DraggedFields {
        constructor() {
            this.sections = JSON.parse(document.getElementById('storeSections').value);
            this.addNewSection();
        }

        updateStore() {
            document.getElementById('storeSections').value = JSON.stringify(this.sections);
            this.updateDOMSections();
        }

        updateDOMSections() {
            let box = document.getElementById('curriculumSections');

            let newItem = ''

            console.log(box)
        }

        addNewSection() {
            let model = this;

            document.getElementById('addNewSection').onclick = function() {
                model.sections.push(<?= json_encode($template) ?>)
                model.updateStore();
            };
        }

    }

    new DraggedFields()
</script>
