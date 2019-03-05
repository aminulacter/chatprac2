<template>
  <div class="chat-app">
    <conversation :contact="selectedContact" :messages="messages" @new="saveNewMessages"/>
    <contactsList :contacts="contacts" @selected="startConversationWith"/>
  </div>
</template>

<script>
import Conversation from "./Conversation";
import ContactsList from "./Contactslist";
export default {
  props: {
    user: {
      type: Object,
      required: true
    }
  },

  data() {
    return {
      selectedContact: null,
      messages: [],
      contacts: []
    };
  },
  mounted() {
    axios.get("/contacts").then(response => (this.contacts = response.data));
    console.log("Component mounted.");
  },
  methods: {
    startConversationWith(contact) {
      console.log("fucker");
      axios
        .get(`/conversation/${contact.id}`)
        .then(response => {
          this.messages = response.data;
          console.log(response.data);
          this.selectedContact = contact;
        })
        .catch(err => console.log(errr));
    },

    saveNewMessages(text) {
      this.messages.push(text);
    }
  },
  components: { Conversation, ContactsList }
};
</script>
<style lang="scss" scoped>
.chat-app {
  display: flex;
}
</style>