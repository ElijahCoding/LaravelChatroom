require('./bootstrap');

window.Vue = require('vue');

Vue.component('chat', require('./components/Chat.vue'));
Vue.component('chat-messages', require('./components/Messages.vue'));
Vue.component('chat-message', require('./components/Message.vue'));

Vue.component('chat-users', require('./components/Users.vue'));
const app = new Vue({
    el: '#app'
});
