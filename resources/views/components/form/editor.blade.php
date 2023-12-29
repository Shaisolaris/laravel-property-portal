<input type="hidden" name="{{$name}}" id="{{$name}}">
<div class="ckeditor-classic"></div>

<script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script>
    const ckClassicEditor = document.querySelectorAll(".ckeditor-classic");

    if (ckClassicEditor) {
        Array.from(ckClassicEditor).forEach(function () {
            ClassicEditor
                .create(document.querySelector('.ckeditor-classic'))
                .then(function (editor) {
                    editor.model.document.on('change:data', () => {
                        document.querySelector("[name='{{$name}}']").value = editor.getData();
                    });

                    editor.ui.view.editable.element.style.height = '200px';
                })
                .catch(function (error) {
                    console.error(error);
                });
        });
    }

    // Snow theme
    const snowEditor = document.querySelectorAll(".snow-editor");

    if (snowEditor) {
        Array.from(snowEditor).forEach(function (item) {
            let snowEditorData = {};
            let isSnowEditorVal = item.classList.contains("snow-editor");
            if (isSnowEditorVal === true) {
                snowEditorData.theme = 'snow',
                    snowEditorData.modules = {
                        'toolbar': [
                            [ { 'font': [] }, { 'size': [] } ],
                            [ 'bold', 'italic', 'underline', 'strike' ],
                            [ { 'color': [] }, { 'background': [] } ],
                            [ { 'script': 'super' }, { 'script': 'sub' } ],
                            [ { 'header': [ false, 1, 2, 3, 4, 5, 6 ] }, 'blockquote', 'code-block' ],
                            [ { 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' } ],
                            [ 'direction', { 'align': [] } ],
                            [ 'link', 'image', 'video' ],
                            [ 'clean' ]
                        ]
                    }
            }
            new Quill(item, snowEditorData);
        });
    }

    const bubbleEditor = document.querySelectorAll(".bubble-editor")

    if (bubbleEditor) {
        Array.from(bubbleEditor).forEach(function (element) {
            let bubbleEditorData = {};
            let isBubbleEditorVal = element.classList.contains("bubble-editor");
            if (isBubbleEditorVal === true) {
                bubbleEditorData.theme = 'bubble'
            }

            new Quill(element, bubbleEditorData);
        });
    }
</script>
