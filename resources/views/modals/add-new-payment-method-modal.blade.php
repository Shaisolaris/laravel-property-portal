<div
    class="modal fade zoomIn {{$target}}" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header p-3 border-bottom">
                <h5 class="modal-title" id="exampleModalLabel">Create Task</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    id="close-modal"
                ></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
                <div class="modal-body">
                    
                </div>

                <div class="modal-footer justify-content-center">
                    <div class="hstack gap-2 justify-content-center">
                        <button type="submit" class="btn w-lg btn-light-blue" id="add-btn">
                            Add Task
                        </button>
                        <button type="button" class="btn w-lg btn-outline-light bg-white text-black" id="close-modal" data-bs-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
