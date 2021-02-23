<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   
    <title>Read through typing</title>
</head>
<body>
    <div class="navbar">
        <img src="/assets/images/Logo.png">
        <div class="links">
            <a href="/">Home</a>
            <div id="cat" style="margin: 0%;width: fit-content;display: flex;justify-content: space-between;flex-wrap: wrap;">
                <a href="" class="categories_link" onclick="return false">Categories
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                </a>
                <div class="sub-menu">
                    <ul>
                        @foreach ($categories as $item)
                            <li><a href="/categories/{{$item->Id}}">{!! $item->Name !!}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <a href="/top10">Top 10</a> 
            <a href="/about">About</a>
        </div>
    </div>
    @yield('content')
    <footer>
        <div class="footer_left">
            <h6>Copyright &copy; {{date('Y')}} - <small><strong style="color: #660708">Read Through Typing</strong></small> -</h6>
        </div>
        <div class="footer_right">
            <img src="/assets/images/ic_fb.png">
            <img src="/assets/images/ic_twitter.png">
            <img src="/assets/images/ic_linkedin.png">
            <img src="/assets/images/ic_github.png">
        </div>
    </footer>
    <script src="/assets/js/app.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script> AOS.init(); </script>
    
</body>
</html>