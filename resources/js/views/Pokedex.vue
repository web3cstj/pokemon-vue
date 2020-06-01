<template>
    <pokedex v-if="pokedex" :pokedex="pokedex" />
</template>

<script>
import Axios from "axios";
import Pokedex from "../components/Pokedex";
export default {
    name: 'Hello',
    data() {
        return {
            pokedex: null,
        };
    },
    props: {
    },
    components: {
        Pokedex,
    },
    mounted() {
        const id = this.$route.params.id;
        Axios.get("/api/pokedex/"+id+"/full").then(response => {
            this.pokedex = response.data;
        });
    },
    methods: {
    },
    beforeRouteUpdate(to, from, next) {
        var id = to.params.id;
        Axios.get("/api/pokedex/"+id+"/full").then(response => {
            this.pokedex = response.data;
        });
        next();
    }
}
</script>

<style lang="scss">
.pokedex {
    display: grid;
    grid-gap: .5em;
    // grid-auto-flow: column;
    grid-template-columns: repeat(auto-fill, 15em);
    .pokemon {
        font-size: 10px;
    }
}
</style>

