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

    <h1>Benvenuto {{ $name }} {{ $surname }} !</h1>
    <div class="box">
        <div class="image">
            <img src="{{ $img }}" alt="user_photo">
        </div>
        <div class="info">
            <ul>
                <li>Nome: {{ $name }}</li>
                <li>Cognome: {{ $surname }}</li>
                <li>Email: {{ $email }}</li>
                <li>Password: {{ $password }}</li>
            </ul>
        </div>
    </div>

</body>

<style lang="scss" scoped>
    body {
        background-color: lightblue;
        text-align: center;

        h1 {
            margin: 30px auto;
        }

        .box {
            width: 100%;
            height: 400px;
            background-color: white;
            display: flex;
            justify-content: space-evenly;
            align-items: center;

            .image {
                width: 450px;
                height: 450px;
                border-radius: 50%;
                overflow: hidden;
                box-shadow: 0 0 10px black;

                img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: transform 0.3s ease-in-out;

                    &:hover {
                        transform: scale(1.1);
                    }
                }
            }

            .info {

                ul {
                    list-style: none;
                    padding: 0;
                    margin: 0;

                    li {
                        padding: 10px;
                        transition: background 0.3s ease-in-out;

                        &:hover {
                            background: linear-gradient(to right, #fff 0%, #ADD8E6 100%);
                            background-size: 100px 100%;
                            background-position: 0% 100%;
                            transition: background 0.3s ease-in-out;
                            cursor: pointer;
                        }

                        &:hover:hover {
                            background-position: 100% 100%;
                        }
                    }
                }
            }
        }
    }
</style>

</html>