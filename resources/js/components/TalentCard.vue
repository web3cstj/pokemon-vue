<template>
    <div class="talentcard">
        <div class="nom">{{talent.nom_fr}}</div>
        <div class="effet_combat">{{talent.effet_combat}}</div>
        <div class="effet_terrain">{{talent.effet_terrain}}</div>
    </div>
</template>

<script>

import Axios from "axios";
export default {
    name: 'TalentCard',
    data() {
        return {
            talent: null,
        };
    },
    props: {
        nom_fr: {},
    },
    components: {
    },
    mounted() {
        Axios.get("/api/talent/"+this.nom_fr).then(response => {
            this.talent = response.data;
        });
    },
    methods: {
    },
}
</script>

<style lang="scss">
.talentcard {
    position: absolute;
    background-color: white;
    padding: 1em;
    width: 15em;
    border: 1px solid black;
    border-radius: .5em;
    .nom_fr {
        font-weight: bold;
    }
}
</style>

