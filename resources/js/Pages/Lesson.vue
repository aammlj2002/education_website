<template>
    <div class="flex flex-row bg-gray-100">
        <LessonsLeftSideBar :lessons="lessons" :currentLesson="currentLesson" />
        <!-- Main section -->
        <main class="flex flex-col w-4/5 h-screen overflow-y-scroll">
            <Video />
            <div class="px-8 pt-4">
                <LessonDetailCard :currentLesson="currentLesson" />
                <InstructtorCard :instructor="currentLesson.instructor" />
                <LessonDescription :currentLesson="currentLesson" />
            </div>
        </main>
    </div>
</template>

<script>
import Video from '@/shared/Video'
import LessonDescription from '@/shared/LessonDescription'
import InstructtorCard from '@/shared/InstructtorCard'
import LessonDetailCard from '@/shared/LessonDetailCard'
import LessonsLeftSideBar from '@/shared/LessonsLeftSideBar'
export default {
    components: {
        LessonDescription,
        Video,
        InstructtorCard,
        LessonDetailCard,
        LessonsLeftSideBar,
    },
    layout: null,
    props: {
        lessons: Object, currentLesson: Object
    }
}
</script>