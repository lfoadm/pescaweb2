<template>
    <v-card color="grey lighten-4" flat height="100px" tile>
        <v-toolbar dense>
            <v-btn icon>
                <v-icon>mdi-menu</v-icon>
            </v-btn>
            <v-toolbar-title>PescaWeb</v-toolbar-title>

            <v-spacer></v-spacer>
            <div>
                <router-link to="/home">
                    <v-btn icon>
                        <v-icon color="blue">mdi-home</v-icon>
                    </v-btn>
                </router-link>

                <v-btn icon color="blue">
                    <v-icon>mdi-fish</v-icon>
                </v-btn>

                <v-btn icon color="blue">
                    <v-icon>mdi-filter-variant</v-icon>
                </v-btn>

                <router-link to="/login">
                    <v-btn icon color="blue">
                        <v-icon>mdi-login</v-icon>
                    </v-btn>
                </router-link>
            </div>
        </v-toolbar>
    </v-card>
</template>

<script>
export default {};
</script>
