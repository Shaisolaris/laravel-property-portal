<script setup>
import moment from "moment";

const props = defineProps({
    timeLimit: {
        type: Number,
        required: true
    },
    maxTimeSeconds: {
        type: Number,
        required: true
    },
    datatimeValue: {
        type: String,
        required: true
    }
});
const emit = defineEmits(['timeOver']);
const timeAwaiting = ref('');
const endDate = ref(null);
let intervalId = null;


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
    if(intervalId !== null) {
        clearInterval(intervalId);
    }

    intervalId = setInterval(() => {
        const now = new Date();
        const timeLeftS = (endDate.value - now) / 1000;

        if (timeLeftS < 0) {
            emit('timeOver');
        }

        if (timeLeftS <= 0 && moment(endDate.value).isAfter(moment())) {
            clearInterval(intervalId);
            timeAwaiting.value = "00:00";
            emit('timeOver');
        } else {
            timeAwaiting.value = updateTimerText(Math.floor(timeLeftS));
        }
    }, 1000);
};


onMounted(() => {
    nextTick(() => {
        let newEnd = new Date(props.datatimeValue);
        newEnd.setSeconds(newEnd.getSeconds() + props.timeLimit);
        endDate.value = newEnd;

        startProgressTimer();
    });
});

onBeforeUnmount(() => {
    if(intervalId !== null) {
        clearInterval(intervalId);
    }
});
</script>

<template>
    <span>
        {{ timeAwaiting }}
    </span>
</template>

<style scoped>

</style>