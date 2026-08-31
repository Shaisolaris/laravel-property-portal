<script setup>
defineProps({
    type: {
        type: String,
        default: () => "default",
    }
})

</script>

<template>
    <template v-if="type === 'default'">
        <div class="card card-body">
            <slot/>
        </div>
    </template>
</template>
