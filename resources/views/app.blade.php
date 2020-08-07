<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nick's Portfolio</title>

        <!-- Css -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>
    <body class="font-sans">
       <div id="app">
            <div class="container mx-auto">
                <header class="py-6">
                    <h1>Nicholas Seetaram</h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <ul>
                            <li><router-link to="/">Home</router-link> </li>
                              <li><router-link to="/about">About</router-link> </li>
                        </ul>
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
