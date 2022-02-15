import "vuetify/styles";
import { createApp } from "vue";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";
import ExampleComponent from "./components/App.vue";

require("./bootstrap");

const app = createApp(ExampleComponent);
const vuetify = createVuetify({ components, directives });

app.use(vuetify);
app.mount("#app");
