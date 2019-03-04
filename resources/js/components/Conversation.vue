<template>
  <div class="conversation">
    <h1>{{ contact? contact.name : 'select a Contact' }}</h1>
    <MessageFeed :contact="contact" :messages="messages"/>
    <MessageComposer @send="sendMessage"/>
  </div>
</template>

<script>
import MessageFeed from "./MessageFeed";
import MessageComposer from "./MessageComposer";
export default {
  props: {
    contact: {
      type: Object,
      default: null
    },
    messages: {
      type: Array,
      default: []
    }
  },
  methods: {
    sendMessage(text) {
      console.log(text);
    }
  },
  components: { MessageFeed, MessageComposer }
};
</script>

<style lang="scss" scoped>
.conversation{
  flex:5;
}
</style>