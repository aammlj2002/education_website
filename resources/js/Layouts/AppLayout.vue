<template>
    <div>
        <Head :title="title" />

        <div>
            <Nav />

            <!-- Page Content -->
            <main class="mx-auto max-w-7xl">
                <slot></slot>
            </main>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import Nav from "@/shared/Nav.vue"

export default defineComponent({
    props: {
        title: String,
    },

    components: {
        Head,
        Link,
        Nav
    },

    methods: {


    }
})
</script>
