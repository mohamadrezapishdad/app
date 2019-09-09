<title>{{ config('app.name', 'App') }}</title>

<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

<!-- Bootstrap CSS -->

<link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-reboot.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-grid.css')}}">

<!-- Main Styles CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/fonts.min.css')}}">


<!-- Main Font -->
<script src="{{asset('js/webfontloader.min.js')}}"></script>
<script>
    WebFont.load({
        google: {
            families: ['Roboto:300,400,500,700:latin']
        }
    });
</script>
