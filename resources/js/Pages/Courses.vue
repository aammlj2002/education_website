<template>
    <app-layout title="Series">
        <p v-for="course in courses" :key="course.id" v-text="course.name"></p>
    </app-layout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
defineProps({ courses: Object })
</script>
