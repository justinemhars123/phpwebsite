<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('CSS/web.css')}}">
    <title>Mountain Template</title>  
</head>  
<body>  
<header>  

    <div class="logo">Your Logo</div>  
             <nav class="navbar">  
        <ul>  
            <li><a href="#">Home</a></li>  
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="#">Services</a></li>  
            <li><a href="{{ url('/contact') }}">Contact</a></li>  
            <li><a href="{{ url('/login') }}" class="btn-action">SIGN IN</a></li>  
        </ul>  
    </nav>  
</header>
    <<main>  
    <div class="hero">  
        <img src="images/background.gif" alt="Description of image" class="hero-image">  
        <h1>Create Your Website</h1>  
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>  
        <div class="buttons">  
            <a href="#" class="btn">Services</a>  
            <a href="#" class="btn btn-primary">About Us</a>  
        </div>  
    </div>  
</main>  
    <footer>  
   
    </footer>  
</body>  
</html>