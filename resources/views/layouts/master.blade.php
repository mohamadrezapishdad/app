<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.heads')
</head>
<body>
<div id="app">
    @include('layouts.partials.fixed_sidebar_left')
    @include('layouts.partials.fixed_sidebar_right')
    @include('layouts.partials.header', ['page_title'=>$page_title])

    @yield('content')

    @include('layouts.partials.popup_update_header_photo')
    @include('layouts.partials.popup_choose_from_my_photo')
    @include('layouts.partials.back_to_top_button')
    @include('layouts.partials.popup_chat')
</div>

@include('layouts.partials.scripts')
</body>
</html>
