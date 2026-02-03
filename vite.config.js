import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  base: '/',
  build: {
    outDir: 'public/build',    // separate output folder
    emptyOutDir: true,         // clean previous builds
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'public/assets/js/main.js'),
        style: path.resolve(__dirname, 'public/assets/css/style.css'), // separate CSS entry
      },
      output: {
        entryFileNames: 'js.min.js',    // JS bundle
        assetFileNames: 'css.min.css',  // CSS bundle
      },
    },
  },
});
