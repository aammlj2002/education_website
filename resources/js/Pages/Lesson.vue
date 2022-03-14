<template>
    <div class="flex flex-row bg-gray-100">
        <LessonsLeftSideBar :lessons="lessons" :currentLesson="currentLesson" />
        <!-- Main section -->
        <main class="flex flex-col w-4/5 h-screen overflow-y-scroll">
            <div class="w-full">
                <Video :currentLesson="currentLesson" />
            </div>
            <div class="px-8 pt-4">
                <LessonDetailCard :currentLesson="currentLesson" />
                <InstructorCard :instructor="currentLesson.instructor" />
                <LessonDescription :currentLesson="currentLesson" />
                <CommentSection :currentLesson="currentLesson" />
            </div>
        </main>
    </div>
</template>

<script>
import CommentSection from '../shared/CommentSection'
import HeartIcon from '@/shared/svg/HeartIcon'
import Video from '@/shared/Video'
import LessonDescription from '@/shared/LessonDescription'
import InstructorCard from '@/shared/InstructorCard'
import LessonDetailCard from '@/shared/LessonDetailCard'
import LessonsLeftSideBar from '@/shared/LessonsLeftSideBar'
import { Link } from "@inertiajs/inertia-vue3"
export default {
    components: {
        CommentSection,
        HeartIcon,
        LessonDescription,
        Video,
        InstructorCard,
        LessonDetailCard,
        LessonsLeftSideBar,
        Link
    },
    layout: null,
    props: {
        lessons: Object, currentLesson: Object, errors: Object
    },
}
</script>