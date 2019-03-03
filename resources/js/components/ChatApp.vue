<template>
    <div class="chat-app">
        <conversation :contact="selectedContact" />
        <contactsList :contacts="contacts" />
    </div>
</template>

<script>
    import Conversation from './Conversation';
    import ContactsList from './Contacstlist';
    export default {
        props: {
            user: {
                type: Object,
                required: ture
            }
        }
            
        ,
        data(){
            return{
                selectedContact: null,
                messages: [],
                contacts:[]
            }
        },
        mounted() {
            axios.get('/contacts')
            .then(response =>  this.contacts = response.data)
            console.log('Component mounted.')
        },
        components: { Conversation, ContactsList}
    }
</script>
