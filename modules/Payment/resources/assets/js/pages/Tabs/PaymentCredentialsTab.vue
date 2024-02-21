<script setup>
import WrapSteps from "$module@payment/pages/Tabs/WrapSteps.vue";

const { paymentCredentials } = defineProps({
    paymentCredentials: {
        type: Array,
        required: true,
        default: []
    }
});

const customCreditCard = (e, index) => {
    let cardNumInput = document.getElementsByClassName("card-num-input")[index];
    let cardNumElem = document.getElementsByClassName("card-num-elem")[index];

    let cardHolderInput = document.getElementsByClassName("card-holder-input")[index],
        cardHolderElem = document.getElementsByClassName("card-holder-elem")[index];

    let expiryMonthInput = document.getElementsByClassName("expiry-month-input")[index],
        expiryMonthElem = document.getElementsByClassName("expiry-month-elem")[index];

    let expiryYearInput = document.getElementsByClassName("expiry-year-input")[index],
        expiryYearElem = document.getElementsByClassName("expiry-year-elem")[index];

    if (cardNumInput) {
        cardNumInput.onkeydown = function (e) {
            let key = e.keyCode || e.charCode;
            let is_digit = key >= 48 && key <= 57 || key >= 96 && key <= 105;
            let is_delete = key == 8 || key == 46;

            if (is_digit || is_delete) {
                let text = e.target.value;
                let len = text.length;
                if (is_digit && (len == 4 || len == 9 || len == 14)) cardNumInput.value = text + " ";
            } else return false;
        };
        cardNumInput.onkeyup = function (e) {
            let key = e.keyCode || e.charCode;
            let is_digit = key >= 48 && key <= 57 || key >= 96 && key <= 105;
            let is_delete = key == 8 || key == 46;

            if (is_digit || is_delete) {
                let text = e.target.value;
                let len = text.length;
                let digits = "XXXX XXXX XXXX XXXX".split('');

                if (is_digit && (len == 4 || len == 9 || len == 14)) digits[len] = " ";

                for (var i = 0; i < len; i++) {
                    digits[i] = text.charAt(i);
                }

                cardNumElem.innerText = digits.join('');

            } else return false;
        };

    }

    if (cardHolderInput) {
        cardHolderInput.onkeyup = function (e) {
            cardHolderElem.innerText = e.target.value;
        };
    }

    if (expiryMonthInput) {
        expiryMonthInput.onchange = function (e) {
            if (!e.target.value) expiryMonthElem.innerText = "00";

            expiryMonthElem.innerText = e.target.value;
        };
    }

    if (expiryYearInput) {
        expiryYearInput.onchange = function (e) {
            if (!e.target.value) expiryYearElem.innerText = "0000";
            expiryYearElem.innerText = e.target.value;
        };
    }
}
const form = useForm({ cards: paymentCredentials });
const formCard = useForm({ card: {} });

const addNewCard = () => {
    form.cards.push({ card_number: '', card_holder_name: '', expiry_month: '', expiry_year: '' });
}

const deletePaymentCredential = (index, paymentCredential) => {
    //TODO need Swal
    if (paymentCredential.uuid) {
        router.delete(route('payment.payment-credential.delete', { 'paymentCredential': paymentCredential }));
    }

    form.cards.splice(index, 1);
}

const submit = () => {
    form.post(route('payment.payment-credential.update-create'), {
        onError: errors => {
            console.log(errors);
        }
    });
}
</script>

