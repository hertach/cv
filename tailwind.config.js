import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // New color palette
                'hs-blue': {
                    '100': '#d0edf5',
                    '200': '#a1dbec',
                    '300': '#73c9e2',
                    '400': '#44b7d9',
                    '500': '#15a5cf',
                    '600': '#1184a6',
                    '700': '#0d637c',
                    '800': '#084253',
                    '900': '#021015',
                },
                'hs-gray': {
                    '100': '#ccd0d1',
                    '200': '#99a1a2',
                    '300': '#667274',
                    '400': '#334345',
                    '500': '#001417',
                    '600': '#001012',
                    '700': '#000c0e',
                    '800': '#000809',
                    '900': '#000405',
                },
            },
        },
    },

    plugins: [forms],
};
