<template>
    <div class="flex flex-row bg-gray-100">
        <div class="relative w-1/5 h-screen px-3 overflow-y-scroll bg-gray-800">
            <div class="flex flex-row items-center justify-between px-2 py-4 text-white">
                <Link
                    :href="`/courses/${currentLesson.course.slug}`"
                    class="flex flex-row items-center justify-between hover:text-blue-500"
                >
                    <RightArrowIcon />
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
                            <div
                                class="mb-2 text-sm font-bold text-white"
                            >{{currentLesson.course.name}}</div>
                            <div class="flex flex-row mb-5 space-x-5 text-gray-300">
                                <div class="flex flex-row items-center">
                                    <div class="mr-2">
                                        <BookIcon />
                                    </div>
                                    <div class="text-2xs">{{lessons.length}} Lessons</div>
                                </div>
                                <div class="flex flex-row items-center text-xs">
                                    <div class="mr-2">
                                        <ClockIcon />
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
                    <div
                        class="flex flex-row content-center px-1 py-2 border border-transparent rounded-md hover:border-blue-500 hover:border-opacity-20"
                    >
                        <div class="relative w-3/12">
                            <div
                                class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                            >
                                <div class="grid w-8 h-8 grid-cols-1 bg-blue-500 rounded-full">
                                    <div class="relative">
                                        <div
                                            class="absolute text-lg transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                                        >
                                            <PlayIcon />
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
                                            <ClockIcon />
                                        </div>
                                        <div class="text-2xs">{{lesson.duration}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        <!-- right section -->
        <div class="flex flex-col w-4/5 h-screen overflow-y-scroll">
            <!-- lesson video will be here -->
            <img
                src="https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder.png"
                alt="palce holder"
            />
            <div class="px-8 pt-4">
                <div
                    class="relative flex flex-row justify-between w-full px-4 bg-blue-400 shadow-sm py-7 rounded-2xl"
                >
                    <div class="relative flex w-1/12 p-5">
                        <div
                            class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                        >
                            <div
                                class="grid w-12 h-12 grid-cols-1 border border-gray-200 rounded-full"
                            >
                                <div class="relative">
                                    <div
                                        class="absolute text-lg transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                                    >
                                        <RightArrowIcon />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between w-10/12 mx-5 grow">
                        <div class="w-8/12">
                            <div class="mb-8">
                                <div class="flex flex-row">
                                    <div class="p-1">
                                        <button
                                            class="px-1 bg-gray-300 border border-gray-300 border-opacity-50 bg-opacity-10 rounded-3xl"
                                        >
                                            <HeartIcon />
                                        </button>
                                    </div>
                                    <h3
                                        class="ml-3 text-3xl font-bold text-white"
                                    >{{currentLesson.title}}</h3>
                                </div>
                            </div>
                            <div class="flex flex-row justify-around">
                                <div class="pr-3 border-r border-gray-300">
                                    <div class="mb-3 text-xs text-gray-200 capitalize">episode</div>
                                    <div class="text-sm text-white">{{currentLesson.episode}}</div>
                                </div>
                                <div class="px-3 border-r border-gray-300">
                                    <div class="mb-3 text-xs text-gray-200 capitalize">run time</div>
                                    <div class="text-sm text-white">{{currentLesson.duration}}</div>
                                </div>
                                <div class="px-3 border-r border-gray-300">
                                    <div class="mb-3 text-xs text-gray-200 capitalize">published</div>
                                    <div
                                        class="text-sm text-white"
                                    >{{new Date(currentLesson.created_at).toISOString().slice(0, 10)}}</div>
                                </div>
                                <div class="px-3 border-r border-gray-300">
                                    <div class="mb-3 text-xs text-gray-200 capitalize">topic</div>
                                    <div class="text-sm text-white">{{currentLesson.topic.name}}</div>
                                </div>
                                <div class="px-3 border-r border-gray-300">
                                    <div
                                        class="mb-3 text-xs text-gray-200 capitalize"
                                    >course progress</div>
                                    <div class="text-sm text-white">10%</div>
                                </div>
                                <div class="pl-3">
                                    <div class="mb-3 text-xs text-gray-200 capitalize">version</div>
                                    <div class="text-sm text-white">Laravel breeze version 1</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col w-4/12 pl-5">
                            <div class="flex flex-col my-auto contents-center gap-y-3">
                                <button
                                    class="w-full px-4 py-2 bg-gray-300 border border-gray-300 border-opacity-50 rounded-full bg-opacity-10"
                                >
                                    <div
                                        class="text-sm font-bold text-white uppercase"
                                    >mark as complete</div>
                                </button>
                                <button
                                    class="w-full px-4 py-2 bg-gray-300 border border-gray-300 border-opacity-50 rounded-full bg-opacity-10"
                                >
                                    <div class="flex flex-row items-center justify-center">
                                        <div>
                                            <SaveIcon />
                                        </div>
                                        <div>
                                            <div
                                                class="text-sm font-bold text-white uppercase"
                                            >add to watchlist</div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex w-1/12 p-5">
                        <div
                            class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                        >
                            <div
                                class="grid w-12 h-12 grid-cols-1 border border-gray-200 rounded-full"
                            >
                                <div class="relative">
                                    <div
                                        class="absolute text-lg transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                                    >
                                        <LeftArrowIcon />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- instructor -->
                <div class="p-8">
                    <div class="px-8 py-4 bg-white rounded-lg">
                        <div class="flex justify-between mb-4">
                            <h2 class="text-black">
                                <span class="font-bold uppercase">your teacher</span>
                                <span class="mx-2">|</span>
                                <span class="capitalize">{{currentLesson.instructor.name}}</span>
                            </h2>
                            <div class="flex items-center justify-end space-x-2">
                                <div>
                                    <TwitterIcon />
                                </div>
                                <div>
                                    <GitHubIcon />
                                </div>
                                <button
                                    class="w-full px-3 py-2 border border-gray-500 rounded-full"
                                >
                                    <div
                                        class="font-extrabold text-gray-500 uppercase text-2xs"
                                    >visit website</div>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div
                                class="mr-6 overflow-hidden border-4 border-blue-400 border-solid rounded-full"
                            >
                                <img
                                    class="w-16 h-16"
                                    :src="currentLesson.instructor.profile_photo_url"
                                    alt="avatar"
                                />
                            </div>
                            <div
                                class="w-9/12"
                            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates deserunt ipsam, itaque distinctio cum debitis nihil aliquid qui maiores eos.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import GitHubIcon from '../shared/svg/GitHubIcon'
import TwitterIcon from '../shared/svg/TwitterIcon'
import SaveIcon from '../shared/svg/SaveIcon'
import HeartIcon from '../shared/svg/HeartIcon'
import LeftArrowIcon from '../shared/svg/LeftArrowIcon'
import PlayIcon from '../shared/svg/PlayIcon'
import ClockIcon from '../shared/svg/ClockIcon'
import BookIcon from '../shared/svg/BookIcon'
import RightArrowIcon from '../shared/svg/RightArrowIcon'
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        GitHubIcon,
        TwitterIcon,
        SaveIcon,
        HeartIcon,
        LeftArrowIcon,
        PlayIcon,
        ClockIcon,
        BookIcon,
        RightArrowIcon, Link
    },
    props: { lessons: Object, currentLesson: Object },
    layout: null
}
</script>