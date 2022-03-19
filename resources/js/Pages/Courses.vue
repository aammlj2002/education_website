<template>
    <Head title="Courses"></Head>
    <div class="pb-12">
        <div v-for="course in courses" :key="course.id" class="mx-8">
            <CourseCard :course="course" />
        </div>
        <div v-if="course">
            <div class="grid justify-between grid-cols-8 col-span-5 p-6 bg-gray-800 shadow-xl">
                <div class="flex flex-col justify-between w-full col-span-5">
                    <div class="mt-2 ml-5 mr-10">
                        <h2 class="mb-2 text-4xl font-semibold text-white">{{course.name}}</h2>
                        <p class="mb-4 text-base text-white">{{course.description}}</p>
                    </div>
                    <div class="flex flex-col justify-between mt-2 ml-5 mr-10">
                        <div class="flex flex-row mb-5 space-x-5">
                            <div class="flex flex-row items-center text-xs text-white">
                                <div class="mr-2">
                                    <BookIcon :width="11" />
                                </div>
                                <div>{{course.lesson_count}} Lessons</div>
                            </div>
                            <div class="flex flex-row items-center text-xs text-white">
                                <div class="mr-2">
                                    <ClockIcon :width="11" />
                                </div>
                                <div>{{course.duration}}</div>
                            </div>
                            <div class="flex flex-row items-center text-xs text-white">
                                <div class="mr-2">
                                    <div class="flex space-x-1">
                                        <span
                                            class="block bg-white rounded"
                                            style="width: 5px; height: 11px;"
                                        ></span>
                                        <span
                                            class="block bg-white rounded"
                                            style="width: 5px; height: 11px;"
                                        ></span>
                                        <span
                                            class="block bg-white rounded"
                                            style="width: 5px; height: 11px;"
                                        ></span>
                                    </div>
                                </div>
                                <div>{{course.level}}</div>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <button
                                class="w-full px-4 py-2 mr-3 text-black bg-gray-100 border border-transparent rounded-full hover:border-blue-400 hover:text-blue-400 hover:transition-all"
                            >
                                <Link
                                    :href="`courses/${course.slug}`"
                                    class="flex flex-row items-center justify-center"
                                >
                                    <div class="mr-3">
                                        <PlayCircleIcon :width="15" />
                                    </div>
                                    <div>
                                        <div class="text-sm">Begin Courses</div>
                                    </div>
                                </Link>
                            </button>
                            <button
                                class="w-full px-4 py-2 mr-3 text-white bg-gray-700 border border-transparent rounded-full hover:border-blue-400 hover:text-blue-400 hover:transition-all"
                            >
                                <div class="flex flex-row items-center justify-center">
                                    <div class="mr-3">
                                        <SaveIcon />
                                    </div>
                                    <div>
                                        <div class="text-sm">Add to Watchlist</div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full col-span-3 p-6 bg-gray-900 rounded-3xl">
                    <div class="grid mb-8 text-white place-content-center">
                        <div
                            class="grid w-40 h-40 grid-cols-1 p-10 border-2 border-gray-400 rounded-full"
                        >
                            <div class="relative">
                                <div
                                    class="absolute text-5xl transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                                >10</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="text-xs text-center text-gray-300 uppercase"
                    >last episode in this course</div>
                    <div
                        class="mb-3 text-xs text-center text-gray-300 capitalize"
                    >added mar 1st, 2022</div>
                    <div
                        class="mb-2 text-lg text-center text-white capitalize"
                    >Notification Tests and Fakes</div>
                    <div
                        class="mb-5 text-xs text-center text-gray-300"
                    >Let's wrap up this mini-series by demonstrating how we might test our SendInvoice job.</div>
                    <button
                        class="w-full px-4 py-2 mr-3 text-base text-white bg-gray-800 border border-transparent rounded-full hover:border-blue-400 hover:text-blue-400 hover:transition-all"
                    >
                        <div class="flex flex-row items-center justify-center">
                            <div class="mr-3">
                                <PlayCircleIcon :width="17" />
                            </div>
                            <div>
                                <div class="uppercase">watch</div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-12 mx-60">
        <div v-for="(lesson, itemObjKey) in lessons" :key="lesson.id">
            <div
                class="flex w-full py-5 pl-2 pr-5 mt-4 overflow-hidden bg-white border border-gray-200 rounded-lg h-44"
            >
                <div class="relative w-2/12 bg-cover">
                    <div
                        class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                    >
                        <div
                            class="grid w-20 h-20 grid-cols-1 border-2 border-gray-200 rounded-full"
                        >
                            <div class="relative">
                                <div
                                    class="absolute text-2xl transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                                >{{itemObjKey+1}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between w-10/12 pl-1">
                    <div>
                        <Link
                            :href="`${course.slug}/lessons/${itemObjKey+1}`"
                            class="text-2xl font-bold text-gray-900"
                        >{{lesson.title}}</Link>
                        <p class="mt-2 text-sm text-gray-600">{{lesson.description}}</p>
                    </div>
                    <div class="text-xs text-gray-500">
                        <span class="inline-block mr-3">episode {{itemObjKey+1}}</span>
                        <span class="inline-block mr-1">
                            <ClockIcon />
                        </span>
                        <span class="inline-block">{{lesson.duration}} minutes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PlayCircleIcon from '@/shared/svg/PlayCircleIcon'
import BookIcon from '@/shared/svg/BookIcon'
import SaveIcon from '@/shared/svg/SaveIcon'
import ClockIcon from '@/shared/svg/ClockIcon'
import CourseCard from '@/shared/CourseCard'
import { Link } from "@inertiajs/inertia-vue3"
export default {
    components: {
        PlayCircleIcon,
        BookIcon,
        SaveIcon,
        ClockIcon, CourseCard, Link
    },
    props: { courses: Object, lessons: Object, course: Object },
}
</script>