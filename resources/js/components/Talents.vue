<template>
    <div class="talents">
        <a v-for="(talent, i) in array" :key="i" :href="'talent/'+talent">{{talent}}</a>
    </div>
</template>

<script>

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
}
</style>

