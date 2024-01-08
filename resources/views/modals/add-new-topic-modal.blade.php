<x-modal target="{{$target}}" title="{{$title}}" action="/" isTopic="true">
    <div class="mb-2">
        <x-form.input name="topic_title" label="Topic title"/>
    </div>
    <div class="mb-2">
        <x-form.select name="category" label="Select category"/>
    </div>
    <div class="mb-2">
        <x-form.editor name="message" label="Message" placeholder="Start writing something..." />
    </div>
    <div class="mb-2">
        <x-form.dropzone name="batch_files" />
    </div>
</x-modal>
