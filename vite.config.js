import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/api.js",
                "resources/js/detail.js",
                "resources/js/detail_edit.js",
                "resources/js/edit.js",
                "resources/js/mypage.js",
                "resources/js/timeline.js",
                "resources/js/secret.js",
                "resources/js/search.js",
            ],
            refresh: true,
        }),
    ],
});
