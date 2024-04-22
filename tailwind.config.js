const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                readex: ['Readex Pro', 'sans-serif'] 
            },
            screens: {
                'xs': '0px',
                'sm': '320px',
                'md': '768px',
                'lg': '992px',
                'xl': '1200px',
            },
        },
    },

    plugins: [],
};
