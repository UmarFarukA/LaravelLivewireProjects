// vite.config.ts
import { wayfinder } from "file:///C:/Users/Umar%20Faruk%20A/Desktop/Web%20Dev/Backend/PHP/LaravelLivewireProjects/vue_crud/node_modules/@laravel/vite-plugin-wayfinder/dist/index.mjs";
import tailwindcss from "file:///C:/Users/Umar%20Faruk%20A/Desktop/Web%20Dev/Backend/PHP/LaravelLivewireProjects/vue_crud/node_modules/@tailwindcss/vite/dist/index.mjs";
import vue from "file:///C:/Users/Umar%20Faruk%20A/Desktop/Web%20Dev/Backend/PHP/LaravelLivewireProjects/vue_crud/node_modules/@vitejs/plugin-vue/dist/index.js";
import laravel from "file:///C:/Users/Umar%20Faruk%20A/Desktop/Web%20Dev/Backend/PHP/LaravelLivewireProjects/vue_crud/node_modules/laravel-vite-plugin/dist/index.js";
import { defineConfig } from "file:///C:/Users/Umar%20Faruk%20A/Desktop/Web%20Dev/Backend/PHP/LaravelLivewireProjects/vue_crud/node_modules/vite/dist/node/index.js";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: ["resources/js/app.ts"],
      ssr: "resources/js/ssr.ts",
      refresh: true
    }),
    tailwindcss({
      content: [
        "./node_modules/@inertiaui/modal-vue/src/**/*.{js,vue}"
        // other paths...
      ]
    }),
    wayfinder({
      formVariants: true
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false
        }
      }
    })
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcudHMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxVbWFyIEZhcnVrIEFcXFxcRGVza3RvcFxcXFxXZWIgRGV2XFxcXEJhY2tlbmRcXFxcUEhQXFxcXExhcmF2ZWxMaXZld2lyZVByb2plY3RzXFxcXHZ1ZV9jcnVkXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxVbWFyIEZhcnVrIEFcXFxcRGVza3RvcFxcXFxXZWIgRGV2XFxcXEJhY2tlbmRcXFxcUEhQXFxcXExhcmF2ZWxMaXZld2lyZVByb2plY3RzXFxcXHZ1ZV9jcnVkXFxcXHZpdGUuY29uZmlnLnRzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9DOi9Vc2Vycy9VbWFyJTIwRmFydWslMjBBL0Rlc2t0b3AvV2ViJTIwRGV2L0JhY2tlbmQvUEhQL0xhcmF2ZWxMaXZld2lyZVByb2plY3RzL3Z1ZV9jcnVkL3ZpdGUuY29uZmlnLnRzXCI7aW1wb3J0IHsgd2F5ZmluZGVyIH0gZnJvbSAnQGxhcmF2ZWwvdml0ZS1wbHVnaW4td2F5ZmluZGVyJztcbmltcG9ydCB0YWlsd2luZGNzcyBmcm9tICdAdGFpbHdpbmRjc3Mvdml0ZSc7XG5pbXBvcnQgdnVlIGZyb20gJ0B2aXRlanMvcGx1Z2luLXZ1ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCB7IGRlZmluZUNvbmZpZyB9IGZyb20gJ3ZpdGUnO1xuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoe1xuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgbGFyYXZlbCh7XG4gICAgICAgICAgICBpbnB1dDogWydyZXNvdXJjZXMvanMvYXBwLnRzJ10sXG4gICAgICAgICAgICBzc3I6ICdyZXNvdXJjZXMvanMvc3NyLnRzJyxcbiAgICAgICAgICAgIHJlZnJlc2g6IHRydWUsXG4gICAgICAgIH0pLFxuICAgICAgICB0YWlsd2luZGNzcyh7XG4gICAgICAgICAgICBjb250ZW50OiBbXG4gICAgICAgICAgICAgICAgJy4vbm9kZV9tb2R1bGVzL0BpbmVydGlhdWkvbW9kYWwtdnVlL3NyYy8qKi8qLntqcyx2dWV9JyxcbiAgICAgICAgICAgICAgICAvLyBvdGhlciBwYXRocy4uLlxuICAgICAgICAgICAgXVxuICAgICAgICB9KSxcbiAgICAgICAgd2F5ZmluZGVyKHtcbiAgICAgICAgICAgIGZvcm1WYXJpYW50czogdHJ1ZSxcbiAgICAgICAgfSksXG4gICAgICAgIHZ1ZSh7XG4gICAgICAgICAgICB0ZW1wbGF0ZToge1xuICAgICAgICAgICAgICAgIHRyYW5zZm9ybUFzc2V0VXJsczoge1xuICAgICAgICAgICAgICAgICAgICBiYXNlOiBudWxsLFxuICAgICAgICAgICAgICAgICAgICBpbmNsdWRlQWJzb2x1dGU6IGZhbHNlLFxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB9LFxuICAgICAgICB9KSxcbiAgICBdLFxufSk7XG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQWdjLFNBQVMsaUJBQWlCO0FBQzFkLE9BQU8saUJBQWlCO0FBQ3hCLE9BQU8sU0FBUztBQUNoQixPQUFPLGFBQWE7QUFDcEIsU0FBUyxvQkFBb0I7QUFFN0IsSUFBTyxzQkFBUSxhQUFhO0FBQUEsRUFDeEIsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTyxDQUFDLHFCQUFxQjtBQUFBLE1BQzdCLEtBQUs7QUFBQSxNQUNMLFNBQVM7QUFBQSxJQUNiLENBQUM7QUFBQSxJQUNELFlBQVk7QUFBQSxNQUNSLFNBQVM7QUFBQSxRQUNMO0FBQUE7QUFBQSxNQUVKO0FBQUEsSUFDSixDQUFDO0FBQUEsSUFDRCxVQUFVO0FBQUEsTUFDTixjQUFjO0FBQUEsSUFDbEIsQ0FBQztBQUFBLElBQ0QsSUFBSTtBQUFBLE1BQ0EsVUFBVTtBQUFBLFFBQ04sb0JBQW9CO0FBQUEsVUFDaEIsTUFBTTtBQUFBLFVBQ04saUJBQWlCO0FBQUEsUUFDckI7QUFBQSxNQUNKO0FBQUEsSUFDSixDQUFDO0FBQUEsRUFDTDtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
