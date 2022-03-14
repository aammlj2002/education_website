<template>
    <div>
        <Head :title="title" />

        <div>
            <Nav />

            <!-- Page Content -->
            <main class="mx-auto mb-6 max-w-7xl">
                <slot></slot>
            </main>
        </div>
        <Footer />
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import Footer from "@/shared/Footer.vue"
import Nav from "@/shared/Nav.vue"

export default defineComponent({
    props: {
        title: String,
    },

    components: {
        Head,
        Link,
        Nav,
        Footer
    },

    methods: {


    }
})
</script>
