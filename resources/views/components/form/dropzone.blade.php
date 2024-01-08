<link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet">
<div>
    <div class="dropzone">
        <div class="fallback">
            <input name="file" type="file" multiple="multiple">
        </div>
        <div class="dz-message needsclick">
            <div class="mb-3 fs-16">
                Attach File
            </div>
            <p class="fs-14">Drag an drop a file or <span class="browse-action">Browse file</span></p>
        </div>
    </div>

    <ul class="list-unstyled mb-0" id="dropzone-preview">
        <li class="mt-2" id="dropzone-preview-list">
            <!-- This is used as the file preview template -->
            <div class="border rounded">
                <div class="d-flex p-2">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar-sm bg-light rounded">
                            <img data-dz-thumbnail class="img-fluid rounded d-block" src="{{URL::asset('build/images/new-document.png')}}"
                                 alt="Dropzone-Image" />
                        </div>
                    </div>
                    <div class="flex-grow-1 w-25 overflow-hidden">
                        <div class="pt-1">
                            <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                            <p class="fs-13 text-muted mb-0" data-dz-size></p>
                            <strong class="error text-danger" data-dz-errormessage></strong>
                        </div>
                    </div>
                    <div class="flex-shrink-0 ms-3">
                        <button data-dz-remove class="btn btn-sm btn-primary">Delete</button>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<script>
    // Dropzone
    let dropzonePreviewNode = document.querySelector("#dropzone-preview-list");
    dropzonePreviewNode.id = "";
    if(dropzonePreviewNode){
        let previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
        dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);
        new Dropzone(".dropzone", {
            url: 'https://httpbin.org/post',
            method: "post",
            previewTemplate: previewTemplate,
            previewsContainer: "#dropzone-preview",
        });
    }
</script>
