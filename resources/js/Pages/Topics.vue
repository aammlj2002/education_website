<template>
    <app-layout title="Topics">
        <h1 class="text-3xl">Category</h1>
        <Link href="/browse/all" class="block">All topics</Link>
        <Link
            class="block"
            v-for="category in categories"
            :key="category.id"
            v-text="category.name"
            :href="`/browse/${category.slug}`"
        ></Link>
        <h1 class="text-3xl">topics</h1>
        <Link
            class="block"
            v-for="topic in topics"
            :key="topic.id"
            v-text="topic.name"
            :href="topic.slug"
        ></Link>
    </app-layout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from "@inertiajs/inertia-vue3"
defineProps({
    topics: Object,
    categories: Object
})
</script>
