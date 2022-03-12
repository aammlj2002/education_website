<template>
    <video
        ref="videoPlayer"
        id="my-video"
        class="w-full video-js"
        controls
        preload="auto"
        poster
        data-setup="{}"
    >
        <source :src="currentLesson.video" type="video/mp4" />
        <source src="https://vjs.zencdn.net/v/oceans.webm" type="video/webm" />
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a
                href="https://videojs.com/html5-video-support/"
                target="_blank"
            >supports HTML5 video</a>
        </p>
    </video>
</template>

<script>
import videojs from 'video.js';

export default {
    name: "VideoPlayer",
    props: {
        currentLesson: Object,
        options: {
            type: Object,
            default() {
                return {};
            }
        }
    },
    data() {
        return {
            player: null
        }
    },
    mounted() {
        this.player = videojs(this.$refs.videoPlayer, this.options, function onPlayerReady() {
            // console.log('onPlayerReady', this);
        })
    },
    beforeDestroy() {
        if (this.player) {
            this.player.dispose()
        }
    }
}
</script>

<style>
</style>