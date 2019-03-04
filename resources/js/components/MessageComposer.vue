<template>
  <div class="composer">
    <textarea v-model="message" @keydown="send" placeholder="Message..."></textarea>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: ""
    };
  },
  methods: {
    send: function() {
      if (this.message == "") {
        return;
      }
      this.$emit("send", this.message);
      this.message = "";
    }
  }
};
</script>

<style scoped>
</style>