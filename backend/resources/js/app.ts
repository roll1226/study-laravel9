import { createApp } from "vue";
import HeaderComponent from "./components/Header.vue";
import InputComponent from "./components/Input.vue";

require("./bootstrap");

const app = createApp({
    components: {
        HeaderComponent,
        InputComponent,
    },
});

app.mount("#app");
