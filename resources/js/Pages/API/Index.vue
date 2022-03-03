<template>
    <Head title="API Token" />
    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <api-token-manager
                :tokens="tokens"
                :available-permissions="availablePermissions"
                :default-permissions="defaultPermissions"
            />
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { Head } from "@inertiajs/inertia-vue3"
import ApiTokenManager from '@/Pages/API/Partials/ApiTokenManager.vue'
import AppLayout from '@/Layouts/AppLayout.vue'

export default defineComponent({
    props: [
        'tokens',
        'availablePermissions',
        'defaultPermissions',
    ],
    components: {
        ApiTokenManager,
        AppLayout,
        Head
    },
})
</script>
