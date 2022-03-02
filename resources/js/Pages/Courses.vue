<template>
    <Head title="Courses"></Head>
    <p v-for="course in courses" :key="course.id" v-text="course.name"></p>
</template>

<script>
export default {
    props: { courses: Object },
}
</script>
