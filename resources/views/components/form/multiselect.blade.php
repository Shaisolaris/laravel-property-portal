<div>
    <div>
        <div class="mb-3">
            <label for="choices-multiple-remove-button" class="form-label text-muted">With remove button</label>
            <select
                id="choices-multiple-remove-button"
                class="form-control"
                name="choices-multiple-remove-button"
                multiple
                data-choices
                data-choices-removeItem
            >
                <option value="Choice 1" selected>Choice 1</option>
                <option value="Choice 2">Choice 2</option>
                <option value="Choice 3">Choice 3</option>
                <option value="Choice 4">Choice 4</option>
            </select>
        </div>
    </div>

    <div>
        <div class="mb-3">
            <label for="choices-multiple-groups" class="form-label text-muted">Option groups</label>
            <select
                class="form-control"
                id="choices-multiple-groups"
                name="choices-multiple-groups"
                multiple
                data-choices
                data-choices-removeItem
                data-choices-multiple-groups="true"
            >
                <option value="">Choose a city</option>
                <optgroup label="UK">
                    <option value="London">London</option>
                    <option value="Manchester">Manchester</option>
                    <option value="Liverpool">Liverpool</option>
                </optgroup>
                <optgroup label="FR">
                    <option value="Paris">Paris</option>
                    <option value="Lyon">Lyon</option>
                    <option value="Marseille">Marseille</option>
                </optgroup>
                <optgroup label="DE" disabled>
                    <option value="Hamburg">Hamburg</option>
                    <option value="Munich">Munich</option>
                    <option value="Berlin">Berlin</option>
                </optgroup>
                <optgroup label="US">
                    <option value="New York">New York</option>
                    <option value="Washington" disabled>Washington</option>
                    <option value="Michigan">Michigan</option>
                </optgroup>
                <optgroup label="SP">
                    <option value="Madrid">Madrid</option>
                    <option value="Barcelona">Barcelona</option>
                    <option value="Malaga">Malaga</option>
                </optgroup>
                <optgroup label="CA">
                    <option value="Montreal">Montreal</option>
                    <option value="Toronto">Toronto</option>
                    <option value="Vancouver">Vancouver</option>
                </optgroup>
            </select>
        </div>
    </div>
</div>