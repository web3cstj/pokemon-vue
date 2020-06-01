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
        const id = this.$route.params.id;
        Axios.get("/api/pokemon/"+id).then(response => {
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

