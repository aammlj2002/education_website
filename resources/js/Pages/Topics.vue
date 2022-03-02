<template>
    <Head title="Category: All"></Head>

    <div class="grid grid-cols-4 gap-4">
        <div v-for="topic in topics" :key="topic.id">
            <Link :href="`/topics/${topic.slug}`">
                <div class="p-4 bg-gray-800 shadow-lg rounded-xl">
                    <div class="block w-full h-full">
                        <div class="flex items-center w-full">
                            <svg width="50" height="50">
                                <g fill="none">
                                    <path
                                        d="M29.813 7.52l-4.836 8.377-4.836-8.376H4.036l20.94 36.27L45.918 7.52z"
                                        fill="#41B883"
                                    />
                                    <path
                                        d="M29.813 7.52l-4.836 8.377-4.836-8.376h-7.728l12.564 21.762L37.54 7.52z"
                                        fill="#34495E"
                                    />
                                </g>
                            </svg>
                            <div class="flex flex-col ml-2 items-left">
                                <span class="dark:text-white">{{topic.name}}</span>
                                <span
                                    class="text-sm text-gray-400 dark:text-gray-300"
                                >{{topic.course_count}} courses &#67871; {{topic.video_count}} videos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </Link>
        </div>
    </div>

    <!-- course are shown only the course array length is not -->
    <template v-if="courses.length > 0">
        <h3 class="mt-5 text-xl">Courses</h3>
        <div class="grid grid-cols-4 gap-4">
            <div v-for="course in courses" :key="course.id">
                <Link
                    as="button"
                    :href="`/courses/${course.slug}`"
                    class="w-full p-4 bg-gray-800 shadow-lg rounded-2xl"
                >
                    <div class="flex items-center">
                        <p class="ml-2 text-gray-700 text-md dark:text-gray-50">{{course.name}}</p>
                    </div>
                </Link>
            </div>
        </div>
    </template>
</template>

<script>
import { App, Link } from "@inertiajs/inertia-vue3"
import { ref } from '@vue/reactivity'
import TopicPageLayout from '../Layouts/TopicPageLayout';
import AppLayout from '../Layouts/AppLayout';
export default {
    props: {
        topics: Object,
        categories: Object,
        courses: Object
    },
    layout: (h, page) => h(AppLayout, () => h(TopicPageLayout, () => page)),
    components: {
        Link
    },
    setup() {
        let currentCategory = ref("");

        return { currentCategory };
    }
}
</script>
