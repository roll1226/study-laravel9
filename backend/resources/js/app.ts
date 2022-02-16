import { createApp } from "vue";
import HeaderComponent from "./components/Header.vue";

require("./bootstrap");

const app = createApp({
    components: {
        HeaderComponent,
    },
});

app.mount("#app");
