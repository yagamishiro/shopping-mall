<script setup>
defineProps(['message']);
</script>

<template>
    <div v-show="message">
        <small class="text-danger">
            {{ message }}
        </small>
    </div>
</template>