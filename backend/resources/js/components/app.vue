<template>
    <v-app>
        <v-card>
            <v-card-title>{{ message }}</v-card-title>
        </v-card>
    </v-app>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
export default defineComponent({
    setup() {
        const message = ref<string>("Hello World");
        return {
            message,
        };
    },
});
</script>
