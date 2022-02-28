<template>
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="px-8 mx-auto max-w-7xl">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a class="flex-shrink-0" href="/">
                        <h2 class="text-lg text-white">Edu Web</h2>
                    </a>
                    <div class="block">
                        <div class="flex items-baseline ml-10 space-x-4">
                            <Link
                                :href="route('dashboard')"
                                :active="route().current('dashboard')"
                                class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-gray-800 dark:hover:text-white"
                            >Dashboard</Link>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="flex items-center ml-4 md:ml-6">
                        <div class="relative ml-3">
                            <div class="relative inline-block text-left">
                                <div>
                                    <button
                                        v-if="$page.props.jetstream.managesProfilePhotos"
                                        @click="showDropdown=!showDropdown"
                                        class="flex items-center justify-center w-full p-2 text-sm font-medium text-gray-700"
                                    >
                                        <img
                                            :src="$page.props.user.profile_photo_url"
                                            :alt="$page.props.user.name"
                                            class="object-cover w-10 h-10 mx-auto rounded-full"
                                        />
                                    </button>
                                </div>
                                <div
                                    :class="{hidden: !showDropdown}"
                                    class="absolute right-0 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-black ring-opacity-5"
                                >
                                    <div class="py-1">
                                        <Link
                                            :href="route('profile.show')"
                                            class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100 hover:text-gray-900"
                                        >Profile</Link>
                                        <Link
                                            :href="route('api-tokens.index')"
                                            v-if="$page.props.jetstream.hasApiFeatures"
                                            class="block px-4 py-2 text-gray-700 text-md hover:bg-gray-100 hover:text-gray-900"
                                        >API Tokens</Link>
                                        <Link
                                            class="block w-full px-4 py-2 text-left text-gray-700 text-md hover:bg-gray-100 hover:text-gray-900"
                                            as="button"
                                            type="submit"
                                            method="post"
                                            @click="logout"
                                        >Log Out</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3"
import { ref } from "@vue/reactivity"
let showDropdown = ref(false);
function logout() {
    Inertia.post(route('logout'));
}
</script>

<style>
</style>