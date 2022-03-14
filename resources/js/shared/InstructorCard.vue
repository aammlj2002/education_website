<template>
    <div class="p-8">
        <div class="px-8 py-4 bg-white rounded-lg">
            <div class="flex justify-between mb-4">
                <h2 class="text-black">
                    <span class="font-bold uppercase">your teacher</span>
                    <span class="mx-2">|</span>
                    <span class="capitalize">{{instructor.name}}</span>
                </h2>
                <div class="flex items-center justify-end space-x-2">
                    <div>
                        <TwitterIcon width="20" fill="fill-gray-500" />
                    </div>
                    <div>
                        <GitHubIcon width="20" fill="fill-gray-500" />
                    </div>
                    <button class="w-full px-3 py-2 border border-gray-500 rounded-full">
                        <div class="font-extrabold text-gray-500 uppercase text-2xs">visit website</div>
                    </button>
                </div>
            </div>
            <div class="flex flex-row">
                <div
                    class="mr-6 overflow-hidden border-4 border-blue-400 border-solid rounded-full"
                >
                    <img class="w-16 h-16" :src="instructor.profile_photo_url" alt="avatar" />
                </div>
                <div
                    class="w-9/12"
                >Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates deserunt ipsam, itaque distinctio cum debitis nihil aliquid qui maiores eos.</div>
            </div>
        </div>
    </div>
</template>

<script>
import GitHubIcon from '@/shared/svg/GitHubIcon'
import TwitterIcon from '@/shared/svg/TwitterIcon'
export default {
    components: {
        GitHubIcon, TwitterIcon
    },
    props: { instructor: Object }
}
</script>

<style>
</style>