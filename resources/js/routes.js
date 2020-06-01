import Hello from './views/Hello'
import Home from './views/Home'
import Pokemon from './views/Pokemon'
import Pokedex from './views/Pokedex'

export default [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/hello',
        name: 'hello',
        component: Hello,
    },
    {
        path: '/pokemon/:id',
        name: 'pokemon',
        component: Pokemon,
    },
    {
        path: '/pokedex/:id',
        name: 'pokedex',
        component: Pokedex,
    },
];
