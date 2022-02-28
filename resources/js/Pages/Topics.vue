<template>
    <app-layout title="Topics">
        <div class="mb-10 border-b-2 border-b-gray-300">
            <div class="flex items-center justify-center mt-10 ml-10 space-x-4">
                <Link
                    href="/browse/all"
                    class="px-3 py-2 text-sm font-medium text-gray-600 capitalize rounded-md hover:text-gray-900"
                >All topics</Link>
                <Link
                    class="px-3 py-2 text-sm font-medium text-gray-600 capitalize rounded-md hover:text-gray-900"
                    v-for="category in categories"
                    :key="category.id"
                    v-text="category.name"
                    :href="`/browse/${category.slug}`"
                ></Link>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-4">
            <div v-for="topic in topics" :key="topic.id">
                <Link
                    as="button"
                    :href="topic.slug"
                    class="w-full p-4 bg-gray-800 shadow-lg rounded-2xl"
                >
                    <div class="flex items-center">
                        <p class="ml-2 text-gray-700 text-md dark:text-gray-50">{{topic.name}}</p>
                    </div>
                </Link>
            </div>
        </div>
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
