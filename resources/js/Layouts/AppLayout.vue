<template>
    <div>
        <Head :title="title" />

        <!-- Primary Navigation Menu -->
        <div>
            <Nav />

            <!-- Page Content -->
            <main>
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

    data() {
        return {
            showingNavigationDropdown: false,
        }
    },

    methods: {
        switchToTeam(team) {
            this.$inertia.put(route('current-team.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },

        logout() {
            this.$inertia.post(route('logout'));
        },
    }
})
</script>
