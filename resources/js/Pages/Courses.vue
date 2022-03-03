<template>
    <Head title="Courses"></Head>
    <div v-for="course in courses" :key="course.id">
        <CourseCard :course="course" />
    </div>
</template>

<script>
import CourseCard from '@/shared/CourseCard'
export default {
    components: { CourseCard },
    props: { courses: Object },
}
</script>
<style>
.border-1 {
    border: 1px solid transparent;
}
</style>
