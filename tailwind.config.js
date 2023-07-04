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
        },
    },
    //追加
    daisyui: {
        themes: [
            {
                mytheme: {
            
                    "primary": "#d1c1d7",

                    "secondary": "#f6cbd1",

                    "accent": "#b4e9d6",
                    
                    "neutral": "#fef9c3",
                    
                    "base-100": "#f3f4f6",
                    
                    "info": "#67e8f9",
                    
                    "success": "#fca5a5",
                    
                    "warning": "#fbbd23",
                    
                    "error": "#f87272",
                },
            },
        ],
    },
    plugins: [forms],
};
