import { createApp } from "vue";
import ExampleComponent from "./components/App.vue";

require("./bootstrap");

const app = createApp(ExampleComponent);

app.mount("#app");
