import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
const path = require('path');

// https://vitejs.dev/config/
export default defineConfig({
  build: {
    lib: {
      entry: path.resolve(__dirname, 'src/admin-menu.js'),
      name: 'AdminMenu',
      fileName: (format) => `admin-menu.${format}.js`
    },
  },
  plugins: [vue()]
})
