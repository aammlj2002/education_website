<template>
    <app-layout title="Topics">
        <Link class="block" v-for="topic in topics" :key="topic.id" v-text="topic.name"></Link>
    </app-layout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from "@inertiajs/inertia-vue3"
defineProps({
    topics: Object
})
</script>
