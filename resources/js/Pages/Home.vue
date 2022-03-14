<template>
    <section
        class="max-w-screen-xl px-4 py-12 mx-auto bg-gray-800 sm:py-16 sm:px-6 lg:px-8 lg:py-20"
    >
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-5xl font-extrabold leading-9 text-white">welcome to our website</h2>
            <p
                class="text-base leading-7 text-white mt-7"
            >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore rerum beatae earum laborum illo itaque laudantium accusantium deleniti labore et laboriosam quidem veritatis quibusdam fugit consequatur, ipsa adipisci minus nihil.</p>
        </div>
        <div class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
            <div>
                <p class="text-5xl font-extrabold leading-none text-white">100+</p>
                <p class="mt-2 text-base font-medium leading-6 text-white">Lessons</p>
            </div>
            <div class="mt-10 sm:mt-0">
                <p class="text-5xl font-extrabold leading-none text-white">600hours+</p>
                <p class="mt-2 text-base font-medium leading-6 text-white">Run Time</p>
            </div>
            <div class="mt-10 sm:mt-0">
                <p class="text-5xl font-extrabold leading-none text-white">30+</p>
                <p class="mt-2 text-base font-medium leading-6 text-white">Instructors</p>
            </div>
        </div>
        <div class="flex justify-center w-full p-4 mx-auto mt-16">
            <template v-if="user">
                <Link
                    href="/courses"
                    as="button"
                    class="px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in rounded-lg shadow-md w-98 bg-gradient-to-r from-blue-500 to-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2"
                >Browse Courses</Link>
            </template>
            <template v-else>
                <div class="flex flex-row gap-5">
                    <Link
                        class="px-3 py-2 text-sm font-semibold text-center text-white transition duration-200 ease-in rounded-lg shadow-md w-52 bg-gradient-to-r from-blue-500 to-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2"
                        href="/login"
                    >Sign in</Link>
                    <Link
                        class="px-3 py-2 text-sm font-semibold text-center text-black transition duration-200 ease-in bg-gray-100 rounded-lg shadow-md w-52 focus:outline-none focus:ring-2 focus:ring-offset-2"
                        href="/register"
                    >Sign up</Link>
                </div>
            </template>
        </div>
    </section>
    <Footer />
</template>
<script>
import Footer from '../shared/Footer'
import { Link } from "@inertiajs/inertia-vue3"
export default {
    props: { user: Object },
    components: {
        Footer, Link
    },
    layout: null
}
</script>
