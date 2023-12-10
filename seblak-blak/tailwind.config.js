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
                // 'sidebarColor': '#131B2A',
                'primary': '#A92100',
                'secondary': '#1e1e1e',
                'backgroundColor': '#F0F2F3',
                'inputColor': '#151515',
                'lightBlue': '#5396F6',
                'yellow': '#FFEF5C',
                'purple': '#3f3cbb',
                'midnight': '#121063',
                'metal': '#565584',
                'tahiti': '#3ab7bf',
                'silver': '#ecebff',
                'bubble-gum': '#ff77e9',
                'bermuda': '#78dcca'
            },
            width: {
                'right': 'calc(100% - 16rem)'
            },
            screens: {
                '4xs': '300px',
                // => @media (min-width: 300px) { ... }

                '2xs': '400px',
                // => @media (min-width: 400px) { ... }

                'xs': '475px',
                // => @media (min-width: 475px) { ... }
                
                'sm': '640px',
                // => @media (min-width: 640px) { ... }
          
                'md': '768px',
                // => @media (min-width: 768px) { ... }
          
                'lg': '1024px',
                // => @media (min-width: 1024px) { ... }
          
                'xl': '1280px',
                // => @media (min-width: 1280px) { ... }
          
                '2xl': '1536px',
                // => @media (min-width: 1536px) { ... }
            }
        },
    },
    plugins: [],
};
    