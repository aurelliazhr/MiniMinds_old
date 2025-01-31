<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* body {
            background-image: url(assets/Rectangle\ 58.png);
        } */

        * {
            margin: 0;
            padding: 0;
        }

        .container {
            display: grid;
            place-items: center;
            min-height: 100vh;
        }

        .logo a {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-decoration: none;
            color: white;
        }

        .item {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: aqua;
            color: black;
            text-align: center;
            display: flex;
            justify-content: center;
            text-decoration: none;
            align-items: center;
            margin-right: 5px;
            /* Jarak horizontal antara item */
            margin-top: 100px;
            /* Jarak atas antara item */
            margin-bottom: 10px;
            /* Jarak bawah antara item */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
        }

        .item:nth-child(2) {
            position: relative;
            right: 50px;
            margin-right: 0;
            /* Menghapus margin kanan untuk item kedua */
        }


        nav {
            display: flex;
            background-color: rgb(106, 21, 175);
            justify-content: space-around;
            width: 100%;
            padding: 20px 0;
            color: white;
        }

        nav.logo {
            font-family: "Schoolbell", cursive;
        }

        main a {
            text-decoration: none;
        }

        nav ul {
            display: flex;
            list-style: none;
            width: 40%;
            justify-content: space-between;
        }

        nav ul li a {
            color: rgb(195, 142, 238);
            text-decoration: none;
            font-size: 0.8em;
        }

        nav ul li a:hover {
            color: white;
        }

        /* HAMBURGER MENU */
        .menu-toggle {
            display: flex;
            flex-direction: column;
            height: 20px;
            justify-content: space-between;
        }

        .menu-toggle span {
            display: block;
            width: 28px;
            height: 3px;
            background-color: white;
            border-radius: 3px;
        }

        /* responsiv */
        @media screen and (max-width: 768px) {
            nav ul {
                width: 50%;
            }
        }

        @media screen and (max-width: 576px) {
            nav ul {
                display: none;
            }
        }

        @media screen and(min-width: 300px) {
            .card {
                width: max-content;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <a href="{{route('rekamH1')}}" class="item">1</a>
            <a href="{{route('rekamH2')}}" class="item">2</a>
            <a href="{{route('rekamH3')}}" class="item">3</a>
        </div>
    </div>

</body>

</html>