<template>
    <div>
        <h1>Vue Router Demo App</h1>

        <p>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Pikachu</router-link> |
            <router-link :to="{ name: 'pokedex', params:{id: 1} }">Pokedex 1</router-link> |
            <router-link :to="{ name: 'pokedex', params:{id: 2} }">Pokedex 2</router-link>

        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>
