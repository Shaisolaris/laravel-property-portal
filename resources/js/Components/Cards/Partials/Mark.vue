<script setup>
defineProps({
    name: {
        type: String,
        default: () => "",
    }
})
</script>
<template>
    <div :class="[
        'ms-2 mt-2 px-3 py-2 rounded-3 position-absolute top-0 card-mark card-mark_' + name.toLowerCase()
    ]" >
        {{name}}
    </div>
</template>
