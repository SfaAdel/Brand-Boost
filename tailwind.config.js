import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                hepta: ["hepta", "sans-serif"],
                acworth: ["acworth", "sans-serif"],
                rubiki: ["rubiki", "sans-serif"],
                rubikv: ["rubikv", "sans-serif"],
            },
            colors: {
                gr: "#c5fb79",
                pr: "#520a70",
                pi: "#d695f5",
                bu: "#6383f0",
                bl: "#09060a",
            },
        },
    },

    plugins: [forms],
};
