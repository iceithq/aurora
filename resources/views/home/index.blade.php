@extends('layouts.home')
@section('content')
    <style>
        .hero {
            background: url({{ asset('images/hero.png') }}) no-repeat center center;
            background-size: cover;
            text-align: center;
            padding: 110px 0;
        }

        .features,
        .testimonials,
        .pricing {
            padding: 60px 0;
        }
    </style>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-4">Streamline Your Clinic Operations with Qlinix</h1>
            <p class="lead">Transform your clinic's efficiency and patient care with Qlinix. Our comprehensive clinic
                management system is designed to simplify your administrative tasks, enhance patient experiences, and
                optimize your workflow.</p>
            <a href="#" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </section>

    @if ($info)
        <div class="container mt-3">
            <p class="alert alert-info">
                {{ $info }}
            </p>
        </div>
    @endif

    <style>
        .carousel-item img {
            max-height: 100px;
            /* Adjust the height as needed */
            width: auto;
            margin: auto;
        }
    </style>

    <div class="container mt-5">
        <!-- <h2>Registered Clinics</h2> -->
        <div id="logoCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.freepik.com/free-vector/creative-barbecue-logo-template_23-2149017951.jpg?t=st=1719506191~exp=1719509791~hmac=b8532e6f1c45eab91d51088d56e2234af3f5e8e55f4e9f65e3d732edfd964d71&w=740"
                        class="d-block mx-auto" alt="Clinic 1">
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-vector/creative-barbecue-logo-template_23-2149017951.jpg?t=st=1719506191~exp=1719509791~hmac=b8532e6f1c45eab91d51088d56e2234af3f5e8e55f4e9f65e3d732edfd964d71&w=740"
                        class="d-block mx-auto" alt="Clinic 2">
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-vector/creative-barbecue-logo-template_23-2149017951.jpg?t=st=1719506191~exp=1719509791~hmac=b8532e6f1c45eab91d51088d56e2234af3f5e8e55f4e9f65e3d732edfd964d71&w=740"
                        class="d-block mx-auto" alt="Clinic 3">
                </div>
                <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#logoCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#logoCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features text-center">
        <div class="container">
            <h2 class="mb-5">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <h1>⚕️</h1>
                    <h4>Patient Management System</h4>
                    <p>
                        A comprehensive patient management system is fundamental for any clinic management software. It
                        allows clinics to efficiently handle patient records, appointments, and medical history, improving
                        the overall patient experience and streamlining administrative
                    </p>
                </div>
                <div class="col-md-4">
                    <h1>☁️</h1>
                    <h4>Electronic Medical Records (EMR)</h4>
                    <p>
                        EMR is crucial for maintaining comprehensive and up-to-date patient health information. It enhances
                        the quality of care by providing accurate, complete, and timely patient data to healthcare
                        providers.
                    </p>
                </div>
                <div class="col-md-4">
                    <h1>🔐</h1>
                    <h4>Billing and Invoicing System</h4>
                    <p>
                        A robust billing and invoicing system streamlines the financial operations of a clinic, ensuring
                        accurate and efficient management of patient billing, payments, and insurance claims.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials bg-light text-center">
        <div class="container">
            <h2 class="mb-5">What Our Customers Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <footer class="blockquote-footer">Customer One</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <footer class="blockquote-footer">Customer Two</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <footer class="blockquote-footer">Customer Three</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing text-center">
        <div class="container">
            <h2 class="mb-5">Pricing Plans</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">🚀 Basic Plan</h5>
                            <h6 class="card-price">PHP4990.00<span class="period">/month</span></h6>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Patient Management System</li>
                                <li>Appointment Scheduling</li>
                                <li>Basic Electronic Medical Records (EMR)</li>
                                <li>Automated Appointment Reminders</li>
                                <li>Basic Reporting and Analytics</li>
                                <li>Email Support</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">🚀 Standard Plan</h5>
                            <h6 class="card-price">PHP6490.00<span class="period">/month</span></h6>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>All Basic Plan Features</li>
                                <li>Advanced EMR with Diagnostic Tool Integration</li>
                                <li>Billing and Invoicing System</li>
                                <li>Insurance Claims Management</li>
                                <li>Financial Reporting</li>
                                <li>Internal Messaging System</li>
                                <li>Priority Email and Phone Support</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">🚀 Premium</h5>
                            <h6 class="card-price">?<span class="period">/month</span></h6>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>All Professional Plan Features</li>
                                <li>Multi-Clinic Support</li>
                                <li>Customizable User Roles and Permissions</li>
                                <li>Advanced Analytics and Predictive Reports</li>
                                <li>Telemedicine Integration (Video Consultations)</li>
                                <li>Patient Portal Access</li>
                                <li>Mobile App Access for Staff and Patients</li>
                                <li>Dedicated Account Manager</li>
                                <li>24/7 Premium Support</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section bg-light mb-5 pb-5" id="contact">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-center">Contact Us</h2>
                    <form method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" class="form-control" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
