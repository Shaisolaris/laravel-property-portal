<template>
    <div
        :class="progressBg"
        class="progress position-relative"
        style="height: 30px; border-radius: 0 !important;"
    >
        <div
            style="top: 5px;"
            class="position-absolute text-dark fs-14 w-100 px-2"
        >
            <div class="d-flex justify-content-between">
                <span class="d-flex fw-bolder align-items-center">
                    <span
                        class="spinner-border flex-shrink-0"
                        role="status"
                        style="height: 15px; width: 15px;"
                    >
                        <span class="visually-hidden">
                             {{ text }}
                        </span>
                    </span>
                    <span class="flex-grow-1 ms-2">
                       {{ text }}
                    </span>
                </span>

                <div class="fw-medium">
                    {{ timeAwaiting }}
                </div>
            </div>
        </div>
        <div
            :class="progressBarBg"
            :style="`width: ${expirationPercentage}%;`"
            class="progress-bar progress-bar-striped progress-bar-animated"
            role="progressbar"
        />
    </div>
</template>

<script setup>
import { defineProps, defineEmits, ref, onMounted, watch } from 'vue';


const props = defineProps({
    timerTextBegin: {
        type: String,
        required: true
    },
    timerText: {
        type: String,
        required: true
    },
    timeLimit: {
        type: Number,
        required: true
    },
    maxTimeSeconds: {
        type: Number,
        required: true
    },
});

const emit = defineEmits(['timeOver']);
const progressBg = ref('bg-soft-primary');
const progressBarBg = ref('');
const expirationPercentage = ref(0);
const timeAwaiting = ref('');
const endDate = ref(null);
const text = ref(props.timerTextBegin);


const updateTimerText = (timer) => {
    if (timer >= 0) {
        let minutes = parseInt(timer / 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;

        let seconds = parseInt(timer % 60, 10);

        seconds = seconds < 10 ? "0" + seconds : seconds;

        return minutes + ":" + seconds;
    }

    return "00:00";
}

const startProgressTimer = () => {
    let timeLeftS = endDate.value ? (endDate.value.getTime() - new Date().getTime()) / 1000 : props.timeLimit;

    expirationPercentage.value = 101.5 - ((timeLeftS / props.maxTimeSeconds) * 101.5);

    timeAwaiting.value = updateTimerText(timeLeftS);

    if (expirationPercentage.value > 75) {
        text.value = props.timerText;
        progressBg.value = 'bg-soft-warning';
        progressBarBg.value = 'bg-warning';
    }

    if (expirationPercentage.value > 85) {
        progressBg.value = 'bg-soft-danger';
        progressBarBg.value = 'bg-danger';
    }

    if (expirationPercentage.value < 100) {
        setTimeout(startProgressTimer, 500);
    }
}


watch(
    () => timeAwaiting.value,
    (time) => {
        if(time === '00:00' || expirationPercentage.value > 99.5) {
            emit('timeOver');
        }
    }
);

onMounted(() => {
    let newEnd = new Date();
    newEnd.setSeconds(newEnd.getSeconds() + props.timeLimit);
    endDate.value = newEnd;

    startProgressTimer();
});
</script>

<style scoped>

</style>