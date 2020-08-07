<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Css -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
       <div id="app">
            <div class="mx-auto">
                <header>
                    <h1>Nicholas Seetaram</h1>
                </header>

                <main>
                    <aside>
                        <div class="primary">
                            <router-link to="/">Home</router-link>
                            <router-link to="/about">About</router-link>
                        </div>
                    </aside>
                    <router-view></router-view>
                </main>
            </div>
       </div>

       <script src="/js/app.js"></script>
    </body>
</html>
