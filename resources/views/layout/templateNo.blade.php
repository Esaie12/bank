<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 TemplatePar Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />
    <!-- Site Properties -->
    <title>Transfert Union | Transfert d'argent rapide et sécurisé - Canada - Afrique </title>
    @include('includes.cssLink')

</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            @include('layout.menu')
        </div>
        <!-- header content end -->
    </header>
    <main>
        @yield('contenu')

    </main>
    <footer>
        @include('layout.footer')
    </footer>
    <!-- Javascript -->
    @include('includes.jsLink')
</body>

</html>
