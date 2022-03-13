<template>
    <div
        class="relative flex flex-row justify-between w-full px-4 bg-blue-400 shadow-sm py-7 rounded-2xl"
    >
        <div class="relative flex w-1/12 p-5">
            <div class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                <div
                    class="grid w-12 h-12 grid-cols-1 border border-gray-200 rounded-full hover:bg-gray-300 hover:bg-opacity-10"
                >
                    <Link
                        as="button"
                        :class="{'cursor-not-allowed' : !currentLesson.previous}"
                        :disabled="currentLesson.previous ? false : true"
                        :href="currentLesson.previous ?? null"
                        class="relative"
                    >
                        <div
                            class="absolute text-lg transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                        >
                            <LeftArrowIcon width="40" fill="text-white" />
                        </div>
                    </Link>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-between w-10/12 mx-5 grow">
            <div class="w-8/12">
                <div class="mb-8">
                    <div class="flex flex-row">
                        <div class="p-1">
                            <form @submit.prevent="like">
                                <button
                                    type="submit"
                                    :class="{'bg-opacity-10  text-white bg-white border-white border-opacity-100': currentLesson.like, 'text-gray-300 bg-gray-300  bg-opacity-10 border-opacity-50': !currentLesson.like}"
                                    class="px-1 border border-gray-300 rounded-3xl hover:text-white hover:bg-white hover:bg-opacity-10 hover:border-white"
                                >
                                    <HeartIcon width="30" />
                                </button>
                            </form>
                        </div>
                        <h3 class="ml-3 text-3xl font-bold text-white">{{currentLesson.title}}</h3>
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
                        <div class="mb-3 text-xs text-gray-200 capitalize">course progress</div>
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
                    <form @submit.prevent="complete">
                        <button
                            :class="{'bg-opacity-100 border-opacity-100 bg-white text-blue-500 border-blue-500' : currentLesson.complete, 'bg-opacity-10 border-opacity-30 bg-gray-300 text-white border-gray-300' : !currentLesson.complete}"
                            class="w-full px-4 py-2 transition-all border rounded-full hover:bg-white hover:text-blue-500 hover:border-blue-500"
                        >
                            <template v-if="currentLesson.complete">
                                <div class="text-sm font-bold uppercase">lesson completed</div>
                            </template>
                            <template v-else>
                                <div class="text-sm font-bold uppercase">mark as complete</div>
                            </template>
                        </button>
                    </form>
                    <button
                        class="w-full px-4 py-2 text-white transition-all bg-gray-300 border border-gray-300 border-opacity-50 rounded-full fill-gray-100 bg-opacity-10 hover:bg-white hover:text-blue-500 hover:border-blue-500"
                    >
                        <div class="flex flex-row items-center justify-center">
                            <div>
                                <SaveIcon class="mr-3" width="10" />
                            </div>
                            <div>
                                <div class="text-sm font-bold uppercase">add to watchlist</div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="relative flex w-1/12 p-5">
            <div class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                <div
                    class="grid w-12 h-12 grid-cols-1 border border-gray-200 rounded-full hover:bg-gray-300 hover:bg-opacity-10"
                >
                    <Link
                        as="button"
                        :class="{'cursor-not-allowed' : !currentLesson.next}"
                        :disabled="currentLesson.next ? false : true"
                        :href="currentLesson.next ?? null"
                        class="relative"
                    >
                        <div
                            class="absolute text-lg transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                        >
                            <RightArrowIcon width="40" fill="text-white" />
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3"
import HeartIcon from '@/shared/svg/HeartIcon'
import SaveIcon from '@/shared/svg/SaveIcon'
import LeftArrowIcon from '@/shared/svg/LeftArrowIcon'
import RightArrowIcon from '@/shared/svg/RightArrowIcon'
import { Inertia } from '@inertiajs/inertia'
export default {
    components: {
        HeartIcon,
        SaveIcon,
        LeftArrowIcon, RightArrowIcon, Link
    },
    props: { currentLesson: Object },
    setup(props) {
        let like = () => {
            Inertia.post(`/lessons/${props.currentLesson.id}/like`);
        };
        let complete = () => {
            Inertia.post(`/lessons/${props.currentLesson.id}/complete`);
        }
        return { like, complete };
    }
}
</script>

<style>
</style>