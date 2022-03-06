<template>
    <div class="w-96 rounded overflow-hidden shadow-md">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ userName }}</div>
            <p class="text-gray-700 text-base">投稿数: {{ postCount }}</p>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, ref, PropType } from "vue";

type PropsType = "pc" | "media";

export default defineComponent({
    props: {
        userName: String,
        postCount: Number,
    },

    setup() {},
});
</script>
