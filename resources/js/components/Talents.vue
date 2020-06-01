<template>
    <div class="talents">
        <div class="talent" v-for="(talent, i) in array" :key="i" tabindex="0">
            <div :href="'talent/'+talent">{{talent}}</div>
            <talent-card :nom_fr="talent"></talent-card>
        </div>
    </div>
</template>

<script>
import TalentCard from "./TalentCard.vue";
export default {
    name: 'Talents',
    data() {
        return {
            data: 0,
        };
    },
    props: {
        talents: {},
    },
    components: {
        TalentCard,
    },
    mounted() {
    },
    methods: {
    },
    computed: {
        array() {
            return this.talents.split("/");
        }
    },
}
</script>

<style lang="scss">
.talents {
    display: grid;
    .talent:not(:focus) {
        div + * {
            display:none;
        }
    }
}
</style>

