<template>
    <v-container>
            <v-form v-on:submit.prevent="login">
                <v-text-field
                    v-model="form.email"
                    label="E-mail"
                    type="email"
                    required
                ></v-text-field>

                <v-text-field
                    v-model="form.password"
                    label="Password"
                    type="password"
                    required
                ></v-text-field>

                <v-btn color="success" type="submit">
                    Entrar
                </v-btn>

                <router-link to="/signup">
                    <v-btn depressed small color="primary">Inscrever-se</v-btn>
                </router-link>

            </v-form>
        </v-container>

        
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: null,
                password: null
            }
        }
    },
    created(){
        if(User.loggedIn()){
            this.$router.push({name:'home'})
        }
    },
    methods:{
        login(){
            User.login(this.form)
        }
    }
};
</script>
