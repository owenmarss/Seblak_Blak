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
                transparent: 'transparent',
                current: 'currentColor',
                'white': '#ffffff',
                'sidebarColor': '#131B2A',
                'backgroundColor': '#F0F2F3',
                'inputColor': '#151515',
                'lightBlue': '#5396F6',
                'purple': '#3f3cbb',
                'midnight': '#121063',
                'metal': '#565584',
                'tahiti': '#3ab7bf',
                'silver': '#ecebff',
                'bubble-gum': '#ff77e9',
                'bermuda': '#78dcca'
            },
            width: {
                'right': 'calc(100% - 18rem)'
            }
        },
    },
    plugins: [],
};
    