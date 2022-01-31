const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './config/**/*.php',
        './app/Http/Livewire/**/*.php',
        './app/View/Components/**/*.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
        require('daisyui'),
    ],
};
