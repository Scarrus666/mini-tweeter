<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tweets - @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
    @yield('header')
    <header class="sticky-header">
            <div class="header-left">
                <a class="index" href="/tweets">MINI-TWITTER</a>
            </div>
            <div class="header-right">
                <a href="/tweets" class="myTweets">My Tweets</a>
                <a href="{{url('create')}}"><button class="createTweet">+ Create Tweet</button></a>
            </div>
        </div>
        </header>
    </div>

    @yield('content')
    <div class="maincontent">
    </div>
    
    @yield('footer')
    <footer class="footer">
            <p class="footer-left">Mini-Twitter built with Laravel</p>
            <p class="footer-right">© Alexandru Iordachel</p>
    </footer>
    
</body>
</html>


