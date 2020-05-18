<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Profile</title>
    </head>
    <body>
        Hello {{$user['name']}}
        {{$user}}
    </body>
</html>