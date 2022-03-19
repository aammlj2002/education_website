<template>
    <h2 class="mb-4 text-2xl font-bold text-center text-black capitalize">Discuss This Lesson</h2>
    <div
        @click="openCommentForm(null, null)"
        class="flex flex-row gap-3 px-8 py-6 mx-8 mb-6 bg-white border border-transparent rounded-md shadow-sm cursor-pointer hover:border-blue-500 hover:border-dashed"
    >Contribute to Discussion</div>
    <!-- comment form -->
    <form
        @submit.prevent="sendComment"
        :class="{'bottom-0':showCommentForm, '-bottom-full':!showCommentForm}"
        class="absolute w-7/12 px-8 py-6 bg-white shadow-2xl shadow-x rounded-tr-xl rounded-tl-xl"
    >
        <div class="pl-4 mb-6 text-lg font-bold text-black">Reply to post</div>
        <textarea
            class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border-gray-300 appearance-none resize-none focus:outline-dashed border-x-0 border-y focus:outline-none focus:ring-2 focus:ring-transparent focus:border-gray-400"
            placeholder="Enter your comment"
            rows="5"
            cols="40"
            ref="body"
            v-model="form.body"
        ></textarea>
        <div class="flex flex-row justify-end mt-8 space-x-4">
            <div
                @click="closeCommentForm"
                class="px-12 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-gray-300 rounded-full shadow-sm cursor-pointer hover:bg-gray-400"
            >Cancle</div>
            <button
                :disabled="!form.body"
                :class="{'bg-blue-200 cursor-not-allowed hover:bg-blue-200' : !form.body }"
                type="submit"
                class="px-12 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-blue-400 rounded-full shadow-sm hover:bg-blue-500"
            >Post</button>
        </div>
    </form>

    <!-- comments  -->
    <template v-for="comment in currentLesson.comments" :key="comment.id">
        <div class="flex flex-row gap-3 px-3 py-4 mx-8 mb-6 bg-white rounded-md shadow-sm">
            <div class="flex content-center justify-center w-1/12">
                <img
                    class="w-12 h-12 rounded-full"
                    :src="comment.commenter.profile_photo_url"
                    alt="avatar"
                />
            </div>
            <div class="w-10/12">
                <h3 class="font-bold text-black font-base">{{comment.commenter.name}}</h3>
                <p class="text-gray-600 text-2xs">{{comment.created_at}}</p>
                <p class="mt-6 mb-4 text-gray-900">{{comment.body}}</p>
                <button
                    @click="openCommentForm(comment, comment.id)"
                    class="px-4 py-1 text-gray-600 border border-gray-200 rounded-lg hover:text-gray-700 hover:bg-opacity-10 hover:border-gray-300"
                >Reply</button>
            </div>
        </div>
        <!-- reply -->
        <template v-for="replyComment in comment.replies" :key="replyComment.id">
            <div
                class="flex flex-row gap-3 px-3 py-4 mb-6 ml-24 mr-8 bg-white rounded-md shadow-sm"
            >
                <div class="flex content-center justify-center w-1/12">
                    <img
                        class="w-12 h-12 rounded-full"
                        :src="replyComment.commenter.profile_photo_url"
                        alt="avatar"
                    />
                </div>
                <div class="w-10/12">
                    <h3 class="font-bold text-black font-base">{{replyComment.commenter.name}}</h3>
                    <p class="text-gray-600 text-2xs">{{replyComment.created_at}}</p>
                    <p class="mt-6 mb-4 text-gray-900">{{replyComment.body}}</p>
                    <button
                        @click="openCommentForm(replyComment, comment.id)"
                        class="px-4 py-1 text-gray-600 border border-gray-200 rounded-lg hover:text-gray-700 hover:bg-opacity-10 hover:border-gray-300"
                    >Reply</button>
                </div>
            </div>
        </template>
    </template>
</template>

<script>
import { ref } from '@vue/reactivity';
import { useForm } from '@inertiajs/inertia-vue3';
export default {
    props: { currentLesson: Object },
    setup(props) {
        let showCommentForm = ref(false);
        let body = ref();
        let form = useForm({
            body: "",
            parent_id: null
        });
        let openCommentForm = (comment, parent_id) => {
            showCommentForm.value = true;
            form.parent_id = parent_id;
            form.body = comment ? `@${comment.commenter.username} ` : "";
            body.value.focus();
        }
        let closeCommentForm = () => {
            showCommentForm.value = false;
            form.reset();
        }
        let sendComment = () => {
            form.post(`/lessons/${props.currentLesson.id}/comment/create`);
            form.reset();
            showCommentForm.value = false;
        };
        return { sendComment, body, openCommentForm, closeCommentForm, form, showCommentForm };
    }
}
</script>

<style>
</style>