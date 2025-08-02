<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitsubishi - Driving Innovation</title>
    <!-- Favicon for all devices -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="manifest" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="mask-icon" href="{{ asset('storage/image/LogoMitsubishi.png') }}" color="#0077c1">
    <meta name="msapplication-TileColor" content="#0077c1">
    <meta name="theme-color" href="#ffffff">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-red: #E51C24;
            --primary-black: #111111;
            --primary-silver: #C0C0C0;
            --primary-white: #FFFFFF;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
            background-color: var(--primary-white);
            color: var(--primary-black);
        }
        
        .navbar {
            background-color: var(--primary-black);
            padding: 15px 0;
            transition: all 0.3s;
        }
        
        .navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 10px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand img {
            height: 40px;
        }
        
        .nav-link {
            color: var(--primary-white) !important;
            margin: 0 10px;
            font-weight: 500;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--primary-red) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary-red);
            bottom: 0;
            left: 0;
            transition: width 0.3s;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('{{ asset('storage/image/logobesi.jpg') }}') no-repeat center center;
            background-size: cover;
            height: 100vh;
            color: var(--primary-white);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            z-index: 2;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        
        .btn-primary-custom {
            background-color: var(--primary-red);
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.3s;
        }
        
        .btn-primary-custom:hover {
            background-color: #c3121a;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .feature-section {
            padding: 100px 0;
            background-color: var(--primary-white);
        }
        
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: var(--primary-black);
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--primary-red);
            bottom: -10px;
            left: 0;
        }
        
        .feature-card {
            background-color: var(--primary-white);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s;
            border: 1px solid rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .feature-icon {
            font-size: 40px;
            color: var(--primary-red);
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-black);
        }
        
        .model-section {
            padding: 100px 0;
            background-color: #f8f9fa;
        }
        
        .model-card {
            background-color: var(--primary-white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            margin-bottom: 30px;
        }
        
        .model-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .model-img {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }
        
        .model-body {
            padding: 20px;
        }
        
        .model-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-black);
            margin-bottom: 10px;
        }
        
        .model-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-red);
            margin-bottom: 15px;
        }
        
        .testimonial-section {
            padding: 100px 0;
            background-color: var(--primary-black);
            color: var(--primary-white);
        }
        
        .testimonial-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s;
        }
        
        .testimonial-card:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--primary-silver);
        }
        
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), 
                        url('{{ asset('storage/image/lambang.jpg') }}') no-repeat center center;
            background-size: cover;
            color: var(--primary-white);
        }
        
        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
        }
        
        .footer {
            background-color: var(--primary-black);
            color: var(--primary-silver);
            padding: 50px 0 20px;
        }
        
        .footer-logo {
            height: 50px;
            margin-bottom: 20px;
        }
        
        .footer-links h5 {
            color: var(--primary-white);
            margin-bottom: 20px;
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        .footer-links a {
            color: var(--primary-silver);
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--primary-white);
            transform: translateX(5px);
        }
        
        .social-icons a {
            color: var(--primary-white);
            background-color: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-red);
            transform: translateY(-5px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
        }
        
        /* Animations */
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .animate-slide-up {
            animation: slideUp 0.8s ease-in-out;
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(50px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-slide-right {
            animation: slideRight 0.8s ease-in-out;
        }
        
        @keyframes slideRight {
            from { 
                opacity: 0;
                transform: translateX(-50px);
            }
            to { 
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .feature-card {
                margin-bottom: 20px;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.3rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .feature-section, 
            .model-section, 
            .testimonial-section, 
            .cta-section {
                padding: 70px 0;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .btn-primary-custom {
                padding: 10px 25px;
            }
            
            .section-title {
                font-size: 1.6rem;
            }
            
            .footer-links {
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" >
            <span class="navbar-text" style="font-size: 1.5rem; color: var(--primary-white);">
                Mitsubishi Motors ©
            </span>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#models">Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-content animate__animated animate__fadeInLeft">
                <h1 class="hero-title">DRIVE YOUR PASSION</h1>
                <p class="hero-subtitle">Experience the perfect blend of power, performance and sophistication with the new Mitsubishi lineup.</p>
                <a href="{{ route('product.index') }}" class="btn btn-primary-custom animate-pulse">Explore Models</a>
            </div>
        </div>
        <div class="car-animation">
            <img src="{{ asset('storage/image/rallylancer.jpg') }}" alt="Mitsubishi Lancer" class="position-absolute animate__animated animate__slideInRight" style="bottom: 10%; right: 5%; max-width: 400px;">
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="feature-section">
        <div class="container">
            <h2 class="section-title text-center">Why Choose Mitsubishi</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="feature-title">Safety First</h3>
                        <p>Our vehicles come equipped with the latest safety technologies to protect you and your loved ones on every journey.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3 class="feature-title">Advanced Technology</h3>
                        <p>Experience cutting-edge automotive technology that enhances performance, efficiency, and driving pleasure.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3 class="feature-title">Eco-Friendly</h3>
                        <p>Our commitment to sustainability means cleaner, more efficient vehicles without compromising performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Model Showcase Section -->
    <section id="models" class="model-section">
        <div class="container">
            <h2 class="section-title text-center">Our Models</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="model-card animate__animated" id="model1">
                        <img src="{{ asset('storage/image/lancer.jpg') }}" class="model-img" alt="Mitsubishi Outlander in silver metallic paint with angular LED headlights">
                        <div class="model-body">
                            <h3 class="model-title">Lancer</h3>
                            <p class="model-price">Starting at Rp.12.000.000</p>
                            <p>The ideal fusion of athletic styling, fuel efficiency, and everyday practicality for the modern driver.</p>
                            <a href="{{ route('product.index') }}" class="btn btn-outline-danger mt-3">Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="model-card animate__animated" id="model2">
                        <img src="{{ asset('storage/image/xpander.jpg') }}" class="model-img" alt="Mitsubishi Eclipse Cross in black paint with sleek coupe-like roofline">
                        <div class="model-body">
                            <h3 class="model-title">Xpander</h3>
                            <p class="model-price">Starting at Rp.12.000.000</p>
                            <p>The perfect harmony of spacious comfort, versatile functionality, and modern design in a premium MPV.</p>
                            <a href="{{ route('product.index') }}" class="btn btn-outline-danger mt-3">Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="model-card animate__animated" id="model3">
                        <img src="{{ asset('storage/image/pajero.jpg') }}" class="model-img" alt="Mitsubishi Pajero Sport in white color with muscular off-road stance">
                        <div class="model-body">
                            <h3 class="model-title">Pajero Sport</h3>
                            <p class="model-price">Starting at $42,990</p>
                            <p>Built for adventure with rugged capability and refined comfort for any terrain.</p>
                            <a href="{{ route('product.index') }}" class="btn btn-outline-danger mt-3">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonials" class="testimonial-section">
        <div class="container">
            <h2 class="section-title text-center" style="color: var(--primary-white);">What Our Customers Say</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"My Mitsubishi has been incredibly reliable with excellent fuel economy. The dealership experience was outstanding too!"</p>
                        <p class="testimonial-author">- John D., Outlander Owner</p>
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"The Pajero Sport exceeded all my expectations for off-road capability while remaining comfortable for city driving."</p>
                        <p class="testimonial-author">- Sarah M., Pajero Owner</p>
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"After owning several SUVs, the Eclipse Cross stands out for its perfect blend of style, performance and value."</p>
                        <p class="testimonial-author">- Michael T., Eclipse Cross Owner</p>
                        <div class="rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container text-center">
            <h2 class="cta-title animate__animated animate__pulse">Ready for a Test Drive?</h2>
            <p class="cta-text">Experience the thrill of driving a Mitsubishi firsthand. Schedule your test drive today and discover why we're different.</p>
            <button class="btn btn-primary-custom btn-lg" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <img src="{{ asset('storage/image/Mitsu.png') }}" alt="Mitsubishi Motors Logo" class="footer-logo">
                    <p>Driving innovation for over a century, Mitsubishi Motors continues to push boundaries in automotive technology and design.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-5 mb-md-0">
                    <div class="footer-links">
                        <h5>Quick Links</h5>
                        <a href="#home">Home</a>
                        <a href="#features">Features</a>
                        <a href="#models">Models</a>
                        <a href="#testimonials">Reviews</a>
                        <a href="#contact">Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
                    <div class="footer-links">
                        <h5>Models</h5>
                        <a href="#">Outlander</a>
                        <a href="#">Eclipse Cross</a>
                        <a href="#">Pajero Sport</a>
                        <a href="#">ASX</a>
                        <a href="#">Triton</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-links">
                        <h5>Contact Us</h5>
                        <p><i class="fas fa-map-marker-alt me-2"></i> 123 Mitsubishi Way, Tokyo, Japan</p>
                        <p><i class="fas fa-phone me-2"></i> +1 800 MITSUBI</p>
                        <p><i class="fas fa-envelope me-2"></i> info@mitsubishi-motors.com</p>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p>&copy; 2023 Mitsubishi Motors. All rights reserved. </p>
                <p>created by: <a href="https://www.linkedin.com/in/fatsyah-regiyanto-799a15228/" target="_blank" rel="noopener noreferrer">Fatsyah Regiyanto STIKOMCKI</a>  </p>
            </div>
        </div>
    </footer>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="contactModalLabel">Schedule a Test Drive</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="model" class="form-label">Model Interested In</label>
                            <select class="form-select" id="model">
                                <option selected>Select a model</option>
                                <option>Outlander</option>
                                <option>Eclipse Cross</option>
                                <option>Pajero Sport</option>
                                <option>ASX</option>
                                <option>Triton</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Any Special Requests</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Submit Request</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
            
            // Show scroll to top button when scrolling down
            if(window.scrollY > 300) {
                scrollToTopBtn.style.display = 'block';
            } else {
                scrollToTopBtn.style.display = 'none';
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Model card animations on scroll
        window.addEventListener('scroll', function() {
            const modelCards = [document.getElementById('model1'), 
                              document.getElementById('model2'), 
                              document.getElementById('model3')];
            
            modelCards.forEach((card, index) => {
                const cardPosition = card.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if(cardPosition < screenPosition) {
                    card.classList.add('animate__fadeInUp');
                    card.style.animationDelay = `${index * 0.2}s`;
                }
            });
        });
        
        // Initialize animations on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Trigger animations for elements already in view
            const animateOnLoad = document.querySelectorAll('.animate__animated');
            
            animateOnLoad.forEach(element => {
                element.style.opacity = '1';
            });
            
            // Car animation in hero section
            setTimeout(function() {
                const carImg = document.querySelector('.hero-section .car-animation img');
                carImg.classList.add('animate__bounce');
            }, 1000);
            
            // Pulse animation for CTA button
            setInterval(function() {
                const ctaBtn = document.querySelector('.cta-section .btn-primary-custom');
                ctaBtn.classList.toggle('animate__pulse');
            }, 2000);
        });
        
        // Modal form submission
        document.querySelector('#contactModal .btn-danger').addEventListener('click', function() {
            alert('Thank you for your interest! A representative will contact you shortly to schedule your test drive.');
            const modal = bootstrap.Modal.getInstance(document.getElementById('contactModal'));
            modal.hide();
        });
    </script>
</body>
</html>
