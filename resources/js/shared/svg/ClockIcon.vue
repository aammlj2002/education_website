<template>
    <svg :width="width" :height="height" :class="fill" viewBox="0 0 10 10">
        <g fill-rule="evenodd">
            <g>
                <g>
                    <g>
                        <g>
                            <path
                                class="fill-current"
                                d="M5 2C2.25 2 0 4.25 0 7s2.25 5 5 5 5-2.25 5-5-2.25-5-5-5zm2.282 6.923L4.615 7.318v-3.01h.77v2.608l2.307 1.355-.41.652z"
                                transform="translate(-978.000000, -378.000000) translate(330.000000, 364.000000) translate(444.000000, 8.000000) translate(204.000000, 4.000000)"
                            />
                        </g>
                    </g>
                </g>
            </g>
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