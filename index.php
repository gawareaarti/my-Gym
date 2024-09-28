<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AARU Fitness Club</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">AARU Fitness Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#admission">Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fees">Fees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section d-flex align-items-center justify-content-center">
        <div class="text-center">
            <h1 class="text-white display-3">Welcome to AARU Fitness Club</h1>
            <p class="text-white lead">Your journey to a healthier lifestyle starts here!</p>
            <a href="#admission" class="btn btn-lg btn-primary mt-4">Join Now</a>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="about-us-area spad-2" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span></span>
                        <h2 class="b p-4">Who We Are</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-text">
                        <p class="t-text">Welcome to Aaru Fitness, your ultimate fitness destination! We are committed to helping you achieve your fitness goals in a motivating and supportive environment. Whether you're a beginner or a fitness enthusiast, our state-of-the-art facilities and certified trainers are here to guide you every step of the way.
                        </p>
                        <div class="about-features">
                            <div class="about-features-item">
                                <div class="about-feature-img">
                                    <img src="img/check.png" alt="">
                                </div>
                                <div class="about-feature-text">
                                    <h4>We have the best Gym Trainers</h4>
                                    <p>Experienced and certified personal trainers available for one-on-one guidance.
                                       Specialized coaches for weight loss, bodybuilding, strength training, and flexibility.
                                          </p>
                                </div>
                            </div>
                            <div class="about-features-item">
                                <div class="about-feature-img">
                                    <img src="img/check.png" alt="">
                                </div>
                                <div class="about-feature-text">
                                    <h4>The best fitness facilities</h4>
                                    <p>Tailored workout plans based on individual fitness goals.
                                         Custom nutrition advice to complement your training.
                                           </p>
                                </div>
                                <div class="about-feature-img">
                                    <img src="img/check.png" alt="">
                                </div>
                                <div class="about-feature-text">
                                    <h4>The Group Classes</h4>
                                    <p>A variety of fitness classes, including HIIT, Pilates, dance, and yoga.
                                          Classes suited for beginners to advanced fitness levels. </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 p-2">
                    <img class="about-img" src="img/about-us.jpg" alt="" >
                </div>
            </div>
        </div>
    </section>
    <!-- Admission Form -->
    <section id="admission" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Admission Form</h2>
            <form action="submit_form.php" method="POST" class="row g-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="first_name" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="last_name" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="col-md-6">
                    <label for="admissionDate" class="form-label">Admission Date</label>
                    <input type="date" class="form-control" id="admissionDate" name="admission_date" required>
                </div>
                <div class="col-md-6">
                    <label for="package" class="form-label">Package</label>
                    <select class="form-select" id="package" name="package" required>
                        <option value="" selected disabled>Choose...</option>
                        <option value="500">Monthly - 500</option>
                        <option value="1200">Quarterly - 1200</option>
                        <option value="5000">Yearly - 5000</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="paymentMethod" class="form-label">Payment Method</label>
                    <select class="form-select" id="paymentMethod" name="payment_method" required>
                        <option value="" selected disabled>Choose...</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank_transfer">Bank Transfer</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary w-100">Submit Admission</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Fee Structure -->
    <section id="fees" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Fee Structure</h2>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Package</th>
                        <th>Duration</th>
                        <th>Fee</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monthly</td>
                        <td>1 Month</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Quarterly</td>
                        <td>3 Months</td>
                        <td>1200</td>
                    </tr>
                    <tr>
                        <td>Yearly</td>
                        <td>12 Months</td>
                        <td>5000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Our Gym Gallery</h2>
            <div class="row ">
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="img/gym1.jpg" class="img-fluid rounded h-100" alt="Gym Image 1" >
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="img/gym2.jpg" class="img-fluid rounded h-100" alt="Gym Image 2"  >
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="img/gym3.jpg" class="img-fluid rounded h-100" alt="Gym Image 3"  >
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <p class="text-center lead">For any inquiries, feel free to contact us at:</p>
            <ul class="list-unstyled text-center">
                <li><strong>Phone:</strong> +91 9076352726</li>
                <li><strong>Email:</strong> info@aarufitnessclub.com</li>
                <li><strong>Address:</strong>karve nagar,pune </li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 AARU Fitness Club. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
    /* Background animations */
.hero-section {
    background: url('../img/gym-bg.jpg') no-repeat center center/cover;
    height: 100vh;
    animation: fadeIn 3s ease-in-out;
}

@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

h1, h2, p {
    font-family: 'Poppins', sans-serif;
}

.navbar {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.footer {
    background-color: #333;
    padding: 20px;
}

.footer p {
    margin: 0;
}

</style>