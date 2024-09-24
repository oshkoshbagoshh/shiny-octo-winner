<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title', 'One Page Application')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav>
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<section id="about">
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to our one-page application!</p>
        <a href="#" class="button">Learn More</a>
    </div>
</section>

<section id="services">
    <div class="container">
        <h2>Our Services</h2>
        <p>We offer a wide range of services to meet your needs.</p>
    </div>
</section>

<section id="faq">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to common questions here.</p>
    </div>
</section>

<section id="testimonials">
    <div class="container">
        <h2>Testimonials</h2>
        <p>See what our clients have to say about us.</p>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Get in touch with us for more information.</p>
        <a href="#" class="button">Contact Now</a>
    </div>
</section>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>
</html>
