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
                <!-- comment -->

                <div class="p-6 mx-8 mb-6 bg-white rounded-md shadow-sm">
                    <form @submit.prevent="sendComment">
                        <label class="text-gray-700" for="name">
                            <textarea
                                class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                placeholder="Enter your comment"
                                v-model="form.body"
                                rows="5"
                                cols="40"
                            ></textarea>
                        </label>
                        <p v-if="errors.body" class="mb-4 text-sm text-red-600">{{errors.body}}</p>
                        <button
                            class="px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2"
                        >Send</button>
                    </form>
                </div>

                <template v-for="comment in currentLesson.comments" :key="comment.id">
                    <div
                        class="flex flex-row gap-3 px-3 py-4 mx-8 mb-6 bg-white rounded-md shadow-sm"
                    >
                        <div class="flex content-center justify-center w-1/12">
                            <img
                                class="w-12 h-12 rounded-full"
                                :src="comment.commenter.profile_photo_url"
                                alt="avatar"
                            />
                        </div>
                        <div class="w-10/12">
                            <h3 class="font-bold text-black font-base">{{comment.commenter.name}}</h3>
                            <p class="text-gray-600 text-2xs">Posted 3 days ago</p>
                            <p class="mt-6 text-gray-900">{{comment.body}}</p>
                        </div>
                    </div>
                </template>
            </div>
        </main>
    </div>
</template>

<script>
import Video from '@/shared/Video'
import LessonDescription from '@/shared/LessonDescription'
import InstructorCard from '@/shared/InstructorCard'
import LessonDetailCard from '@/shared/LessonDetailCard'
import LessonsLeftSideBar from '@/shared/LessonsLeftSideBar'
import { Link, useForm } from "@inertiajs/inertia-vue3"
export default {
    components: {
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
    setup(props) {
        let form = useForm({
            body: ""
        });
        let sendComment = () => {
            form.post(`/lessons/${props.currentLesson.id}/comment/create`);
            form.reset();
        }
        return { sendComment, form };
    }
}
</script>