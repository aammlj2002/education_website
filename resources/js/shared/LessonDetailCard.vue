<template>
    <div
        class="relative flex flex-row justify-between w-full px-4 bg-blue-400 shadow-sm py-7 rounded-2xl"
    >
        <div class="relative flex w-1/12 p-5">
            <div class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                <div class="grid w-12 h-12 grid-cols-1 border border-gray-200 rounded-full">
                    <div class="relative">
                        <div
                            class="absolute text-lg transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                        >
                            <LeftArrowIcon width="40" fill="text-white" />
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
                                <HeartIcon width="30" fill="text-gray-300" />
                            </button>
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
                    <button
                        class="w-full px-4 py-2 bg-gray-300 border border-gray-300 border-opacity-50 rounded-full bg-opacity-10"
                    >
                        <div class="text-sm font-bold text-white uppercase">mark as complete</div>
                    </button>
                    <button
                        class="w-full px-4 py-2 bg-gray-300 border border-gray-300 border-opacity-50 rounded-full bg-opacity-10"
                    >
                        <div class="flex flex-row items-center justify-center">
                            <div>
                                <SaveIcon class="mr-3" width="10" fill="fill-gray-100" />
                            </div>
                            <div>
                                <div class="text-sm font-bold text-white uppercase">add to watchlist</div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="relative flex w-1/12 p-5">
            <div class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                <div class="grid w-12 h-12 grid-cols-1 border border-gray-200 rounded-full">
                    <div class="relative">
                        <div
                            class="absolute text-lg transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                        >
                            <RightArrowIcon width="40" fill="text-white" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import HeartIcon from './svg/HeartIcon'
import SaveIcon from './svg/SaveIcon'
import LeftArrowIcon from './svg/LeftArrowIcon'
import RightArrowIcon from './svg/RightArrowIcon'
export default {
    components: {
        HeartIcon,
        SaveIcon,
        LeftArrowIcon, RightArrowIcon
    },
    props: { currentLesson: Object }
}
</script>

<style>
</style>