<template>
    <Head title="Courses"></Head>
    <div v-for="course in courses" :key="course.id">
        <CourseCard :course="course" />
    </div>

    <div class="mx-60">
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
                        <h1 class="text-2xl font-bold text-gray-900">{{lesson.title}}</h1>
                        <p class="mt-2 text-sm text-gray-600">{{lesson.description}}</p>
                    </div>
                    <div class="text-xs text-gray-500">
                        <span class="inline-block mr-3">episode {{itemObjKey+1}}</span>
                        <span class="inline-block mr-1">
                            <svg width="10" viewBox="0 0 10 10" class="text-grey-700">
                                <g fill="none" fill-rule="evenodd">
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        class="fill-current"
                                                        d="M5 2C2.25 2 0 4.25 0 7s2.25 5 5 5 5-2.25 5-5-2.25-5-5-5zm2.282 6.923L4.615 7.318v-3.01h.77v2.608l2.307 1.355-.41.652z"
                                                        transform="translate(-978.000000, -378.000000)translate(330.000000, 364.000000) translate(444.000000, 8.000000) translate(204.000000,4.000000)"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="inline-block">{{lesson.duration}} minutes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CourseCard from '@/shared/CourseCard'
export default {
    components: { CourseCard },
    props: { courses: Object, lessons: Object },
}
</script>
<style>
.border-1 {
    border: 1px solid transparent;
}
</style>
