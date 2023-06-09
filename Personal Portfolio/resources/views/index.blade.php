<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Portfolio Website</title>
</head>
<body>
    <!-- hero(judul besar nama project web) dan navbar -->
    <div class="hero">
        <nav>
            <h2 class="logo">Personal <span>Portfolio</span></h2>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#review">Review</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
            <a href="#" class="btn">Subscribe</a>
        </nav>
        <!-- untuk kalimat pembuka web -->
        <div class="content">
            <h4>Hello, My name is</h4>
            <h1>Alfaraby <span>Indra</span></h1>
            <h3>I'm a Programmer</h3>
            <div class="newsletter">
                <form action="">
                    <input type="email" name="email" id="mail" placeholder="Enter your Email">
                    <input type="submit" name="submit" value="Let's Start">
                </form>
            </div>
        </div>
    </div>
     <!-- section start -->
     <section class="about">
        <div class="main">
            <img src="img/alby.png" alt="image">
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Programmer & <span> Content Creator</span></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia, pariatur aspernatur. Tempora vel ipsam explicabo nobis minima
                    suscipit quas dignissimos consequuntur natus, ipsum, similique consectetur aliquid harum quam.
                    Ipsum, consectetur!</p>
                    <button type="button">Let's Talk</button>
            </div>
        </div>
    </section>
    <!-- section services -->
    <div class="service">
        <div class="title">
            <h2>My Services</h2>
        </div>
        <div class="box">
            <div class="card">
                <i class="fa-solid fa-globe"></i>
                <div class="pre">
                <h5>Web Developer</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, est?</p>
                <p style="text-align: center;">
                    <a href="#" class="button">Read More</a>
                </p>
            </div>
        </div>
            <div class="card">
                <i class="fa-solid fa-mobile"></i>
                <div class="pre">
                <h5>Mobile Developer</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, est?</p>
                <p style="text-align: center;">
                    <a href="#" class="button">Read More</a>
                </p>
            </div>
        </div>
            <div class="card">
                <i class="fa-solid fa-gamepad"></i>
                <div class="pre">
                <h5>Game Developer</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, est?</p>
                <p style="text-align: center;">
                    <a href="#" class="button">Read More</a>
                </p>
            </div>
        </div>
    </div>
    </div>
    <!-- contact section -->
    <div class="contact">
        <p>Let me get you a Beautiful Application or systems</p>
        <a href="" class="button-two">Hire Me</a>
    </div>

    <!-- footer section -->
    <footer>
        <p>Alfaraby Indra</p>
        <p>For more detail, please contact me</p>
        <div class="social">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <p class="end">Copyright By Alfaraby Indra</p>
    </footer>
</body>
</html>
