import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path'

export default defineConfig({
    plugins: [vue()],
    root: path.resolve(__dirname, 'resources/js'), // Entry point root
    publicDir: false, // Prevent Vite from copying /public inside root
    base: process.env.NODE_ENV === 'development'
    ? 'http://localhost:5174/'
    : '/vendor/helloworld/',
    build: {
        outDir: path.resolve(__dirname, 'public'),
        emptyOutDir: true,
        manifest: 'manifest.json',
        rollupOptions: {
            input: path.resolve(__dirname, 'resources/js/app.js'),
            output: {
                entryFileNames: 'assets/[name]-[hash].js',
            },
        },
    },
    server: {
        port: 5174,
        open: true,
    }
})
