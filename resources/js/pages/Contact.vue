<template>
    <div class="container">
        <div v-if="success" class="alert alert-success" role="alert">
            Mail inviata con successo!
        </div>
        <form @submit.prevent="sendForm" method="post">
            <div class="form-group">
                <label for="name">Nome</label>
                <input v-model="name" type="text" class="form-control" id="name" name="name">
                <p class="alert alert-danger" v-for="(error, index) in errors.name" :key="index">
                    {{ error }}
                </p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input v-model="mail" type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com">
                <p class="alert alert-danger" v-for="(error, index) in errors.mail" :key="index">
                    {{ error }}
                </p>
            </div>
            <div class="form-group">
                <label for="email">Oggetto dell'Email</label>
                <input v-model="mailObject" type="text" class="form-control" id="mailObject" name="mailObject" placeholder="name@example.com">
                <p class="alert alert-danger" v-for="(error, index) in errors.mailObject" :key="index">
                    {{ error }}
                </p>
            </div>
            <div class="form-group">
                <label for="message">Messaggio</label>
                <textarea v-model="message" class="form-control" id="message" name="message" rows="3"></textarea>
                <p class="alert alert-danger" v-for="(error, index) in errors.message" :key="index">
                    {{ error }}
                </p>
            </div>

            <button type="submit" class="btn btn-primary">{{ sending ? "Invio..." : "Invia" }}</button>
        </form>
    </div>
</template>

<script>
export default {
    name:"Contact",
    data(){
        return {
            name: null,
            mail: null,
            mailObject: null,
            message: null,
            success: false,
            sending: false,
            errors: {}
        }
    },
    methods:{
        sendForm(){
            this.sending = true;
            this.success = false;
            axios.post('/api/contacts',
            {
                'name': this.name,
                'mail': this.mail,
                'mailObject': this.mailObject,
                'message': this.message
            })
            .then(response=>{
                console.log(response.data);
                if(!response.data.success){
                    this.success = false;
                    this.errors = response.data.errors;
                }
                else{
                    this.success = true;
                    this.errors = {};
                    this.name="";
                    this.mail="";
                    this.mailObject="";
                    this.message="";
                }
                this.sending = false;
            })
            .catch(error=>{
                console.log(error.response.data);
                this.sending = false;
            })
        }
    }
}
</script>

<style>
</style>