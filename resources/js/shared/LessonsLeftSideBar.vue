<template>
    <div class="relative w-1/5 h-screen px-3 overflow-y-scroll bg-gray-800">
        <div class="flex flex-row items-center justify-between px-2 py-4 text-white">
            <Link
                :href="`/courses/${currentLesson.course.slug}`"
                class="flex flex-row items-center justify-between hover:text-blue-500"
            >
                <LeftArrowIcon width="26" />
                <div class="text-xs font-bold capitalize">course overview</div>
            </Link>
            <Link href="/courses">Edu</Link>
        </div>
        <div class="px-2 py-4">
            <div class="flex flex-row justify-evenly">
                <div class="w-4/12">
                    <img
                        class="rounded-full w-14 h-14"
                        :src="currentLesson.instructor.profile_photo_url"
                        alt="avatar"
                    />
                </div>
                <div class="w-8/12">
                    <div class="flex flex-col">
                        <div class="mb-2 text-sm font-bold text-white">{{currentLesson.course.name}}</div>
                        <div class="flex flex-row mb-5 space-x-5 text-gray-300">
                            <div class="flex flex-row items-center">
                                <div class="mr-2">
                                    <BookIcon fill="fill-gray-300" />
                                </div>
                                <div class="text-2xs">{{lessons.length}} Lessons</div>
                            </div>
                            <div class="flex flex-row items-center text-xs">
                                <div class="mr-2">
                                    <ClockIcon fill="fill-gray-300" />
                                </div>
                                <div class="text-2xs">{{currentLesson.course.duration}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col space-y-3">
            <template v-for="(lesson, itemObjKey) in lessons" :key="lesson.id">
                <LessonCardSmall
                    :lesson="lesson"
                    :itemObjKey="itemObjKey"
                    :currentLesson="currentLesson"
                />
            </template>
        </div>
    </div>
</template>

<script>
import LessonCardSmall from '@/shared/LessonCardSmall'
import { Link } from "@inertiajs/inertia-vue3"
import LeftArrowIcon from '@/shared/svg/LeftArrowIcon'
import ClockIcon from '@/shared/svg/ClockIcon'
import BookIcon from '@/shared/svg/BookIcon'
export default {
    components: {
        LessonCardSmall,
        LeftArrowIcon,
        ClockIcon, BookIcon, Link
    },
    props: { lessons: Object, currentLesson: Object }

}
</script>

<style>
</style>