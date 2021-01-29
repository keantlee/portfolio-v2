{{-- TITLE PAGE --}}
<title>@yield("My Portfolio")</title>


{{-- META TAGS --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- FAVICON --}}

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

{{-- CUSTOMIZE CSS --}}
<link rel="stylesheet" href="{{asset('/css/index.css')}}">
<link rel="stylesheet" href="{{asset('/css/navbar.css')}}">
<link rel="stylesheet" href="{{asset('/css/top_banner.css')}}">
<link rel="stylesheet" href="{{asset('/css/about.css')}}">
<link rel="stylesheet" href="{{asset('/css/skill.css')}}">
<link rel="stylesheet" href="{{asset('/css/projects.css')}}">
<link rel="stylesheet" href="{{asset('/css/contact.css')}}">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

{{-- CUSTOMIZE JS --}}
{{-- <script src="{{asset('/js/sidebar.js')}}"></script> --}}