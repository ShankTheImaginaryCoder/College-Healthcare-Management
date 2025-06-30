<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Document</title>
</head>

<body class="transparent-bg">
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i class="ri-hospital-fill"></i>
                <span>HealthCare</span>
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <div><a href="#home" class="nav__link">Home</a></div>

                    </li>
                    <li>
                        <div><a href="#about" class="nav__link">About Us</a>
                        </div>
                    </li>
                    <li>
                        <div class="nav__services"><a href="form.php" class="nav__link" target="_blank">Make an Appointment</a>
                        </div>
                    <li>
                        <div><a href="login/login.php" class="nav__link">Staff Login</a></div>
                    </li>
                    <!-- <li>
                        <div><a href="form.php" class="nav__link">Get an Appointment</a></div>
                    </li> -->


                    </li>
                    <li>
                        <div><a href="#contact" class="nav__link">Contact Us</a></div>
                        
                    </li>

                </ul>
            </div>

            <div class="nav__close" id="nav-close">
                <i class="ri-close-circle-fill"></i>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-apps-line"></i>
            </div>
        </nav>
    </header>
    <main class="main transparent-bg1">
        <section class="home section " id="home">
            <div class="home__container container grid">
                <div class="home__content1 flex">
                    <div class="home__data reveal">
                        <h1 class="home__title">
                            Health
                            Is
                            Wealth
                        </h1>
                        <div class="home__description">
                            <p>
                            <b>Welcome to HealthCare</b>, your trusted healthcare partner within the campus. Our mission is to deliver high-quality, accessible medical care to every student, faculty member, and staff at <b>NIT Delhi </b>.</p>
                            <br><br>
                            <p> With a focus on holistic well-being, we offer a range of healthcare services, including general consultations, preventive care, and specialized treatments. Whether you’re feeling under the weather or just need a quick check-up, we’re here to support your health journey.
                            </p>
                            <br><br>
                            <p>
                                <b>HealthCare</b> aims at providing the services with which people can manage their
                                appointment,prescriptions and see the list of required/necessary medicines.
                                This increases the ease with which people can utilise the health facilities.
                            </p>
                        </div>
                        <div class="home__buttons">
                            <a href="#about" class="button">About HealthCare</a>
                        </div>
                    </div>
                    <div class="home__images reveal"><img src="image3.jpg" alt="image" class="home_img-1"></div>
                </div>
                <div class="home__info flex reveal">
                    <div class="home_card">

                        <h3 class="home__info-title"><i class="ri-arrow-right-wide-fill"></i>Appointments

                        </h3>
                        <p class="home__info-description">Manage and see various appointments</p>
                    </div>
                    <div class="home_card">

                        <h3 class="home__info-title"><i class="ri-arrow-right-wide-fill"></i>Store

                        </h3>
                        <p class="home__info-description">Look at the available medicines</p>
                    </div>
                    <div class="home_card">
                        <h3 class="home__info-title"><i class="ri-arrow-right-wide-fill"></i>Prescriptions

                        </h3>
                        <p class="home__info-description">Review the prescriptions for various symptoms</p>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <section class="about section " id="about">
            <div class="about__content1 flex">
                <div class="about__images reveal"><img src="image1.webp" alt="image" class="home_img-1"></div>
                <div class="about__data reveal">
                    <h1 class="about__title">
                        About HealthCare
                    </h1>
                    <div class="about__description">
                        <p>
                        At <b>HealthCare</b>, we believe in fostering a culture of care and wellness. Created  to serve the healthcare needs of <b>NIT Delhi</b>, our clinic is a medical facility dedicated to improving the ease in ensuring the health and well-being of the entire campus community.
                        </p>
                        <br><br>
                        <p>
                        Our commitment is to create a safe and supportive environment where you can feel confident about your health. At <b>HealthCare</b>, your well-being is our priority. Together, let’s make good health a top priority.
                        </p>
                        <br><br>
                        <p>
                        Stay informed with our rich collection of healthcare knowledge and tips, tailored to meet the unique needs of our vibrant campus community.
                        </p>
                    </div>
                    <div class="about__buttons">
                        <a href="" target="_blank" class="button">Know More</a>
                    </div>
                </div>

            </div>

        </section>
        <section class="services section " id="services">
            <h1 class="services__title reveal ">SERVICES</h1>
            <div class="services__info flex reveal">
                <img src="appointment1.webp" alt="appointments">
                <div class="services__description ">
                    <h2><a href="C:\Users\makin\Downloads\projects\test\project-3\list.html" target="_blank"
                            class="services__link"><i class="ri-arrow-right-wide-line"></i>Appointment List</a></h2>
                    <p class="services__data">Easily the appointment list and make choices for free slots accordingly.
                    </p>
                </div>
            </div>
            <div class="services__info flex reveal">
                <div class="services__description ">
                    <h2><a href="form.php" target="_blank" class="services__link"><i
                                class="ri-arrow-right-wide-line"></i>Make an Appointment</a></h2>
                    <p class="services__data">Make an appointment anytime you like with just a few taps</p>
                </div>
                <img src="appointment2.jpg" alt="make appointment">
            </div>
            <div class="services__info flex reveal">
                <img src="medicines.png" alt="Medicines">
                <div class="services__description">
                    <h2><a href="C:\Users\makin\Downloads\projects\test\project-3\store.html" target="_blank"
                            class="services__link"><i class="ri-arrow-right-wide-line"></i>Medicinal Store</a></h2>
                    <p class="services__data">View the list of all the available medicines and their quantities</p>
                </div>
            </div>


        </section>
        <section class="contact section " id="contact">
            <div class="container">
                <div class="contact__label flex">
                    <div class="border">
                        <span class="section__subtitle reveal">CONTACT US</span>
                        <h2 class="section__title reveal">Write to us or text us for any queries</h2>
                    </div>
                    <div class="contact__container reveal">
                        <img src="contact.jpg" alt="contact-image" class="contact__img">
                    </div>
                </div>
                <div class="contact__data flex">
                    <div class="contact__card reveal">
                        <div class="contact__icon"><i class="ri-map-pin-2-fill"></i></div>
                        <h3 class="contact__title">Location</h3>
                        <address class="contact__info">NIT Delhi <br> Delhi 110040</address>
                    </div>
                    <div class="contact__card reveal">
                        <div class="contact__icon"><i class="ri-phone-line"></i></div>
                        <h3 class="contact__title">Call here</h3>
                        <address class="contact__info">+91 8126099551</address>
                    </div>
                    <div class="contact__card reveal">
                        <div class="contact__icon"><i class="ri-message-3-fill"></i></div>
                        <h3 class="contact__title">Message here</h3>
                        <div class="contact__social">
                            <br>
                            <a href="https://web.whatsapp.com/" target="_blank" class="contact__social-link"><i class="ri-whatsapp-line"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="contact__social-link"><i
                                    class="ri-messenger-line"></i></a>
                            <a href="https://web.telegram.org/" target="_blank" class="contact__social-link"><i
                                    class="ri-telegram-2-line"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__container container flex">
            <div>
                <a href="#">
                    <h2>
                        <div class="footer__logo reveal"><i class="ri-hospital-fill"><span>HealthCare</span></i></div>
                    </h2>
                </a>
                <br>
                <p class="footer__description">Health is Wealth</p>
                <address class="footer__email">Email:abcguka123@gmail.com</address>
            </div>
            <div>
                <h3 class="footer__title reveal">Website</h3>
                <br>
                <ul class="footer__links">
                    <li>
                        <a href="#about" class="footer_link">About Us</a>
                    </li>

                    <li>
                        <a href="#services" class="footer_link">Services</a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="footer__title reveal">Information</h3>
                <br>
                <ul class="footer__lists">
                    <li>
                        <address class="footer__info">Makindra Singh  <br> NIT Delhi</address>
                    </li>

                    <li>
                        <address class="footer__info">9 AM - 10 PM </address>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="footer__title reveal">Social Media</h3>
                <br>
                <ul class="footer__lists flex">
                    <li>
                        <a href="https://web.whatsapp.com/" target="_blank" class="footer__social-link"><i class="ri-whatsapp-line"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i
                                class="ri-facebook-circle-line"></i></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </footer>
    <script src="main.js"></script>





</body>

</html>