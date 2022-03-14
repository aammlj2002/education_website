<template>
    <Head title="Library"></Head>

    <div class="pb-12 bg-gray-100">
        <div class="mx-48">
            <div>
                <div class="z-20 w-full px-4 py-12 mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-black">Watchlisted Lessons</h2>
                </div>
            </div>
            <div v-for="lesson in watchlistedLessons" :key="lesson.id">
                <WatchlistLessonCard :lesson="lesson" />
            </div>
        </div>
    </div>
</template>

<script>
import WatchlistLessonCard from '../shared/WatchlistLessonCard'
import BookIcon from '../shared/svg/BookIcon'
import ClockIcon from '../shared/svg/ClockIcon'
import { Link } from "@inertiajs/inertia-vue3"
export default {
    props: { watchlistedLessons: Object },
    components: {
        WatchlistLessonCard,
        BookIcon,
        ClockIcon, Link
    }
}
</script>
