<script setup>
defineProps({
    status: {
        type: String,
        required: true
    }
});
</script>

<template>
    <div class="auth-page-content">
        <BContainer>
            <BRow>
                <BCol lg="12">
                    <div class="text-center mt-sm-5 pt-4 mb-4">
                        <div>
                            <Link :href="route('landing.academy.index')">home ({{ status }})</Link>
                        </div>
                    </div>
                </BCol>
            </BRow>
        </BContainer>
    </div>
</template>

<style scoped>

</style>