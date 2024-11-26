<?php
require 'actions.php';    // Inclua o arquivo que contém a lógica de ações (onde $cakes é preenchido)
?>
<?php include "head.php"; ?>

<body class="index-page">

<?php include "header.php"; ?>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <div class="container">
            <div class="row gy-4 justify-content-center justify-content-lg-between">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Encomende agora<br>O bolo da sua preferência</h1>
                    <p data-aos="fade-up" data-aos-delay="100">Personalize o sabor e o design para tornar sua celebração
                        ainda mais doce!</p>
                    <div class="d-flex gap-2" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-get-started">Encomenda personalizada</a>
                        <a href="#about" class="btn-vermais">Sobre nós</a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" style="width: 55%" data-aos="zoom-out">
                    <img src="../assets/img/cake.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Sobre nós<br></h2>
            <p><span>Nos</span> <span class="description-title"> conheça</span></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <img src="../assets/img/about.jpg" class="img-fluid mb-4" alt="">
                    <div class="book-a-table">
                        <h3>Personalize sua Encomenda</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Convidamos você a experimentar e fazer parte dessa deliciosa jornada conosco.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Utilizamos apenas ingredientes selecionados para garantir o melhor sabor e frescor.</span>
                            </li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Cada bolo é feito sob medida para combinar com o seu momento especial.</span>
                            </li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Oferecemos opções que agradam a todos os paladares, dos clássicos aos mais ousados.</span>
                            </li>
                        </ul>
                        <p>
                            Seja para uma data marcante ou não, estamos aqui para tornar seus momentos mais doces e
                            inesquecíveis.
                        </p>

                        <div class="position-relative mt-4">
                            <img src="../assets/img/confeitaria.jpg" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                               class="glightbox pulsating-play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

        <img src="../assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Workers</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Nosso Catálogo</h2>
            <p><span>Confira nosso</span> <span class="description-title">Doce Menu</span></p>
        </div>
        <div class="container menu-container">
            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item"><a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-cakes">
                        <h4>Todos os Bolos</h4></a></li><!-- End tab nav item --> </ul>
            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                <div class="tab-pane fade active show" id="menu-cakes">
                    <div class="tab-header text-center"><p>Menu</p>
                        <h3>Todos os Bolos</h3></div>
                    <div class="row gy-5 justify-content-center"> <?php if (!empty($cakes)): ?><?php foreach ($cakes as $cake): ?>
                            <div class="col-lg-4 col-md-6 menu-item d-flex flex-column align-items-center">
                                <!-- A URL da imagem agora será usada para carregar a imagem --> <img
                                        src="<?php echo htmlspecialchars($cake['imageUrl']); ?>" style="width: 350px"
                                        class="menu-img img-fluid" alt="Imagem do bolo">
                                <h4><?php echo htmlspecialchars($cake['name']); ?></h4>
                                <p class="ingredients"> <?php echo htmlspecialchars($cake['description']); ?> </p>
                                <p class="price"> <?php echo number_format($cake['price'], 2, ',', '.'); ?> R$ </p>
                            </div> <?php endforeach; ?><?php else: ?> <p>Nenhum bolo disponível no
                            momento.</p> <?php endif; ?> </div>
                </div><!-- End Cakes Menu Content --> </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>OPINIÔES</h2>
            <p>O que <span class="description-title">Falam Sobre Nós</span></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                    }
                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Simplesmente maravilhoso! O bolo estava fresco, com um sabor incrível e a decoração impecável. Todos na festa amaram!</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="../assets/img/testimonials/testimonials-1.jpg"
                                         class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Sempre que quero surpreender alguém, escolho os bolos daqui. Além de lindos, são deliciosos!</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="../assets/img/testimonials/testimonials-2.jpg"
                                         class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Comprei para o aniversário da minha filha e foi um sucesso! Todo mundo elogiou o sabor e a decoração impecável.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>Jena Karlis</h3>
                                        <h4>Advogado</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="../assets/img/testimonials/testimonials-3.jpg"
                                         class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Os melhores bolos que já provei! Dá para sentir o carinho em cada detalhe, simplesmente perfeito.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>John Larson</h3>
                                        <h4>Empresário</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 text-center">
                                    <img src="../assets/img/testimonials/testimonials-4.jpg"
                                         class="img-fluid testimonial-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>chefs</h2>
            <p><span>Nossa</span> <span class="description-title">Equipe Profissional<br></span></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="../assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Lucas White</h4>
                            <span>Chefe</span>
                            <p>Com mais de 15 anos de experiência em confeitaria gourmet, Lucas é o mestre por trás das
                                receitas que encantam nossos clientes. Apaixonado por inovação, ele combina técnicas
                                clássicas com toques modernos para criar bolos únicos e inesquecíveis.</p>
                        </div>
                    </div>
                </div><!-- End Chef Team Member -->

                <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="../assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Ana Clara</h4>
                            <span>Confeiteira</span>
                            <p>Dedicada e talentosa, Ana Clara é a alma criativa da nossa cozinha. Seus toques especiais
                                e habilidades manuais dão vida aos sabores e texturas que fazem nossos bolos serem
                                inesquecíveis.</p>
                        </div>
                    </div>
                </div><!-- End Chef Team Member -->

                <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="../assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Chefe</span>
                            <p>Especialista em confeitaria artística, William transforma bolos em verdadeiras obras de
                                arte. Com um olhar atento aos detalhes, ele cria decorações que são tão impressionantes
                                quanto deliciosas.</p>
                        </div>
                    </div>
                </div><!-- End Chef Team Member -->

            </div>

        </div>

    </section><!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Faça sua encomenda</h2>
            <p><span>Personalize sua</span> <span class="description-title">encomenda conosco<br></span></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"></div>

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up"
                     data-aos-delay="200">
                    <form action="../forms/book-a-table.php" method="post" role="form" class="php-email-form">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome"
                                       required="">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                       required="">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Número"
                                       required="">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="date" name="date" class="form-control" id="date" placeholder="Data"
                                       required="">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="time" class="form-control" name="time" id="time" placeholder="Horário"
                                       required="">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="number" class="form-control" name="people" id="people"
                                       placeholder="Nº de pessoas" required="">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <textarea class="form-control" name="Descrição do bolo" rows="5"
                                      placeholder="Descrição do bolo"></textarea>
                        </div>

                        <div class="text-center mt-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Seu pedido foi enviado com sucesso, mandaremos um email e uma
                                mensagem no whatsapp com mais detalhes da entrega. Obrigado!
                            </div>
                            <button type="submit">Concluir</button>
                        </div>
                    </form>
                </div><!-- End Reservation Form -->

            </div>

        </div>

    </section><!-- /Book A Table Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contato</h2>
            <p><span>Precisa de ajuda?</span> <span class="description-title">Entre em contato!</span></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen=""></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="icon bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Endereço</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Telefone</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>fatia-certa@email.com</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
                        <i class="icon bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h3>Horário de funcionamento<br></h3>
                            <p><strong>Seg-Sab:</strong> 11AM - 23PM; <strong>Domigo:</strong> Fechado</p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

            </div>
        </div>

    </section><!-- /Contact Section -->

</main>

<footer id="footer" class="footer dark-background">

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Yummy</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>