<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSV</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet" />
</head>

<body>
    <div id="csv">
        @include('navigations.navbar')
        <main class="container-fluid d-flex">
            <div class="row">
                <div class="col card">
                    @include('navigations.sidebar')
                </div>
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </main>
        @include('navigations.footer')

    </div>
</body>
<script src="https://kit.fontawesome.com/3227ebb15b.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>