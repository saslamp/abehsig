<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Abeh Three bedroom</title>
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet">
        <!-- Custom Style -->
        <link rel="stylesheet" href="./assets/css/main.css">
        <link rel="stylesheet" href="./assets/css/details.css">
        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid">
                    <a class="navbar-brand text-uppercase" href="/">
                        abeh signature
                        <br>
                        apartments
                    </a>
                    <a href="#" class="close"></a>
                    <div class="d-none d-sm-none d-lg-block brand-icon-section mx-auto order-0 w-75 d-flex justify-content-end">
                        <div class="highlight-main brand-icon d-flex align-items-center justify-content-center">
                            <div class="dropdown">
                                <i
                                    class="fas fa-th dropdown-toggle"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-mdb-toggle="dropdown"
                                    aria-expanded="false"
                                    onclick="closeNav()"
                                ></i>
                                <ul class="dropdown-menu highlight-main" aria-labelledby="dropdownMenuButton">
                                    <ul class="dropdown-list">
                                        <li>
                                            <a class="btn shadow-none menu-header">On This Property</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./one.html">One Bedroom Apartment</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="./two.html">Two Bedroom Apartment</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item active" href="./three.html">Three Bedroom Apartment</a>
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarExample01"
                        aria-controls="navbarExample01"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarExample01">
                        <!-- <div class="pt-1"> -->
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 droplinks">
                            <div class="d-lg-none">
                                <li class="nav-item">
                                    <a class="nav-link" href="./one.html">One Bedroom Apartment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./two.html">Two Bedroom Apartment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="./three.html">Three Bedroom Apartment</a>
                                </li>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-outline-main" href="#contact-form">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
            <section class="container" id="header-text">
                <h1>
                    Three
                    <br>
                    Bedroom Apartment
                </h1>
                <div id="header-right-text">
                    <a href="#contact" class="mt-4 btn btn-light btn-sm">Schedule Booking</a>
                </div>
            </section>
        </header>
        <main>
            <section id="stats" class="container text-center my-3 py-3">
                <div class="row stats">
                    <div class="col-4">
                        <i class="fas fa-th"></i>
                        <h6 class="stats-number my-0">472</h6>
                        <p class="mt-0 uppercase">Square Meters</p>
                    </div>
                    <div class="col-4">
                        <i class="fas fa-car-side"></i>
                        <h6 class="stats-number my-0">10</h6>
                        <p class="mt-0 uppercase">Car Parkings</p>
                    </div>
                    <div class="col-4">
                        <i class="fas fa-building"></i>
                        <h6 class="stats-number my-0">2</h6>
                        <p class="mt-0 uppercase">Floors</p>
                    </div>
                </div>
            </section>
            <section id="property-desc" class="mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container" id="property-desc-text">
                            <h5 class="text-uppercase">property description</h5>
                            <p>
                                Reasonably sized and tastefully decorated and furnished 3-bedroom apartment with all rooms ensuite.
                            </p>
                            <p>
                                It has one living room (with a dining area) and a kitchen.<br/>
                                <em><small>*All rooms have air-conditioning</small></em>
                            </p>
                            <p class="m-0">Location: Wuse 2, Abuja</p>
                            <p class="m-0">Electricity/Water: Yes</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="property-desc-img">
                            <img src="./assets/images/AbehSignature/3 bed/IMG_3169.jpg" class="img-fluid ripple" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section id="amenities">
                <h4 class="main-clr-text text-center text-uppercase mt-3 mb-1">Amenities</h4>
                <hr class="line">
                <div id="amenities-images">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="text-center">Gym</h6>
                            <img src="./assets/images/AbehSignature/IMG_1919.jpg" class="img-fluid rounded hover-shadow" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="text-center">Swimming Pool</h6>
                            <img src="./assets/images/AbehSignature/IMG_1933.jpg" class="img-fluid rounded hover-shadow" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section id="gallery">
                <div class="container">
                    <h4 class="my-5">Gallery</h4>
                </div>
                <div class="container gallery">
                    <div class="row">
                      <div class="col-md-6">
                        <img id="main" src="./assets/images/AbehSignature/3 bed/IMG_3133.jpg" class="img-fluid hover-shadow" alt="">
                      </div>
                      <div class="col-md-6">
                        <p><em>Scroll down for more images. Click the image(s) to preview</em></p>
                        <div id="images">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3133.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3112.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3114.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3115.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3119.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3122.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3123.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3129.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3131.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3133.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3134.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3138.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3143.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3146.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3153.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3161.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3162.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3166.jpg" class="img-fluid" alt="">
                          <img onclick="change(this.src)" src="./assets/images/AbehSignature/3 bed/IMG_3169.jpg" class="img-fluid" alt="">
                        </div>
                      </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="container">
                <div class="row">
                    <div class="col-md-6 contact">
                        <h4>Contact Us</h4>
                        <p>
                            Feel Free to Contact Us
                            <br>
                            if You have Any Questions
                        </p>
                        <ul class="list-group">
                            <li>
                                Abeh Signature Apartments,
                                <br>
                                1 Mekong Close.<br/>
                                Maitama,<br/>
                                Abuja.
                            </li>
                            <li class="mt-2">
                                <strong>Phone:</strong>
                                0901 0444 444 | 0808 4000 000
                            </li>
                            <li>
                                <strong>Email:</strong>
                                info@abehsinatureapartments.com
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <form id="contact-form" method="POST" action="contact.php">
                            <!-- Name input -->
                            <div class="form-group mb-4">
                                <input
                                    type="text"
                                    id="name"
                                    class="form-control"
                                    placeholder="Name"
                                >
                                <!-- <label class="form-label" for="name">Name</label> -->
                            </div>
                            <!-- Email input -->
                            <div class="form-group mb-4">
                                <input
                                    type="email"
                                    id="email"
                                    class="form-control"
                                    placeholder="Email"
                                >
                                <!-- <label class="form-label" for="email">Email</label> -->
                            </div>
                            <!-- Message input -->
                            <div class="form-group mb-4">
                                <textarea
                                    class="form-control"
                                    id="message"
                                    rows="4"
                                    placeholder="Message"
                                ></textarea>
                                <!-- <label class="form-label" for="message">Message</label> -->
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn w-50 shadow-none btn-main btn-block mb-4">Send Message</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <footer class="main-clr-bg mt-5 py-3">
            <div class="text-center">
                <h5 class="text-white">&copy; 2021. Abeh Signature</h5>
            </div>
        </footer>
        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"></script>
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="./assets/js/main.js"></script>
    </body>
</html>