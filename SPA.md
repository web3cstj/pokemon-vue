# Création d'une application SPA hybride avec Laravel et VueJS

## Installation

1. Installer L'application Laravel
    ```
    composer create-project laravael/laravel monprojet
    cd monprojet
    ```
1. Installer VueJS
    ```
    composer require laravel/ui
    php artisan ui vue --auth
    //ou php artisan ui vue
    npm install
    npm run dev
    ```
1. Installer le router de VueJS
    ```
    npm install vue-router
    ```

## Server-side

1. Créer la route Laravel vers la SPA. Dans `routes/web.php`
    ```
    Route::get("/{reste?}", "SpaController@index");
    ```
    - L'adresse, le controller et l'action peuvent être adaptés selon les besoins.

    - Le paramètre optionnel {reste?} permet à l'application SPA de réagir à une adresse complèxe avec donnees (router de VueJS)

    - Si l'application a des routes standard (par exemple `/admin` ), il faut les mettre avant la route de la SPA.

1. Créer le controller
    ```
    php artisan make:controller SpaController
    ```
1. Créer l'action dans le controller. Dans `/app/http/controllers/SpaController.php`
    ```
    public function index() {
        return view("spa.index");
    }
    ```
    - L'arborescence des views peut être adaptée selon les besoins

1. Créer la view de la SPA. Dans `/resources/views/spa/index.blade.php` :
    ```html
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vue SPA Demo</title>
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
    </html>

    ```
    - Les parties significatives de ce code sont les balises `<app></app>` et `<script></script>`.
    - La balise `div.app` a également son importance.

## Client-side 

1. Ajouter le router et les routes. Dans `/resources/js/app.js` :
    ```
    window.Vue = require('vue');
    import VueRouter from 'vue-router'

    Vue.use(VueRouter)
    import routes from "./routes.js";

    const router = new VueRouter({
        mode: 'history',
        routes: routes,
    });
    ```
1. Adapter l'instruction qui se trouve en dernier
    ```
    import App from "./views/App"
    const app = new Vue({
        el: '#app',
        components: { App },
        router,
    });
    ```
1. Créer les routes. Dans `/resources/js/routes.js`
    ```
    import Hello from './views/Hello'
    import Home from './views/Home'

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
    ];
    ```

    - Les instructions `import` et le contenu de routes devront être adaptés au projet.
1. Le component `App`. Dans `/resources/js/views/App.vue`
    ```html
    <template>
        <div>
            <h1>Vue Router Demo App</h1>

            <p>
                <router-link :to="{ name: 'home' }">Home</router-link> |
                <router-link :to="{ name: 'hello' }">Hello World</router-link>
            </p>

            <div class="container">
                <router-view></router-view>
            </div>
        </div>
    </template>
    <script>
        export default {}
    </script>
    ```
    - Le code significatif est la balise `<router-view></router-view>`, qui sera remplacée par la vue générée par le router.

1. Les views supplémentaires 
    Dans `/resources/js/views/Home.vue`
    ```
    <template>
    <p>This is the homepage</p>
    </template>
    ```
    Dans `/resources/js/views/Hello.vue`
    ```
    <template>
    <p>Hello World!</p>
    </template>
    ```

## L'exécution
1. Démarrer le serveur Web. Dans un terminal :
    ```
    php artisan serve
    ```
1. Démarrer la surveillance du client-side. Dans un autre terminal :
    ```
    npm run watch
    ```
    - L'instruction `watch` se trouve dans le fichier `package.json`
1. Tester les pages `/` et `/hello`

## Références
- Installation de Laravel: https://laravel.com/docs/7.x/installation
- Installation de VueJs: https://laravel.com/docs/7.x/frontend
- [Building a Vue SPA with Laravel](https://laravel-news.com/using-vue-router-laravel)
