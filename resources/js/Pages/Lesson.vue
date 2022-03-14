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
                <InstructtorCard :instructor="currentLesson.instructor" />
                <LessonDescription :currentLesson="currentLesson" />
                <!-- comment -->
                <!-- component -->
                <div
                    class="flex flex-row gap-3 px-3 py-4 mx-8 mt-6 mb-12 bg-white rounded-md shadow-sm"
                >
                    <div class="flex content-center justify-center w-1/12">
                        <img
                            class="w-12 h-12 rounded-full"
                            :src="currentLesson.instructor.profile_photo_url"
                            alt="avatar"
                        />
                    </div>
                    <div class="w-10/12">
                        <h3 class="font-bold text-black font-base">John Doe</h3>
                        <p class="text-gray-600 text-2xs">Posted 3 days ago</p>
                        <p
                            class="mt-6 text-gray-900"
                        >Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui placeat harum molestias, ipsa voluptatem mollitia facilis laborum ad, nesciunt at adipisci provident autem perferendis? Velit possimus voluptatum reprehenderit architecto sit?</p>
                    </div>
                </div>
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