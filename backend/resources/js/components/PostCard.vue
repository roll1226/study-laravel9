<template>
    <div class="max-w-xs bg-white rounded-lg border border-gray-200 shadow-md self-start">
        <a :href="postPagePath(id)">
            <img
                class="rounded-t-lg h-48 w-96 animate-pulse"
                src="https://p1-e6eeae93.imageflux.jp/c!/w=800,h=800,a=2/yutaromasamasa/aab8beb3d6b6ef461209.jpeg"
                alt="ローディング"
                v-show="isLoading"
            />
            <img
                class="rounded-t-lg h-48 w-96"
                :src="img"
                @load="load"
                :alt="`${title}の画像`"
                v-show="!isLoading"
            />
        </a>
        <div class="p-5">
            <a :href="postPagePath(id)">
                <h5
                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
                >
                    {{ title }}
                </h5>
            </a>

            <a
                :href="postPagePath(id)"
                class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300"
            >
                詳しく見る
                <svg
                    class="ml-2 -mr-1 w-4 h-4"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </a>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, ref, PropType } from "vue";

export default defineComponent({
    props: {
        title: String,
        id: Number,
        img: String,
    },

    setup() {
        const isLoading = ref<boolean>(true);

        const load = () => {
            isLoading.value = !isLoading.value;
        };

        const postPagePath = (id: number) => {
            return `/post/${id}`;
        };

        return {
            load,
            isLoading,
            postPagePath,
        };
    },
});
</script>
