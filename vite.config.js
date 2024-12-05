import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/sidebarStyle.css',
                'resources/css/viewFeedbackStyle.css',
                'resources/css/feedbackFormPageStyle.css',
                
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
