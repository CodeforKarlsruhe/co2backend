import { defineConfig } from "vite";
import { fileURLToPath, URL } from "url";

import Vue from "@vitejs/plugin-vue";

export default defineConfig(({ command }) => {
    const IS_DEV = command === "serve";

    return {
        base: IS_DEV ? "" : "/build/",
        publicDir: "non_existent_folder",
        build: {
            outDir: "public/build",
            manifest: true,
            rollupOptions: {
                input: ["resources/js/main.ts"],
            },
        },
        resolve: {
            alias: {
                "@": fileURLToPath(new URL("./resources/js", import.meta.url)),
            },
        },
        define: {
            'process.env': {}
        },
        plugins: [Vue()],
    };
});
