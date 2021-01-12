<template>
  <div class="input-group">
    <input type="text" name="message" id="btn-input" v-model="newMessage" @keyup.enter="sendMessage" class="form-control" placeholder="Type your message here..." aria-label="Type your message here..." aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button id="btn-chat" class="btn btn-primary btn-sm" @click="sendMessage">Send</button>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
          newMessage: ''
      }
    },
    methods: {
      sendMessage(){
        this.$parent.addMessage(this.newMessage);
        this.newMessage = '';
      }
    }
  };
</script>