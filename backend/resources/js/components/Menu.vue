<template>
    <div
        :class="
            type === 'pc'
                ? 'flex-grow items-center w-auto hidden lg:flex'
                : 'w-full block flex-grow lg:hidden'
        "
        v-show="type === 'pc' ? true : isClickMenu"
    >
        <div class="text-sm lg:flex-grow">
            <a
                href="/new"
                class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4"
            >
                新着
            </a>
            <a
                href="/ranking"
                class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4"
            >
                ランキング
            </a>
            <a
                href="/users"
                class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white"
            >
                ユーザ一覧
            </a>
        </div>

        <div>
            <a
                href="#"
                class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white mt-4 lg:mt-0 hover:shadow-lg"
                >Sign in</a
            >
            <a
                href="#"
                class="inline-block text-sm px-4 py-2 leading-none border bg-white rounded text-teal-500 border-white mt-4 lg:mt-0 ml-4 lg:ml-2 hover:shadow-lg"
                >Sign up</a
            >
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, ref, PropType } from "vue";

type PropsType = "pc" | "media";

export default defineComponent({
    props: {
        type: {
            type: String as PropType<PropsType>,
            required: true,
        },
        isClickMenu: {
            type: Boolean,
            default: false,
        },
    },

    setup() {},
});
</script>
