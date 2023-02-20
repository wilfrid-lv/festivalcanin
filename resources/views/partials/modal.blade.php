

{{--Style modal login--}}

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

{{--Include the modal login and register--}}

@include('partials.login')
@include('partials.register')

{{--Script modal login--}}
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
