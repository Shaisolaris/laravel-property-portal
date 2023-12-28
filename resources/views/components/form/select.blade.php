{{--<select class="form-select rounded-pill mb-3" aria-label="Default select example">--}}
{{--    <option selected>Search for services</option>--}}
{{--    <option value="1">Information Architecture</option>--}}
{{--    <option value="2">UI/UX Design</option>--}}
{{--    <option value="3">Back End Development</option>--}}
{{--</select>--}}
{{--<label--}}
{{--    v-if="label.length > 0 || showLabel"--}}
{{--    class="form-label cursor-pointer"--}}
{{-->--}}
{{--    <slot name="label">--}}
{{--        {{ label }}--}}
{{--    </slot>--}}
{{--</label>--}}

{{--<div>--}}
{{--    <div class="dropdown">--}}
{{--        <div class="dropdown-selected">--}}
{{--            <span class="arrow">--}}
{{--                    <svg--}}
{{--                        data-v-1202f497=""--}}
{{--                        width="7"--}}
{{--                        height="14"--}}
{{--                        viewBox="0 0 9 13"--}}
{{--                        fill="#3EAF69"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                        style="transform: rotate(-90deg);"--}}
{{--                    >--}}
{{--                        <path--}}
{{--                            d="M5.70872 12.1009L5.70798 12.1002L1.18625 7.41377C1.05151 7.27413 0.957851 7.1308 0.897178 6.98408C0.836662 6.83773 0.804687 6.67771 0.804687 6.49921C0.804687 6.32071 0.836662 6.1607 0.897178 6.01435C0.957851 5.86763 1.05151 5.7243 1.18625 5.58466L5.70799 0.898235C5.92955 0.6686 6.13834 0.556855 6.33288 0.51753C6.52642 0.478409 6.75515 0.500962 7.03517 0.625682C7.31508 0.750352 7.4979 0.910383 7.61448 1.09508C7.73191 1.2811 7.80416 1.52717 7.80469 1.85823L7.80469 11.1406C7.80469 11.4724 7.73259 11.7188 7.61523 11.9049C7.49874 12.0896 7.31585 12.2497 7.03545 12.3744C6.75477 12.4992 6.52585 12.5216 6.33246 12.4823C6.13813 12.4429 5.92971 12.331 5.70872 12.1009Z"--}}
{{--                            stroke="#3EAF69"--}}
{{--                        />--}}
{{--                    </svg>--}}
{{--                </span>--}}
{{--        </div>--}}
{{--        <div class="dropdown-options">--}}
{{--            --}}{{--            <div class="custom-select-option">1</div>--}}
{{--            <div class="dropdown-option">1</div>--}}
{{--            <div class="dropdown-option">2</div>--}}
{{--            <div class="dropdown-option">3</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@php
    $customSelectButtonId = "custom-select-buttonId-$random";
    $customSelectArrowId = "custom-select-arrowId-$random";
    $customSelectBodyId = "custom-select-bodyId-$random";
@endphp

<input type="text" name="{{$name}}">

<div class="custom-select rounded-pill">
    <div class="custom-select-text">
        <span class="custom-select-value">placeholder</span>
        <i class="ri-arrow-up-s-line fs-16 align-bottom custom-select-arrow"></i>
    </div>

    <div class="custom-select-body position-absolute opacity-0">
        <div data-value="1" class="custom-select-option">1</div>
        <div data-value="2" class="custom-select-option">2</div>
        <div data-value="3" class="custom-select-option">3</div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const customSelects = document.querySelectorAll('.custom-select');

        customSelects.forEach(select => {
            const selectText = select.querySelector('.custom-select-text');
            const selectBody = select.querySelector('.custom-select-body');
            const selectArrow = select.querySelector('.custom-select-arrow');

            selectText.addEventListener('click', function(event) {
                console.log('selectText');

                customSelects.forEach(otherSelect => {
                    if (otherSelect !== select) {
                        otherSelect.querySelector('.custom-select-body').classList.remove('active');
                        otherSelect.querySelector('.custom-select-arrow').classList.remove('show');
                    }
                });

                if(selectBody.classList.contains('active')) {
                    selectBody.classList.remove('active');
                } else {
                    selectBody.classList.add('active');
                }

                if(selectArrow.classList.contains('show')) {
                    selectArrow.classList.remove('show');
                } else {
                    selectArrow.classList.add('show');
                }

                event.stopPropagation();
            });

            select.querySelectorAll('.custom-select-option').forEach(option => {
                option.addEventListener('click', function(event) {
                    let value = this.getAttribute('data-value');
                    select.querySelector('.custom-select-value').innerText = this.innerText;
                    select.querySelector('input[type=hidden]').value = value;

                    selectBody.classList.remove('active');
                    selectArrow.classList.remove('show');

                    event.stopPropagation();
                });
            });
        });

        document.addEventListener('click', function() {
            customSelects.forEach(select => {
                select.querySelector('.custom-select-body').classList.remove('active');
                select.querySelector('.custom-select-arrow').classList.remove('show');
            });
        });
    });
</script>

<style lang="scss">
    .custom-select-arrow {
        transition: .3s ease-in-out;

        &.show {
            transform: rotate(180deg);
        }
    }

    .custom-select {
        font-size: 14px;
        position: relative;
        color: black;
        background: white;
        padding: 7px 12px;
        border-radius: 30px;
        border: 1px solid #F1F3F5;

        &:hover {
            cursor: pointer;
        }

        .custom-select-text {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .custom-select-body {
            border: 1px solid #F1F3F5;
            background: white;
            min-width: 100%;
            overflow-y: auto;
            overflow-x: hidden;
            max-height: 250px;
            left: 0;
            top: 45px;
            transition: opacity .2s ease-in-out;
            border-radius: 18px 18px 30px 30px;
            pointer-events: none;

            &.active {
                opacity: 1 !important;
                pointer-events: unset;
            }

            .custom-select-option {
                padding: 16px;
            }
        }
    }


    .dropdown {
        position: relative;
        user-select: none;

        &.replace-border {
            border: none !important;
        }
    }

    .dropdown-selected {
        padding: 8px 12px;
        border: 1px solid #D3D3D3;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 0.25rem;
        background-color: #fff;

        &.error {
            border-color: #C9000E;
        }
    }

    .arrow {
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .arrow.open {
        transform: scaleY(-1);
    }

    .dropdown-options {
        position: absolute;
        background-color: #f9f9f9;
        min-width: 100%;
        z-index: 1000;
        border: 1px solid #D3D3D3;
        overflow-y: auto;
        overflow-x: hidden;
        max-height: 250px;
    }

    .dropdown-option {
        padding: 8px 16px;
        cursor: pointer;
        color: #333333;

        &:hover {
            color: #3EAF69;
            background-color: white;
        }

        &.selected {
            color: white;
            background-color: #3EAF69;
        }
    }
</style>