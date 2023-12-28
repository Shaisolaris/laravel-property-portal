<div>
    <div id="{{$name}}"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        ItcCustomSelect.create('#{{$name}}', {
            name: 'car',
            targetValue: 'ford',
            options: [
                ['volkswagen', 'Volkswagen'],
                ['ford', 'Ford'],
                ['toyota', 'Toyota'],
                ['nissan', 'Nissan']
            ],
            onSelected(select, option) {
                // выбранное значение
                console.log(`Выбранное значение: ${select.value}`);
                // индекс выбранной опции
                console.log(`Индекс выбранной опции: ${select.selectedIndex}`);
                // выбранный текст опции
                const text = option ? option.textContent : '';
                console.log(`Выбранный текст опции: ${text}`);
            },
        });

        document.querySelector('.itc-select').addEventListener('itc.select.change', (e) => {
            const btn = e.target.querySelector('.itc-select__toggle');
            // выбранное значение
            console.log(`Выбранное значение: ${btn.value}`);
            // индекс выбранной опции
            console.log(`Индекс выбранной опции: ${btn.dataset.index}`);
            // выбранный текст опции
            const selected = e.target.querySelector('.itc-select__option_selected');
            const text = selected ? selected.textContent : '';
            console.log(`Выбранный текст опции: ${text}`);
        });
    })

</script>
