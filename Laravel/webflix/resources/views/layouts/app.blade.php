<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    @section('title')

       webflix

    @show
        

    </title>

</head>
<body>

    <nav>

        <a href="/">Accueil</a>
        <a href="/strauss">Strauss Grom</a>
        <a href="/strauss?color=rose">Strauss Grom Rose</a>
        <a href="/strauss/gabriel">Strauss et Gabriel</a>
        <a href="/strauss/joannella">Strauss et Joannella</a>
        <a href="/a-propos">A propos</a>

    </nav>

@yield('content')
    


    <footer>

     {{date('Y')}}

    </footer>
    
</body>
</html>