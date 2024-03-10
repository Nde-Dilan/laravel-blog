import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

    //INFO: Was here
    //this hmr host is used to make the hmr work with laravellike that the styles will be updated without refreshing the page everytime.
    server:{
        hmr:{
            host:'localhost'
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
