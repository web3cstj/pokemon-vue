<template>
    <div class="pokemoncard" :style="{'background-image':'url('+src+')'}">
        <div class="nom_fr">{{pokemon.nom_fr}}</div>
        <div class="nom_en">{{pokemon.nom_en}}</div>
        <div class="image"></div>
        <div class="numero">{{pokemon.numero}}</div>
        <div class="type1">{{pokemon.type1}}</div>
        <div class="type2">{{pokemon.type2}}</div>
        <talents :talents="pokemon.talents"></talents>
    </div>
</template>

<script>
import Talents from "./Talents.vue";
export default {
    name: 'PokemonCard',
    data() {
        return {
            data: 0,
        };
    },
    props: {
        "pokemon": {},
    },
    components: {
        Talents,
    },
    mounted() {
    },
    methods: {
    },
    computed: {
        src() {
            return 'https://www.pokebip.com/pokedex-images/artworks/' + parseInt(this.pokemon.numero) + '.png';
        }
    },
}
</script>

<style lang="scss">
.pokemoncard {
    --hue: 120;
    width: 15em;
    height: 21em;
    border-radius: .5em;
    // border: 1px solid black;
    box-shadow: .1em .1em .2em rgba(0,0,0,0.5);
    background-repeat: no-repeat;
    background-size: 80% auto;
    background-position: center center;
    box-sizing: border-box;
    background-color: hsl(var(--hue), 30%, 70%);
    padding: 0.5em;
    display: grid;
    grid-template-rows: auto auto 1fr;
    .image {
        align-self: stretch;
    }
    div.nom_fr {
        font-weight: bold;
        font-size: larger;

    }
    div.nom_fr {
        font-weight: bold;
        font-size: larger;

    }
}
</style>


