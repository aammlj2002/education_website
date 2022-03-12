<template>
    <div class="flex flex-row items-stretch justify-between gap-4 px-8">
        <div class="w-2/5 p-4 bg-white rounded-lg shadow-sm">
            <h2 class="mb-3 text-lg font-bold capitalize">Things you'll learn</h2>
            <ul class="w-full space-y-3 text-sm text-gray-900">
                <li class="flex flex-row items-center justify-start">
                    <div class="w-1/7">
                        <svg
                            class="fill-blue-500"
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            stroke="currentColor"
                            viewBox="0 0 1792 1792"
                        >
                            <path
                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"
                            />
                        </svg>
                    </div>
                    <p class="ml-3">adipisicing elit. lorem8</p>
                </li>
                <li class="flex flex-row items-center justify-start">
                    <div class="w-1/7">
                        <TikCircleIcon :width="20" fill="fill-blue-500" />
                    </div>
                    <p class="ml-3">adipisicing elit.</p>
                </li>
                <li class="flex flex-row items-center justify-start">
                    <div class="w-1/7">
                        <svg
                            class="fill-blue-500"
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            stroke="currentColor"
                            viewBox="0 0 1792 1792"
                        >
                            <path
                                d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"
                            />
                        </svg>
                    </div>
                    <p class="ml-3">adipisicing elit.</p>
                </li>
            </ul>
        </div>

        <div class="w-3/5 p-4 bg-white rounded-lg shadow-sm">
            <h2 class="mb-3 text-lg font-bold capitalize">about this lesson</h2>
            <p class="w-full text-sm text-gray-900">{{currentLesson.description}}</p>
        </div>
    </div>
</template>

<script>
import TikCircleIcon from './svg/TikCircleIcon'
export default {
    components: { TikCircleIcon },
    props: { currentLesson: Object }
}
</script>

<style>
</style>