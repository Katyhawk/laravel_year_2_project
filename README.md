# Setup
Om met laravel te werken zijn een paar dingen nodig:
1. Zorg dat je php versie 8.2 of hoger is (Dit kun je checken door 'php -v' te runnen in een terminal.)
2. Download de laatste versie van node.js.
3. Download de laatste versie van composer.
4. Open in vscode een integrated terminal, navigeer naar de escape_room_webapp directory en run de volgende commands:
    `npm install`
    `composer install --no-scripts`
    `php artisan serve`


## Werken in laravel
Het maken van de pagina's gebeurt in de views directory. Als je een nieuw bestand aanmaakt, dan krijgt deze de extensie `.blade.php`.
Elke bestand begint met:
`@extends('layouts.layout')`
`@section('content')`
en eindigt met:
`@endsection`.
Voor de blade pagina's is het *niet* nodig om met \<head\> en \<body\> tags te beginnen. In de layout.blade.php staat de blade syntax @yield('content').<br>
Deze zorgt ervoor dat alles wat tussen de @section en @endsection syntaxes staat in de layout.blade.php gezet wordt en deze pagina wordt vervolgens geladen in de browser.<br>

Voor de rest kan je tussen die twee syntaxes gewoon html code schrijven.<br>

In principe gebruik je bootstrap voor styling, maar mocht je css willen gebruiken, dan zet je het css bestand in de `public/css` directory.<br>

De .blade.php files moeten in de `resources/views` directory.<br>
Css files moeten in de `public/css` directory.<br>
Een css bestand moet een unieke naam hebben, bij voorkeur de naam van de pagina waar het voor is.<br>
De link naar het css bestand zet je in de `layout.blade.php` file. Deze kun je vinden in `resources/views/layouts`.<br>
Afbeeldingen moeten in de `public/images/<pagina_naam>` directory.<br>
Om naar een afbeelding te linken, type je het pad alsof je al in de public folder zit.<br>
Bijvoorbeeld: \<img src="/images/delete-later/kitties.jpg" alt="example image"><br>

Als laatste, voordat je pusht, check of je een `.gitignore` bestand hebt in de escape_room_webapp directory met de volgende inhoud:<br>
/.phpunit.cache<br>
/node_modules<br>
/public/build<br>
/public/hot<br>
/public/storage<br>
/storage/*.key<br>
/vendor<br>
.env<br>
.env.backup<br>
.env.production<br>
.phpunit.result.cache<br>
Homestead.json<br>
Homestead.yaml<br>
auth.json<br>
npm-debug.log<br>
yarn-error.log<br>
/.fleet<br>
/.idea<br>
/.vscode<br>
