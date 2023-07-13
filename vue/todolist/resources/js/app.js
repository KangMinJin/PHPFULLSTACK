require('./bootstrap');
// vue create가 아니고 laravel에 vue를 올린것이라서 다 적어줘야함.
import { createApp } from 'vue'
import App from './vue/App.vue'

createApp(App).mount('#app');
