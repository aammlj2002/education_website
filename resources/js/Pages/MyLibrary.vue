<template>
    <Head title="Library"></Head>
    <h1>My Library</h1>
    <div v-for="lesson in watchlistedLessons" :key="lesson.id" v-text="lesson.title"></div>
</template>

<script>
export default {
    props: { watchlistedLessons: Object }
}
</script>
