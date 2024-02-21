<script setup>
const props = defineProps({
    text: {
        type: String,
        required: true
    },
    limit: {
        type: Number,
        default: 100,
    },
    tag: {
        type: String,
        default: 'span'
    }
});

const textValue = computed(function (){
    if(props.text.length > props.limit){
        return props.text.substring(0, props.limit) + '...';
    }

    return props.text;
});

</script>

<template>
    <component :is="tag">
        <slot name="custom-text">
            {{ textValue }}
        </slot>
    </component>
</template>

<style scoped></style>
