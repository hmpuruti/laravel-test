@extends('layout.app')

@section('title', 'User Card ' . $user->name)

@section('content')

    <div id="wrapper">
        <section id="main">
            <header>
                <span class="avatar"><img src="{{asset('images/users/'.$user->id.'.jpg')}}" alt="avatar"/></span>
                <h1>{{$user->name}}</h1>
                <p>{{nl2br($user->comments)}}</p>
            </header>
        </section>
        <footer id="footer">
            <ul class="copyright">
                <li>&copy; Pictureworks</li>
            </ul>
        </footer>

    </div>
    <script>
        if ('addEventListener' in window) {
            window.addEventListener('load', function () {
                document.body.className = document.body.className.replace(/\bis-preload\b/, '');
            });
            document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
        }
    </script>
@endsection
