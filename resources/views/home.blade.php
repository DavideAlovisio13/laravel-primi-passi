<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <h1>Hello World</h1>
    <div class="form_user">
        <form action="/user" method="GET">
            <button type="submit">Press Here!</button>
        </form>
    </div>

</body>

<style lang="scss" scoped>
    body {
        background-color: lightblue;

        h1 {
            margin: 30px auto;
            text-align: center;
        }

        .form_user {
            width: 100%;
            display: flex;
            justify-content: center;
            
        }
    }
</style>

</html>