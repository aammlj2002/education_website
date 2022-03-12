<template>
    <div
        class="flex flex-row content-center px-1 py-2 border border-transparent rounded-md hover:border-blue-500 hover:border-opacity-20"
    >
        <div class="relative w-3/12">
            <div class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                <div class="grid w-8 h-8 grid-cols-1 bg-blue-500 rounded-full">
                    <div class="relative">
                        <div
                            class="absolute text-lg transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                        >
                            <PlayIcon width="10" fill="fill-white" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-9/12">
            <div class="flex flex-col justify-between">
                <Link
                    :href="`/courses/${currentLesson.course.slug}/lessons/${itemObjKey+1}`"
                    class="text-sm font-bold text-white hover:text-blue-500"
                >{{lesson.title}}</Link>
                <div class="flex flex-row space-x-5 text-gray-300">
                    <div class="text-2xs">Lesson {{itemObjKey+1}}</div>
                    <div class="flex flex-row items-center text-xs">
                        <div class="mr-1">
                            <ClockIcon fill="fill-gray-300" />
                        </div>
                        <div class="text-2xs">{{lesson.duration}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PlayIcon from './svg/PlayIcon'
import { Link } from "@inertiajs/inertia-vue3"
import ClockIcon from './svg/ClockIcon'
export default {
    components: {
        PlayIcon, ClockIcon, Link
    },
    props: { itemObjKey: String, lesson: Object, currentLesson: Object }
}
</script>

<style>
</style>