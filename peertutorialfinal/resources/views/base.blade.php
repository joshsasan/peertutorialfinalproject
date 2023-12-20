
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Mucic Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        /* .mu h1{
            display: inline;
            color: white;
           
            margin-left: 32%;
            margin-top: 10%;
            font-size: 80px;
            font-family: Arial, sans-serif;
            
        }
        .mu h2{
            color: white;
            margin-left: 32.5%;
            padding-top: 10px;
            font-family: Arial, sans-serif;
        } */
        body{
            
            /* background-image: url("https://images5.alphacoders.com/349/349108.jpg"); */
            background-image: url("https://c4.wallpaperflare.com/wallpaper/125/307/820/music-love-heart-phone-wallpaper-preview.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 150vh;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

#nav {
    list-style: none;
    padding: 20px;
    text-align: center;
}

#nav li {
    display: inline-block;
    margin-right: 20px; 
}

#nav a {
    text-decoration: none;
    padding: 30px;
    color: white;
    padding-inline-end: 90px;
    margin-left: 34%;
}

#nav a.active {
    /* background-color: #333; */
    color: #fff;
}
a:hover{
    background-color: rgb(255,250,250, 0.5);
    transition-duration: 0.5s;  
    /* transition:cubic-bezier(1, 0, 0, 1); */
    border-radius: 10px;
}

    </style>
</head>
<body>
    


<div>

     <ul id="nav">
       <!-- <ul class="nav justify-content-end float-center nav-pills"> -->

           <li><a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a></li>
           <li> <a class="nav-link {{Route::is('guitar') ? 'active' : ''}}" href="{{url('/guitar')}}">Guitars</a> </li>
           <li><a class="nav-link {{Route::is('percussion') ? 'active' : ''}}" href="{{url('/percussion')}}">Percussions</a></li>
           <li><a class="nav-link {{Route::is('keyboard') ? 'active' : ''}}"  href="{{url('/keyboard')}}">Keyboards</a></li>
           

        </ul>

</div>
    <!-- <div class="mu">
    <h1>Music Center</h1>
    <h2>Choose what's the best for you</h2>
</div>   -->
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>

