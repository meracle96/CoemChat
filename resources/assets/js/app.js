require('./bootstrap');

window.Vue = require('vue');

// Vue Scroll
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

Vue.component('message', require('./components/Message.vue'));

const app = new Vue({
    el: '#app',
    data: {
      message: '',
      chat: {
        message: [],
        user: [],
        kelas: []
      }
    },
    methods: {
      send(){
        if (this.message.length != 0) {
          this.chat.message.push(this.message);
          this.chat.user.push('You');
          this.chat.kelas.push('out pull-right');
          axios.post('/send', {
            message : this.message
          })
          .then(response => {
            console.log(response);
            this.message = '';
          })
          .catch(error => {
            console.log(error);
          });
        }
      }
    },
    mounted() {
      Echo.private('chat')
        .listen('ChatEvent', (e) => {
          this.chat.message.push(e.message);
          this.chat.user.push(e.user);
          this.chat.kelas.push('in pull-left');
        })
    }
});
