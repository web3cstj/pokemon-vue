<template>
    <div class="hello">
        <pokemon-card v-if="pokemon" :pokemon="pokemon"/>
    </div>
</template>

<script>
import Axios from "axios";
import PokemonCard from "../components/PokemonCard";
export default {
    name: 'Hello',
    data() {
        return {
            pokemon: null,
        };
    },
    props: {
    },
    components: {
        PokemonCard,
    },
    mounted() {
        Axios.get("/api/pokemon/235").then(response => {
            this.pokemon = response.data;
        });
    },
    methods: {
    },
}
</script>

<style lang="scss">
.hello {

}
</style>

