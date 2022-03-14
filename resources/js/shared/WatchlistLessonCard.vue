<template>
    <div class="flex flex-row justify-between px-6 py-3 mb-4 bg-white rounded-lg">
        <div class="flex flex-row">
            <div class="flex items-center justify-center mr-4">
                <img
                    :src="$page.props.user.profile_photo_url ?? null"
                    :alt="$page.props.user.name"
                    class="object-cover w-10 h-10 mx-auto rounded-full"
                />
            </div>
            <div class="flex flex-col">
                <div class="font-bold text-black text-md">{{lesson.title}}</div>
                <div
                    class="font-semibold text-gray-500 capitalize text-2xs"
                >course: {{lesson.course.name}} | published {{new Date(lesson.created_at).toISOString().slice(0, 10)}}</div>
            </div>
        </div>
        <div class="flex flex-row items-center space-x-5">
            <!-- lesson number -->
            <div class="flex flex-row text-gray-500">
                <div class="flex flex-row items-center text-xs">
                    <div class="mr-1">
                        <BookIcon fill="fill-gray-500" />
                    </div>
                    <div class="text-2xs">Lessons {{lesson.episode}}</div>
                </div>
            </div>
            <!-- duration -->
            <div class="flex flex-row text-gray-500">
                <div class="flex flex-row items-center text-xs">
                    <div class="mr-1">
                        <ClockIcon fill="fill-gray-500" />
                    </div>
                    <div class="text-2xs">{{lesson.duration}}</div>
                </div>
            </div>
            <!-- watch button -->
            <div>
                <Link :href="`/courses/${lesson.course.slug}/lessons/${lesson.episode}`">
                    <button
                        class="px-2 py-1 transition-all border rounded-full hover:bg-white hover:text-blue-500 hover:border-blue-500"
                    >
                        <div class="font-bold uppercase text-2xs">watch</div>
                    </button>
                </Link>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3"
import ClockIcon from './svg/ClockIcon'
import BookIcon from './svg/BookIcon'
export default {
    components: {
        ClockIcon, BookIcon, Link
    },
    props: { lesson: Object }
}
</script>

<style>
</style>