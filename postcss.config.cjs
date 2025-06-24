// postcss.config.js
module.exports = {
    plugins: {
        // Correct way to include Tailwind CSS as a PostCSS plugin
        '@tailwindcss/postcss': {}, // or require('@tailwindcss/postcss')
        autoprefixer: {},
        // ... any other PostCSS plugins
    },
  };
