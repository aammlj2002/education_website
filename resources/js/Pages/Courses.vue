<template>
    <app-layout title="Series">
        <p v-for="course in courses" :key="course.id" v-text="course.name"></p>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
export default {
    props: { courses: Object },
    layout: AppLayout
}
</script>
