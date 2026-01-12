/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist: [
    'show',
    'opacity-0',
    'opacity-100',
    'translate-x-0',
    'translate-x-6',
    'active',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
