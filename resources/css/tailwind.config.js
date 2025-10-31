import formsPlugin from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: ["./index.html", "./src/**/*.{js,css}"],
    darkMode: "class", // Mengaktifkan mode gelap berbasis 'class'
    theme: {
        extend: {
            colors: {
                // Palet Warna Kustom (Light Mode)
                primary: {
                    DEFAULT: "#194240", // Teal gelap dari hero/footer
                    content: "#FFFFFF", // Teks di atas primary
                },
                secondary: {
                    DEFAULT: "#F7F1E6", // Krem muda untuk card/section
                    content: "#1C1C1C", // Teks di atas secondary
                },
                accent: {
                    DEFAULT: "#C4F000", // Hijau lime
                    content: "#194240", // Teks di atas accent
                },
                base: {
                    100: "#FBF9F4", // Latar belakang utama (krem sangat muda)
                    content: "#1C1C1C", // Teks utama
                    "content-secondary": "#6B6B6B", // Teks abu-abu/muted
                },
                "border-color": "#E0DACE",

                // Palet Warna Kustom (Dark Mode)
                "dark-primary": {
                    DEFAULT: "#1E4E4C", // Sedikit lebih cerah dari primary
                    content: "#E0E0E0",
                },
                "dark-secondary": {
                    DEFAULT: "#262626", // Abu-abu gelap untuk card/section
                    content: "#E0E0E0",
                },
                "dark-accent": {
                    DEFAULT: "#C4F000", // Tetap sama
                    content: "#194240",
                },
                "dark-base": {
                    100: "#1A1A1A", // Latar belakang utama (gelap)
                    content: "#F0F0F0", // Teks utama
                    "content-secondary": "#9E9E9E", // Teks abu-abu/muted
                },
                "dark-border-color": "#3A3A3A",

                // Warna semantik (dengan varian dark jika diperlukan)
                info: {
                    DEFAULT: "#3ABFF8",
                    dark: "#0EA5E9",
                },
                success: {
                    DEFAULT: "#36D399",
                    dark: "#10B981",
                },
                warning: {
                    DEFAULT: "#FBBD23",
                    dark: "#F59E0B",
                },
                danger: {
                    DEFAULT: "#F87272",
                    dark: "#EF4444",
                },
            },
            fontFamily: {
                // Font kustom
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
                serif: ["Playfair Display", ...defaultTheme.fontFamily.serif],
            },
            // Menambahkan transisi untuk dark mode
            transitionProperty: {
                colors: "background-color, border-color, color, fill, stroke",
            },
        },
    },
    plugins: [
        formsPlugin, // Plugin untuk form styling
    ],
};
