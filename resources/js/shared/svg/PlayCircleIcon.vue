<template>
    <svg :width="width" :height="height" :class="fill" viewBox="0 0 15 15">
        <g fill="none" fill-rule="evenodd">
            <path d="M-1-1h18v18H-1z" />
            <path
                class="fill-current"
                d="M6 10.875L10.5 7.5 6 4.125v6.75zM7.5 0C3.36 0 0 3.36 0 7.5 0 11.64 3.36 15 7.5 15c4.14 0 7.5-3.36 7.5-7.5C15 3.36 11.64 0 7.5 0zm0 13.5c-3.307 0-6-2.693-6-6s2.693-6 6-6 6 2.693 6 6-2.693 6-6 6z"
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