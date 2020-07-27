<template>
    <v-card color="grey lighten-4" flat height="100px" tile>
        <v-toolbar dense>
            <v-btn icon>
                <v-icon>mdi-menu</v-icon>
            </v-btn>
            <v-toolbar-title>PescaWeb</v-toolbar-title>

            <v-spacer></v-spacer>
            
            <div>                
                <router-link
                v-for="item in items"
                :key="item.title"
                :to="item.to"
                v-if="item.show">
                    <v-btn color="pink" icon><v-icon>{{item.title}}</v-icon></v-btn>
                </router-link>
            </div>
            
        </v-toolbar>
    </v-card>
</template>

<script>
export default {
    data(){
        return {
            items: [
                {title: 'mdi-home', to: '/home', show:true},
                {title: 'mdi-fish', to: '/fish', show: User.loggedIn()},
                {title: 'mdi-filter-variant', to: '/category', show: User.loggedIn()},
                {title: 'mdi-login', to: '/login', show: !User.loggedIn()},
                {title: 'mdi-logout', to: '/logout', show: User.loggedIn()},
            ]
        }
    },
    created(){
        EventBus.$on('logout', () => {
            User.logout()
        })
    }
};
</script>





