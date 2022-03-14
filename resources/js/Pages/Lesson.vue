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
                <form @submit.prevent="sendComment">
                    <div class="px-8 py-6 mx-8 mb-4 bg-white rounded-tr-xl rounded-tl-xl">
                        <div class="pl-4 mb-6 text-lg font-bold text-black">Reply to post</div>
                        <textarea
                            class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border-gray-300 appearance-none resize-none focus:outline-dashed border-x-0 border-y focus:outline-none focus:ring-2 focus:ring-transparent focus:border-gray-400"
                            placeholder="Enter your comment"
                            rows="5"
                            cols="40"
                            v-model="form.body"
                        ></textarea>
                        <p v-if="errors.body" class="mb-4 text-sm text-red-600">{{errors.body}}</p>
                        <div class="flex flex-row justify-end mt-8 space-x-4">
                            <!-- <button
                                class="px-12 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-gray-300 rounded-full shadow-sm hover:bg-gray-400"
                            >Cancle</button>-->
                            <button
                                type="submit"
                                class="px-12 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-blue-400 rounded-full shadow-sm hover:bg-blue-500"
                            >Post</button>
                        </div>
                    </div>
                </form>

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
                    <!-- reply -->
                    <template v-for="comment in comment.replies" :key="comment.id">
                        <div
                            class="flex flex-row gap-3 px-3 py-4 mb-6 ml-24 mr-8 bg-white rounded-md shadow-sm"
                        >
                            <div class="flex content-center justify-center w-1/12">
                                <img
                                    class="w-12 h-12 rounded-full"
                                    :src="comment.commenter.profile_photo_url"
                                    alt="avatar"
                                />
                            </div>
                            <div class="w-10/12">
                                <h3
                                    class="font-bold text-black font-base"
                                >{{comment.commenter.name}}</h3>
                                <p class="text-gray-600 text-2xs">Posted 3 days ago</p>
                                <p class="mt-6 text-gray-900">{{comment.body}}</p>
                            </div>
                        </div>
                    </template>
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