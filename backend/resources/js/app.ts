import { createApp } from "vue";
import HeaderComponent from "./components/Header.vue";
import InputComponent from "./components/Input.vue";
import PostCardComponent from "./components/PostCard.vue";
import UserCardComponent from "./components/UserCard.vue";

require("./bootstrap");

const app = createApp({
    components: {
        HeaderComponent,
        InputComponent,
        PostCardComponent,
        UserCardComponent,
    },
});

app.mount("#app");
