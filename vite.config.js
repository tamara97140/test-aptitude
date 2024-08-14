import { fileURLToPath, URL } from 'node:url'
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    }
  },
  server: {
    proxy: {
      '/api': { // This key defines the path to intercept for proxying
        target: 'http://localhost:8000', // URL of your backend server
        changeOrigin: true,
        rewrite: (path) => path.replace(/^\/api/, '') // Removes '/api' prefix before forwarding
      }
    }
  }
})
