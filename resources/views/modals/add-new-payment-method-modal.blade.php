<x-modal target="{{$target}}" title="{{$title}}" action="/">
    <div class="mb-2">
        <x-form.input name="card_number" label="Card number" id="card_number" placeholder="xxxx xxxx xxxx xxxx"/>
    </div>
    <div class="row mb-2">
        <div class="col">
            <x-form.date-time-picker name="expiry_date" icon="ri-calendar-line" label="Expiry date" />
        </div>
        <div class="col">
            <x-form.input name="cvv" label="CVV" />
        </div>
    </div>
    <div class="mb-2">
        <x-form.input name="card_holder_name" label="Card holder name" />
    </div>
    <div class="mb-2">
        <x-form.input name="is_default_card" type="checkbox" label="Make this card default" />
    </div>
</x-modal>

<script src="{{ URL::asset('build/libs/cleave.js/cleave.min.js') }}"></script>
<script>
    if (document.querySelector("#card_number")) {
        var cleaveBlocks = new Cleave('#card_number', {
            blocks: [4, 4, 4, 4],
            uppercase: true
        });
    }
</script>
