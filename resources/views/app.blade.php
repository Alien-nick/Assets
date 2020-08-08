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
                <header class="p-6 mb-8">
                    <img alt="laracasts" src="/images/logo.svg">
                </header>

            <div class="container px-8 pb-10">
                
                <main class="flex">
                    <aside class="md:w-72 pt-8">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                            <ul class="list-reset">
                            <li class="text-sm pb-4"><router-link class="text-black" to="/" exact>Logo</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/typography">Typography</router-link> </li>

                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm pb-4"><router-link class="text-black" to="/mascot">Mascot</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/illustrations">Illustrations</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/loaders-and-animations">Loaders and Animations</router-link> </li>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/wallpaper">Wallpaper</router-link> </li>
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
