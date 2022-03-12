<template>
    <div class="w-full">
        <video
            id="my-video"
            class="w-full video-js"
            controls
            preload="auto"
            poster="MY_VIDEO_POSTER.jpg"
            data-setup="{}"
        >
            <source src="https://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
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
    </div>
</template>

<script>
import videojs from "video.js"
export default {

}
</script>

<style>
</style>