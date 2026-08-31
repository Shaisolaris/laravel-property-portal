<script setup>

</script>

<template>
    <Card class="bg-beige shadow-black text-center text-black border border-2 border-black">
        <slot name="title">
            <div class="fs-3 fontf-HelveticaNeue fw-medium">
                Math: Pre-K - 8th grade
            </div>
        </slot>
        <slot name="body">
            <div class="fs-16 fontf-HelveticaNeue py-3">
                Pre-K through grade 2, Early math review, 2nd grade - 8th grade, See Pre-K - 8th Math
            </div>
        </slot>
        <slot name="icon">
            <div>
                icon
            </div>
        </slot>
    </Card>
</template>

<style scoped>

</style>