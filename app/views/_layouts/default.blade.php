<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
        <title>Siproma - Simple Project Management</title>

        {{ HTML::style('css/uikit.almost-flat.min.css') }}
        {{ HTML::style('css/app.css') }}

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="uk-grid">

            <div class="uk-width-small-1-10"></div>
            <div class="uk-width-small-8-10">
                <header>
                    <nav class="uk-navbar">
                        <a href="{{ route('login') }}" class="uk-navbar-brand">Siproma</a>
                        @section('navbar-flip')
                            <div class="uk-navbar-content uk-navbar-flip"><a href="{{ route('register.get') }}" class="uk-button uk-button-success">Register</a></div>
                        @show
                    </nav>
                </header>

                <main>
                    @yield('content')
                </main>


                <footer>

                </footer>
            </div>
            <div class="uk-width-small-1-10"></div>

        </div>


        {{ HTML::script('js/jquery.js') }}
        {{ HTML::script('js/uikit.min.js') }}
    </body>

</html>
