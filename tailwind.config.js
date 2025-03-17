import defaultTheme from 'tailwindcss/defaultTheme';
import '@fontsource/roboto';


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flyonui/dist/js/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto']
            },
        },
    },
    plugins: [
        require("flyonui"),
        require("flyonui/plugin"), // Require only if you want to use FlyonUI JS component
      ],
};
