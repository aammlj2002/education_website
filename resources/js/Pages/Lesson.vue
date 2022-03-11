<template>
    <div class="flex flex-row bg-gray-100">
        <div class="relative w-1/5 h-screen px-3 overflow-y-scroll bg-gray-800">
            <div class="flex flex-row items-center justify-between px-2 py-4 text-white">
                <button class="flex flex-row items-center justify-between hover:text-blue-500">
                    <div>
                        <svg viewBox="0.75 0.75 32.5 32.5" width="30">
                            <g fill="none" fill-rule="evenodd">
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    stroke="#000"
                                                    stroke-opacity="0.012"
                                                    stroke-width=".5"
                                                    d="M0 0L32 0 32 32 0 32z"
                                                    transform="translate(-969.000000, -1039.000000) translate(965.000000, 1038.000000) translate(5.000000, 2.000000) translate(16.000000, 16.000000) rotate(-270.000000) translate(-16.000000, -16.000000)"
                                                />
                                                <path
                                                    class="fill-current"
                                                    d="M9.88 11.342L16 17.449 22.12 11.342 24 13.222 16 21.222 8 13.222z"
                                                    transform="translate(-969.000000, -1039.000000) translate(965.000000, 1038.000000) translate(5.000000, 2.000000) translate(16.000000, 16.000000) rotate(-270.000000) translate(-16.000000, -16.000000)"
                                                />
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="text-xs font-bold capitalize">course overview</div>
                </button>
                <div>Edu</div>
            </div>
            <div class="px-2 py-4">
                <div class="flex flex-row justify-evenly">
                    <div class="w-4/12">
                        <img
                            class="rounded-full w-14 h-14"
                            :src="lesson.instructor.profile_photo_url"
                            alt="avatar"
                        />
                    </div>
                    <div class="w-8/12">
                        <div class="flex flex-col">
                            <div class="mb-2 text-sm font-bold text-white">Laravel 8 from scratch</div>
                            <div class="flex flex-row mb-5 space-x-5 text-gray-300">
                                <div class="flex flex-row items-center">
                                    <div class="mr-2">
                                        <svg width="9" viewBox="0 0 9 12">
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
                                    <div class="text-2xs">1 Lessons</div>
                                </div>
                                <div class="flex flex-row items-center text-xs">
                                    <div class="mr-2">
                                        <svg width="9" viewBox="0 0 10 10">
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
                                    <div class="text-2xs">2 minutes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col" v-for="lesson in lessons" :key="lesson.id">
                <a
                    class="flex items-center mb-3 text-gray-800 transition-colors duration-200 bg-gray-100 rounded-lg hover:text-gray-800 hover:bg-gray-100 dark:hover:text-white dark:hover:bg-gray-600 dark:text-gray-100 dark:bg-gray-600"
                    href="#"
                >
                    <svg
                        width="20"
                        height="20"
                        fill="currentColor"
                        class="m-auto"
                        viewBox="0 0 2048 1792"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M685 483q16 0 27.5-11.5t11.5-27.5-11.5-27.5-27.5-11.5-27 11.5-11 27.5 11 27.5 27 11.5zm422 0q16 0 27-11.5t11-27.5-11-27.5-27-11.5-27.5 11.5-11.5 27.5 11.5 27.5 27.5 11.5zm-812 184q42 0 72 30t30 72v430q0 43-29.5 73t-72.5 30-73-30-30-73v-430q0-42 30-72t73-30zm1060 19v666q0 46-32 78t-77 32h-75v227q0 43-30 73t-73 30-73-30-30-73v-227h-138v227q0 43-30 73t-73 30q-42 0-72-30t-30-73l-1-227h-74q-46 0-78-32t-32-78v-666h918zm-232-405q107 55 171 153.5t64 215.5h-925q0-117 64-215.5t172-153.5l-71-131q-7-13 5-20 13-6 20 6l72 132q95-42 201-42t201 42l72-132q7-12 20-6 12 7 5 20zm477 488v430q0 43-30 73t-73 30q-42 0-72-30t-30-73v-430q0-43 30-72.5t72-29.5q43 0 73 29.5t30 72.5z"
                        />
                    </svg>
                    <span class="mx-4 text-lg font-normal">{{lesson.title}}</span>
                    <span class="flex-grow text-right"></span>
                </a>
            </div>
        </div>
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
                                        <svg
                                            viewBox="0.75 0.75 32.5 32.5"
                                            width="40"
                                            class="text-white"
                                        >
                                            <g fill="none" fill-rule="evenodd">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path
                                                                    stroke="#000"
                                                                    stroke-opacity="0.012"
                                                                    stroke-width=".5"
                                                                    d="M0 0L32 0 32 32 0 32z"
                                                                    transform="translate(-969.000000, -1039.000000) translate(965.000000, 1038.000000) translate(5.000000, 2.000000) translate(16.000000, 16.000000) rotate(-270.000000) translate(-16.000000, -16.000000)"
                                                                />
                                                                <path
                                                                    class="fill-current"
                                                                    d="M9.88 11.342L16 17.449 22.12 11.342 24 13.222 16 21.222 8 13.222z"
                                                                    transform="translate(-969.000000, -1039.000000) translate(965.000000, 1038.000000) translate(5.000000, 2.000000) translate(16.000000, 16.000000) rotate(-270.000000) translate(-16.000000, -16.000000)"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
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
                                            <svg
                                                viewBox="0 0 32 32"
                                                width="30"
                                                height="30"
                                                class="text-white/25"
                                            >
                                                <g
                                                    stroke="none"
                                                    stroke-width="1.2"
                                                    class="fill-current"
                                                    fill-rule="evenodd"
                                                >
                                                    <path
                                                        class="fill-current"
                                                        d="M13.6196,11.2 C11.6246857,11.2 10.4,12.85425 10.4,14.2106375 C10.4,17.143925 13.9170286,19.8671 16.4,21.6 C18.8829714,19.86645 22.4,17.143925 22.4,14.2106375 C22.4,12.8541363 21.1758971,11.2 19.1804,11.2 C18.0661143,11.2 17.1138286,12.042335 16.4,12.8420625 C15.6854857,12.0422538 14.73392,11.2 13.6196,11.2 Z"
                                                    />
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                    <h3 class="ml-3 text-3xl font-bold text-white">{{lesson.title}}</h3>
                                </div>
                            </div>
                            <div class="flex flex-row justify-around">
                                <div class="pr-3 border-r border-gray-300">
                                    <div class="mb-3 text-xs text-gray-200 capitalize">episode</div>
                                    <div class="text-sm text-white">{{lesson.episode}}</div>
                                </div>
                                <div class="px-3 border-r border-gray-300">
                                    <div class="mb-3 text-xs text-gray-200 capitalize">run time</div>
                                    <div class="text-sm text-white">{{lesson.duration}}</div>
                                </div>
                                <div class="px-3 border-r border-gray-300">
                                    <div class="mb-3 text-xs text-gray-200 capitalize">published</div>
                                    <div
                                        class="text-sm text-white"
                                    >{{new Date(lesson.created_at).toISOString().slice(0, 10)}}</div>
                                </div>
                                <div class="px-3 border-r border-gray-300">
                                    <div class="mb-3 text-xs text-gray-200 capitalize">topic</div>
                                    <div class="text-sm text-white">{{lesson.topic.name}}</div>
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
                                            <svg
                                                width="8"
                                                height="10"
                                                viewBox="0 0 8 10"
                                                class="inline-block mr-2 fill-white"
                                            >
                                                <path
                                                    fill-rule="nonzero"
                                                    d="M7.092 0H.941C.44 0 0 .389 0 .849v8.583c0 .154.045.282.119.381a.469.469 0 0 0 .38.187c.143 0 .295-.06.435-.173l2.753-2.204a.54.54 0 0 1 .334-.108.54.54 0 0 1 .334.108l2.743 2.203a.683.683 0 0 0 .425.174C7.765 10 8 9.824 8 9.432V.849C8 .389 7.593 0 7.092 0z"
                                                />
                                            </svg>
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
                                        <svg
                                            viewBox="0.75 0.75 32.5 32.5"
                                            width="40"
                                            class="text-white"
                                        >
                                            <g fill="none" fill-rule="evenodd">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path
                                                                    stroke="#000"
                                                                    stroke-opacity="0.012"
                                                                    stroke-width=".5"
                                                                    d="M0 0L32 0 32 32 0 32z"
                                                                    transform="translate(-1339.000000, -1039.000000) translate(965.000000, 1038.000000) translate(391.000000, 18.000000) rotate(-180.000000) translate(-391.000000, -18.000000) translate(375.000000, 2.000000) translate(16.000000, 16.000000) rotate(-270.000000) translate(-16.000000, -16.000000)"
                                                                />
                                                                <path
                                                                    class="fill-current"
                                                                    d="M9.88 11.342L16 17.449 22.12 11.342 24 13.222 16 21.222 8 13.222z"
                                                                    transform="translate(-1339.000000, -1039.000000) translate(965.000000, 1038.000000) translate(391.000000, 18.000000) rotate(-180.000000) translate(-391.000000, -18.000000) translate(375.000000, 2.000000) translate(16.000000, 16.000000) rotate(-270.000000) translate(-16.000000, -16.000000)"
                                                                />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
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
                                <span class="capitalize">{{lesson.instructor.name}}</span>
                            </h2>
                            <div class="flex items-center justify-end space-x-2">
                                <div>
                                    <svg
                                        width="20"
                                        class="transition-all text-grey-800 hover:text-blue"
                                        viewBox="0 0 18 18"
                                    >
                                        <path
                                            class="fill-gray-500"
                                            fill-rule="nonzero"
                                            d="M9 0C4.037 0 0 4.037 0 9c0 4.962 4.037 9 9 9 4.962 0 9-4.038 9-9 0-4.963-4.037-9-9-9zm4.015 6.94c.004.09.006.18.006.27 0 2.737-2.083 5.892-5.894 5.892a5.86 5.86 0 0 1-3.175-.93 4.158 4.158 0 0 0 3.067-.858 2.074 2.074 0 0 1-1.936-1.439 2.088 2.088 0 0 0 .936-.034 2.072 2.072 0 0 1-1.662-2.032v-.026c.28.155.6.249.938.26a2.07 2.07 0 0 1-.64-2.766 5.882 5.882 0 0 0 4.269 2.165 2.071 2.071 0 0 1 3.53-1.89 4.135 4.135 0 0 0 1.316-.503 2.08 2.08 0 0 1-.912 1.146c.419-.05.82-.16 1.19-.326-.277.415-.628.78-1.033 1.071z"
                                        />
                                    </svg>
                                </div>
                                <div>
                                    <svg
                                        width="20"
                                        viewBox="0 0 30 29"
                                        class="transition-all text-grey-800 hover:text-blue"
                                    >
                                        <path
                                            class="fill-gray-500"
                                            fill-rule="nonzero"
                                            d="M27.959 7.434a14.866 14.866 0 0 0-5.453-5.414C20.21.69 17.703.025 14.984.025c-2.718 0-5.226.665-7.521 1.995A14.864 14.864 0 0 0 2.01 7.434C.67 9.714 0 12.202 0 14.901c0 3.242.953 6.156 2.858 8.746 1.906 2.589 4.367 4.38 7.385 5.375.351.064.611.019.78-.136a.755.755 0 0 0 .254-.58l-.01-1.047c-.007-.658-.01-1.233-.01-1.723l-.448.077a5.765 5.765 0 0 1-1.083.068 8.308 8.308 0 0 1-1.356-.136 3.04 3.04 0 0 1-1.308-.58c-.403-.304-.689-.701-.858-1.192l-.195-.445a4.834 4.834 0 0 0-.614-.988c-.28-.362-.563-.607-.85-.736l-.136-.097a1.428 1.428 0 0 1-.253-.233 1.062 1.062 0 0 1-.176-.271c-.039-.09-.007-.165.098-.223.104-.059.292-.087.566-.087l.39.058c.26.052.582.206.965.465.384.258.7.594.947 1.007.299.53.66.933 1.082 1.21.423.278.85.417 1.278.417.43 0 .8-.032 1.112-.097a3.9 3.9 0 0 0 .878-.29c.117-.866.436-1.53.956-1.996a13.447 13.447 0 0 1-2-.348 7.995 7.995 0 0 1-1.833-.756 5.244 5.244 0 0 1-1.571-1.298c-.416-.516-.758-1.195-1.024-2.034-.267-.84-.4-1.808-.4-2.905 0-1.563.514-2.893 1.541-3.99-.481-1.176-.436-2.493.137-3.952.377-.116.936-.03 1.678.261.741.291 1.284.54 1.629.746.345.207.621.381.83.523a13.948 13.948 0 0 1 3.745-.503c1.288 0 2.537.168 3.747.503l.741-.464c.507-.31 1.106-.595 1.795-.853.69-.258 1.216-.33 1.58-.213.586 1.46.638 2.777.156 3.951 1.028 1.098 1.542 2.428 1.542 3.99 0 1.099-.134 2.07-.4 2.916-.267.846-.611 1.524-1.034 2.034-.423.51-.95.94-1.58 1.288a8.01 8.01 0 0 1-1.834.756c-.592.155-1.259.271-2 .349.676.58 1.014 1.498 1.014 2.75v4.087c0 .232.081.426.244.58.163.155.42.2.77.136 3.019-.994 5.48-2.786 7.386-5.375 1.905-2.59 2.858-5.504 2.858-8.746 0-2.698-.671-5.187-2.01-7.466z"
                                        />
                                    </svg>
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
                                    :src="lesson.instructor.profile_photo_url"
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
export default {
    props: { lessons: Object, lesson: Object },
    layout: null
}
</script>