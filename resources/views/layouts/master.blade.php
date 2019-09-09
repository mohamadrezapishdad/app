<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.heads')
</head>
<body class="page-has-left-panels page-has-right-panels">
<div id="app">
    @include('layouts.partials.loader')
    @include('events.create')


    @include('layouts.partials.fixed_sidebar_left')
    @include('layouts.partials.fixed_sidebar_right')
    @include('layouts.partials.header', ['page_title'=>($page_title ?? config('app.name')) , 'head_space'=>($head_space ?? '')])

    @yield('content')

    @include('layouts.partials.popup_update_header_photo')
    @include('layouts.partials.popup_choose_from_my_photo')
    @include('layouts.partials.back_to_top_button')
    @include('layouts.partials.popup_chat')
</div>

@include('layouts.partials.scripts')
</body>
</html>
