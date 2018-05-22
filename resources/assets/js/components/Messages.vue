<template>
  <div class="chat__message">
    <chat-message v-for="message in messages" :key="message.id" :message="message"></chat-message>
  </div>
</template>

<script>
  import Bus from '../bus'

  export default {
    data () {
      return {
        messages: []
      }
    },

    mounted () {
      axios.get('/chat/messages').then((response) => {
        this.messages = response.data
      })

      Bus.$on('message.added', (data) => {
        console.log(data)
      })
    }
  }
</script>

<style lang="scss">
    .chat {
        &__messages {
            height: 400px;
            max-height: 400px;
            overflow-y: scroll;
        }
    }
</style>
