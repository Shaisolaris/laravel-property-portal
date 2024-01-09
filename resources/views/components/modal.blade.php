<div
    class="modal fade zoomIn {{$target}}" id="showModal" tabindex="-1" aria-labelledby="{{$target}}"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header p-3 border-bottom">
                <h5 class="modal-title" id="{{$target}}">
                    <x-text key="modal-title.{{$title}}"></x-text>
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    id="close-modal"
                ></button>
            </div>
            @if($action)
                <form
                    class="tablelist-form"
                    autocomplete="off"
                    enctype="multipart/form-data"
                    action="{{$action}}"
                    method="{{$method}}"
                >
                    @csrf
                    @endif

                    <div class="modal-body">
                        {{$slot}}
                    </div>

                    @if($isTopic)
                        <div class="modal-footer justify-content-center">
                            <div class="hstack gap-2 justify-content-center">
                                <button
                                    name="publish_status"
                                    value="1"
                                    type="submit"
                                    class="btn w-lg  btn-primary"
                                    id="add-btn"
                                >
                                    Publish
                                </button>
                                <button
                                    name="publish_status"
                                    value="2"
                                    type="submit"
                                    class="btn w-lg  btn-primary"
                                    id="add-btn"
                                >
                                    Save as Draft
                                </button>
                                <button
                                    name="publish_status"
                                    value="0"
                                    type="button"
                                    class="btn w-lg btn-outline-light bg-white text-black"
                                    id="close-modal"
                                    data-bs-dismiss="modal"
                                >
                                    Cancel
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="modal-footer justify-content-center">
                            <div class="hstack gap-2 justify-content-center">
                                <button type="submit" class="btn w-lg  btn-primary" id="add-btn">
                                    Save
                                </button>
                                <button
                                    type="button"
                                    class="btn w-lg btn-outline-light bg-white text-black"
                                    id="close-modal"
                                    data-bs-dismiss="modal"
                                >
                                    Cancel
                                </button>
                            </div>
                        </div>
                    @endif
                    @if($action)
                </form>
            @endif
        </div>
    </div>
</div>
