<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customers Front</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="content" style="padding-top:20px;">
                <div><b style="font-weight:bold;">id</b> {{ $customer->id }}</div>
                <div><b style="font-weight:bold;">First Name</b> {{ $customer->first_name }}</div>
                <div><b style="font-weight:bold;">Last Name</b> {{ $customer->last_name }}</div>
                <div><b style="font-weight:bold;">Title</b> {{ $customer->title }}</div>
                <div><b style="font-weight:bold;">E-Mail</b> {{ $customer->email }}</div>
                <div><b style="font-weight:bold;">Gender</b> {{ $customer->gender }}</div>
                <div><b style="font-weight:bold;">Company</b> {{ $customer->company }}</div>
                <div><b style="font-weight:bold;">City</b> {{ $customer->city }}</div>
                <div><b style="font-weight:bold;">Latitude</b> {{ $customer->latitude }}</div>
                <div><b style="font-weight:bold;">Longitude</b> {{ $customer->longitude }}</div>
                <br>
                <div><button onclick="window.location='{{ url("/") }}'">Back</button></div>
            </div>
        </div>
    </body>
</html>