<template>
    <WrapSteps tab="payment-credential" title="payment-credential">
        <template #payment-credential>
            <div class="text-end">
                <BaseButton
                    class="button-without-all"
                    icon="ri-add-circle-line"
                    t-key="new-card"
                    @click="addNewCard"
                />
            </div>
            <form autocomplete="off" @submit.prevent="submit">
                <b-row>
                    <b-col v-for="(card, index) in form.cards" cols="12" md="6" xxl="4">
                        <BCard no-body class="h-100">
                            <BCardHeader>
                                <h5 class="card-title mb-0">
                                    <Text tag="span" t-key="credit-card" />
                                    {{ card.card_number.length ? `(${card.card_number})` : '' }}
                                </h5>
                            </BCardHeader>
                            <BCardBody>
                                <div class="mx-auto">
                                    <div class="text-bg-info bg-gradient p-4 rounded-3 mb-3">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <i class="bx bx-chip h1 text-warning fsc-35"></i>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i
                                                    v-if="card.card_number[0] === '4'"
                                                    class="bx bxl-visa display-2 text-light-yellow mt-n3 fsc-73"
                                                ></i>
                                                <i
                                                    v-else-if="card.card_number[0] === '5'"
                                                    class="bx bxl-mastercard text-light-yellow display-2 mt-n3 fsc-73"
                                                ></i>
                                                <i
                                                    v-else
                                                    class="bx bxl-flickr display-2 mt-n3 text-dim-gray fsc-73"
                                                ></i>
                                            </div>
                                        </div>
                                        <div class="card-number fs-20 card-num-elem">
                                            {{ card.card_number.length ? `${card.card_number}` : 'XXXX XXXX XXXX XXXX' }}
                                        </div>

                                        <BRow class="mt-4">
                                            <BCol cols="6">
                                                <div>
                                                    <div class="text-white-50">
                                                        <Text tag="span" t-key="card-holder" />
                                                    </div>
                                                    <div class="fw-medium fs-14 card-holder-elem">
                                                        <span v-if="card.card_holder_name.length">{{ card.card_holder_name }}</span>
                                                        <Text v-else tag="span" t-key="full-name" />
                                                    </div>
                                                </div>
                                            </BCol>
                                            <BCol cols="6">
                                                <div class="expiry">
                                                    <div class="text-white-50">
                                                        <Text tag="span" t-key="expires" />
                                                    </div>
                                                    <div class="fw-medium fs-14">
                                                        <span class="expiry-month-elem">
                                                            {{ card.expiry_month.length ? `${card.expiry_month}` : '00' }}
                                                        </span>
                                                        /
                                                        <span class="expiry-year-elem">
                                                            {{ card.expiry_year.length ? `${card.expiry_year}` : '0000' }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </BCol>
                                        </BRow>
                                    </div>
                                </div>

                                <b-row class="gy-3 pt-3">
                                    <b-col cols="12">
                                        <TagLabel label="card-number" required />
                                        <BFormInput
                                            v-mask="'#### #### #### ####'"
                                            v-model="card.card_number"
                                            type="text"
                                            class="form-control card-num-input"
                                            maxlength="19"
                                            placeholder="0000 0000 0000 0000"
                                            @keypress="(e) => customCreditCard(e, index)"
                                        />
                                        <ErrorMessage :error="form.errors[`cards.${index}.card_number`]" />
                                    </b-col>
                                    <b-col cols="12">
                                        <BaseInput
                                            v-model="card.card_holder_name"
                                            :error="form.errors[`cards.${index}.card_holder_name`]"
                                            label="card-holder"
                                            placeholder="card-holder"
                                            class="card-holder-input"
                                            @keypress="(e) => customCreditCard(e, index)"
                                        />
                                    </b-col>
                                    <b-col cols="12">
                                        <BaseInput
                                            v-model="card.expiry_month"
                                            :error="form.errors[`cards.${index}.expiry_month`]"
                                            min="1"
                                            max="12"
                                            type="number"
                                            class="expiry-month-input"
                                            placeholder="expiry-month"
                                            label="expiry-month"
                                        />
                                    </b-col>
                                    <b-col cols="12">
                                        <BaseInput
                                            v-model="card.expiry_year"
                                            :error="form.errors[`cards.${index}.expiry_year`]"
                                            :min="new Date().getFullYear()"
                                            :max="new Date().getFullYear() + 40"
                                            type="number"
                                            class="expiry-year-input"
                                            placeholder="expiry-year"
                                            label="expiry-year"
                                        />
                                    </b-col>

                                    <b-col cols="12" class="mt-3 text-center">
                                        <BaseButton
                                            t-key="delete"
                                            variant="danger"
                                            class="mt-3 w-50"
                                            @click="deletePaymentCredential(index, card)"
                                        />
                                    </b-col>
                                </b-row>
                            </BCardBody>
                        </BCard>
                    </b-col>
                </b-row>
                <div class="col-12 mt-3">
                    <div class="hstack gap-2 justify-content-end">
                        <BaseButton
                            :class="{'opacity-25': form.processing }"
                            :disabled="form.processing || paymentCredentials >= 3"
                            t-key="save"
                            size="lg"
                            type="submit"
                        />
                    </div>
                </div>
            </form>
        </template>
    </WrapSteps>
</template>

<style scoped>

</style>