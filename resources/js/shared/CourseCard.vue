<template>
    <div
        class="grid justify-between grid-cols-8 col-span-5 p-6 bg-gray-800 shadow-xl mt-7 rounded-xl"
    >
        <div class="flex flex-col justify-between w-full col-span-5">
            <div class="mt-2 ml-5 mr-10">
                <h2 class="mb-2 text-4xl font-semibold text-white">{{course.name}}</h2>
                <p class="mb-4 text-base text-white">{{course.description}}</p>
            </div>
            <div class="flex flex-col justify-between mt-2 ml-5 mr-10">
                <div class="flex flex-row mb-5 space-x-5">
                    <div class="flex flex-row items-center text-xs text-white">
                        <div class="mr-2">
                            <svg width="12" viewBox="0 0 9 12">
                                <g fill="none" fill-rule="evenodd">
                                    <g class="fill-current">
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M2.858 5.15v4.415c0 .197-.11.371-.273.436-.231.092-.51.14-.808.14-.855 0-1.775-.396-1.775-1.266v-5.65c-.02-.389.1-1.074.676-1.445C.945 1.607 2.348.589 3.052.074c.125-.092.286-.098.417-.018.132.081.214.237.214.406v.669c0 .255-.183.462-.41.462-.175 0-.325-.125-.383-.302-.636.462-1.574 1.14-1.806 1.29-.21.136-.255.385-.264.52 0 .151.029.27.081.335.145.18.63.068 1.157-.29C2.566 2.802 5.067.92 5.092.902c.126-.095.287-.104.42-.023.133.08.216.237.216.408v.052c0 .155-.068.299-.182.385 0 0-1.736 1.31-1.89 1.42-.589.428-.798.953-.798 2.005zM9 2.92v5.998c0 .158-.072.306-.191.39 0 0-2.385 2.092-2.869 2.425-.254.175-.578.267-.936.267-.85 0-1.73-.52-1.73-1.389V4.878l.001-.006c.008-.338.078-.82.635-1.285.334-.278 2.321-1.809 2.406-1.873.125-.097.288-.107.421-.027.134.08.218.237.218.408v.67c0 .254-.183.461-.409.461-.169 0-.314-.115-.376-.28-.635.49-1.566 1.212-1.775 1.385-.263.22-.298.365-.303.551.001.138.034.243.101.313.209.216.77.125 1.324-.25.41-.278 2.176-1.819 2.822-2.389.124-.108.29-.128.431-.05.14.077.23.237.23.414zm-.818 2.059L6.137 6.77v.924l2.045-1.792v-.924z"
                                                        transform="translate(-890.000000, -316.000000) translate(774.000000, 311.000000) translate(116.000000, 4.000000) translate(0.000000, 1.000000)"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div>{{course.lesson_count}} Lessons</div>
                    </div>
                    <div class="flex flex-row items-center text-xs text-white">
                        <div class="mr-2">
                            <svg width="13" viewBox="0 0 10 10">
                                <g fill="none" fill-rule="evenodd">
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        class="fill-current"
                                                        d="M5 2C2.25 2 0 4.25 0 7s2.25 5 5 5 5-2.25 5-5-2.25-5-5-5zm2.282 6.923L4.615 7.318v-3.01h.77v2.608l2.307 1.355-.41.652z"
                                                        transform="translate(-978.000000, -378.000000) translate(330.000000, 364.000000) translate(444.000000, 8.000000) translate(204.000000, 4.000000)"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
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
                            <div>
                                <svg width="15" height="15" viewBox="0 0 15 15" class="mr-3">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M-1-1h18v18H-1z" />
                                        <path
                                            class="fill-current"
                                            d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm">Start Course</div>
                            </div>
                        </Link>
                    </button>
                    <button
                        class="w-full px-4 py-2 mr-3 text-white bg-gray-700 border border-transparent rounded-full hover:border-blue-400 hover:text-blue-400 hover:transition-all"
                    >
                        <div class="flex flex-row items-center justify-center">
                            <div>
                                <svg
                                    width="8"
                                    height="10"
                                    viewBox="0 0 8 10"
                                    class="mr-2 fill-current"
                                >
                                    <path
                                        fill-rule="nonzero"
                                        d="M7.092 0H.941C.44 0 0 .389 0 .849v8.583c0 .154.045.282.119.381a.469.469 0 0 0 .38.187c.143 0 .295-.06.435-.173l2.753-2.204a.54.54 0 0 1 .334-.108.54.54 0 0 1 .334.108l2.743 2.203a.683.683 0 0 0 .425.174C7.765 10 8 9.824 8 9.432V.849C8 .389 7.593 0 7.092 0z"
                                    />
                                </svg>
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
                <div class="grid w-40 h-40 grid-cols-1 p-10 border-2 border-gray-400 rounded-full">
                    <div class="relative">
                        <div
                            class="absolute text-5xl transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2"
                        >10</div>
                    </div>
                </div>
            </div>
            <div class="text-xs text-center text-gray-300 uppercase">last episode in this course</div>
            <div class="mb-3 text-xs text-center text-gray-300 capitalize">added mar 1st, 2022</div>
            <div class="mb-2 text-lg text-center text-white capitalize">Notification Tests and Fakes</div>
            <div
                class="mb-5 text-xs text-center text-gray-300"
            >Let's wrap up this mini-series by demonstrating how we might test our SendInvoice job.</div>
            <button
                class="w-full px-4 py-2 mr-3 text-base text-white bg-gray-800 border border-transparent rounded-full hover:border-blue-400 hover:text-blue-400 hover:transition-all"
            >
                <div class="flex flex-row items-center justify-center">
                    <div>
                        <svg width="15" height="15" viewBox="0 0 15 15" class="mr-3">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M-1-1h18v18H-1z" />
                                <path
                                    class="fill-current"
                                    d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"
                                />
                            </g>
                        </svg>
                    </div>
                    <div>
                        <div class="uppercase">watch</div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: { Link },
    props: { course: Object }
}
</script>

<style>
</style>