<template>
    <div class="flex flex-row bg-gray-100">
        <LessonsLeftSideBar :lessons="lessons" :currentLesson="currentLesson" />
        <!-- Main section -->
        <main class="flex flex-col w-4/5 h-screen overflow-y-scroll">
            <!-- lesson video will be here -->
            <img
                src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder.png"
                alt="palce holder"
            />
            <div class="px-8 pt-4">
                <LessonDetailCard :currentLesson="currentLesson" />

                <InstructtorCard :instructor="currentLesson.instructor" />
            </div>
        </main>
    </div>
</template>

<script>
import TikCircleIcon from '../shared/svg/TikCircleIcon'
import InstructtorCard from '../shared/InstructtorCard'
import LessonDetailCard from '@/shared/LessonDetailCard'
import LessonsLeftSideBar from '@/shared/LessonsLeftSideBar'
export default {
    components: {
        TikCircleIcon,
        InstructtorCard,
        LessonDetailCard,
        LessonsLeftSideBar,
    },
    props: { lessons: Object, currentLesson: Object },
    layout: null
}
</script>