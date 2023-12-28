<x-modal target="{{$target}}" title="{{$title}}" >
    <div class="mb-2">
        <x-form.input label="Card number" />
    </div>
    <div class="row mb-2">
        <div class="col">
            <x-form.date icon="ri-home-7-line" label="Expiry date" />
        </div>
        <div class="col">
            <x-form.input label="CVV" />
        </div>
    </div>
    <div class="mb-2">
        <x-form.input label="Card holder name" />
    </div>
    <div class="mb-2">
        <x-form.input type="checkbox" label="Make this card default" />
    </div>
</x-modal>
