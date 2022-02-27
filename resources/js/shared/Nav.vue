<template>
    <nav class="flex h-16 space-x-8">
        <Link :href="route('dashboard')" :active="route().current('dashboard')">Dashboard</Link>

        <button v-if="$page.props.jetstream.managesProfilePhotos">
            <img :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
        </button>

        <Link :href="route('profile.show')">Profile</Link>

        <Link
            :href="route('api-tokens.index')"
            v-if="$page.props.jetstream.hasApiFeatures"
        >API Tokens</Link>

        <!-- Authentication -->
        <form @submit.prevent="logout">
            <Link>Log Out</Link>
        </form>
    </nav>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3"
</script>

<style>
</style>