import { defineConfig } from 'vite';
import { createVuePlugin } from 'vite-plugin-vue2';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    createVuePlugin(),
    laravel({
      input: ['resources/js/app.js', 'resources/css/app.css'],
      refresh: true,
    }),
  ],
});
