<template>
    <label class="block">
        <span class="block text-sm font-medium text-slate-700">
            {{ label }}
            <span class="text-red-500" v-if="isRequired">*</span>
        </span>
        <input
            :type="type"
            :name="name"
            :value="value"
            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
            :placeholder="placeholder"
        />
    </label>
</template>

<script lang="ts">
import { defineComponent, ref, PropType, toRefs, onMounted } from "vue";

type PropsType = "email" | "password" | "text";

export default defineComponent({
    props: {
        isRequired: {
            type: Boolean,
            default: false,
        },
        label: String,
        type: String as PropType<PropsType>,
        name: String,
        placeholder: String,
        oldValue: {
            type: String,
            default: "",
        },
    },

    setup(props) {
        const value = ref<string>("");
        const { oldValue } = toRefs(props);

        onMounted(() => {
            value.value = oldValue.value;
        });

        return {
            value,
        };
    },
    mounted() {},
});
</script>
