<template>
    <div class="pokedex" v-if="pokedex">
        <pokemon-card v-for="(pokemon, i) in pokedex.pokemons" :key="i" :pokemon="pokemon"/>
    </div>
</template>

<script>
import Axios from "axios";
import PokemonCard from "../components/PokemonCard";
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
        PokemonCard,
    },
    mounted() {
        const id = this.$route.params.id;
        Axios.get("/api/pokedex/"+id+"/full").then(response => {
            this.pokedex = response.data;
        });
    },
    methods: {
    },
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

