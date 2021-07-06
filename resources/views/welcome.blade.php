<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>


    <section>
        @include('partials.section1')
    </section>
    <hr>
    <section>
        @include('partials.section2')
    </section>
    <hr>
    <section>
        @include('partials.section3')
    </section>
    <hr>
    <section>
        @include('partials.section4')
    </section>
    <hr>
    <section>
        @include('partials.section5')
    </section>
    <hr>
    <section>
        @include('partials.section6')
    </section>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>