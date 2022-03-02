<template>
    <div class="mb-10 border-b-2 border-b-gray-300">
        <div class="flex items-center justify-center mt-10 ml-10 space-x-4">
            <Link
                href="/browse/all"
                class="px-3 py-2 text-sm font-medium text-gray-600 capitalize border-4 border-transparent hover:border-b-4 hover:border-b-blue-500 hover:text-gray-900"
            >All topics</Link>
            <Link
                class="px-3 py-2 text-sm font-medium text-gray-600 capitalize border-4 border-transparent hover:text-gray-900 hover:border-b-4 hover:border-b-blue-500"
                v-for="category in categories"
                :key="category.slug"
                v-text="category.name"
            ></Link>
        </div>
    </div>
    <slot />
</template>

<script>
import { Link, usePage } from "@inertiajs/inertia-vue3"
import { computed } from '@vue/runtime-core'
export default {
    components: { Link },
    setup() {
        const categories = computed(() => usePage().props.value.categories);
        return { categories };
    }
}
</script>

<style>
</style>