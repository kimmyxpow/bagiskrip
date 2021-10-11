const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                "poppins": "'poppins', sans-serif",
                "montserrat": "'Montserrat', sans-serif",
            },
            colors: {
                mycolor: {
                    DEFAULT: '#7C83FD',
                    'dark-text': '#434343',
                    'light-text': '#858585',
                },
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            translate: ['group-hover'],
            pointerEvents: ['hover', 'focus', 'group-hover'],
            grayscale: ['hover', 'focus'],
            dropShadow: ['hover', 'focus'],
            rotate: ['active', 'group-hover'],
            scale: ['active', 'group-hover'],
            fill: ['hover', 'focus', 'group-hover'],
            boxShadow: ['dark'],
            lineClamp: ['responsive', 'hover'],
            ringColor: ['hover', 'active', 'group-focus'],
            ringWidth: ['hover', 'active', 'group-focus'],
            ringColor: ['hover', 'active', 'group-focus'],
            ringWidth: ['hover', 'active', 'group-focus'],
            ringOffsetWidth: ['hover', 'active', 'group-focus'],
            ringOffsetColor: ['hover', 'active', 'group-focus'],
            outline: ["focus"],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],
};
