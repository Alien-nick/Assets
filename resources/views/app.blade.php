<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts</title>

        <!-- Css -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    </head>
    <body class="font-sans">
       <div id="app">
            <div class="container px-10">
                <header class="py-6">
                    <img alt="laracasts" src="/images/logo.svg">
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-4">The Brand</h5>
                            <ul class="list-reset">
                            <li class="text-sm pb-4"><router-link class="text-black" to="/">Logo</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/">Logo Symbol</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/about">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/about">Typography</router-link> </li>

                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-4">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm pb-4"><router-link class="text-black" to="/">Mascot</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/about">Illustrations</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/">Loaders and Animations</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/">Wallpaper</router-link> </li>
                            </ul>
                        </section>
                    </aside>
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
       </div>

       <script src="/js/app.js"></script>
    </body>
</html>
