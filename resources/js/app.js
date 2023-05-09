// import "./bootstrap";
// import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";
import "../assets/backend/assets/vendor/fonts/fontawesome.css";
import "../assets/backend/assets/vendor/fonts/tabler-icons.css";
import "../assets/backend/assets/vendor/fonts/flag-icons.css";
// import "../assets/backend/assets/vendor/css/rtl/core.css";
// import "../assets/backend/assets/vendor/css/rtl/theme-default.css";
import "../assets/backend/assets/css/demo.css";
import "../assets/backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css";
import "../assets/backend/assets/vendor/libs/node-waves/node-waves.css";
// import "../assets/backend/assets/vendor/js/helpers";
// import "../assets/backend/assets/vendor/js/template-customizer";
// import "../assets/backend/assets/js/config";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";

const el = document.getElementById("app");

const app = createApp({
    render: renderSpladeApp({ el }),
}).use(SpladePlugin, {
    max_keep_alive: 10,
    transform_anchors: false,
    progress_bar: true,
});

// Menyembunyikan peringatan
app.config.warnHandler = function (msg, vm, trace) {
    // Beri kondisi untuk menyembunyikan peringatan yang spesifik
    if (msg.includes("Extraneous non-props attributes")) {
        return;
    }
    console.warn(msg);
};

app.mount(el);
