/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        raizer: {
          100: "#fad3b3",
          200: "#f8be8e",
          300: "#f5a868",
          400: "#f39242",
          500: "#db833b",
          600: "#c27535",
          700: "#aa662e",
          800: "#925828",
          900: "#7a4921",
        },
      },
    },

    plugins: [],
  },
};
