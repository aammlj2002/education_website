<template>
    <svg viewBox="0 0 32 32" :width="width" :height="height" :class="fill">
        <g stroke="none" stroke-width="1.2" fill-rule="evenodd">
            <path
                class="fill-current"
                d="M13.6196,11.2 C11.6246857,11.2 10.4,12.85425 10.4,14.2106375 C10.4,17.143925 13.9170286,19.8671 16.4,21.6 C18.8829714,19.86645 22.4,17.143925 22.4,14.2106375 C22.4,12.8541363 21.1758971,11.2 19.1804,11.2 C18.0661143,11.2 17.1138286,12.042335 16.4,12.8420625 C15.6854857,12.0422538 14.73392,11.2 13.6196,11.2 Z"
            />
        </g>
    </svg>
</template>

<script>
export default {
    props: {
        fill: {
            default: "fill-current",
            type: String,
        },
        width: {
            default: "10",
            type: String,
        },
        height: {
            default: "auto",
            type: String,
        },
    }
}
</script>

<style>
</style>