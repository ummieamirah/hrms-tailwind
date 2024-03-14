/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'base-blue': '#05285E',
                'teal-light': 'rgba(30, 207, 202, 1)',
                'tiffany-mix': 'rgba(30, 207, 202, 1)',
                'blue-b': 'rgba(5, 40, 94, 1)',
            },
        },
    },
    plugins: [],
}

