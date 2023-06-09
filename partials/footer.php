<?php
$page = $_SERVER['REQUEST_URI'];

if ($page != '/pages/sobre-nos.php') : ?>
    <!-- CONTATO -->
    <section id="contato" class="position-relative mx-auto <?php echo ($page == "/pages/contato.php" ? 'pb-4' : '') ?>">

        <?php if ($page !== "/pages/contato.php") : ?>
            <img loading="lazy" class="img-fluid position-absolute end-0 top-0 h-100 w-50 d-none d-xl-block" data-aos="zoom-in-left" data-aos-duration="800" src="../assets/images/banners/banner_form_desk.webp" alt="Banner contato">
        <?php endif ?>

        <div class="container px-4 <?php echo ($page == "/pages/contato.php" ? 'pb-5' : '') ?>">
            <div class="row align-items-md-center <?php echo ($page == "/pages/contato.php" ? 'justify-content-md-end pb-5' : 'justify-content-md-start py-5') ?> ">
                <div class="col-11 col-sm-11 col-md-8 col-lg-6 col-xl-5 col-xxl-5 pt-4 pb-5 py-md-5 mx-auto mx-xl-0" data-aos="fade-right" data-aos-duration="800">
                    <?php if ($page !== "/pages/contato.php") : ?>
                        <h2>Contato</h2>

                        <p class="small mb-4">Entre em contato conosco e fale <br class="d-md-none"> diretamente com nossos especialistas!</p>
                    <?php endif ?>

                    <form >
                        <div class="col-12 d-md-flex gap-3 mb-md-4">
                            <div class="mb-3 mb-md-0 w-100">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" aria-describedby="nome">
                            </div>

                            <div class="mb-3 mb-md-0 w-100">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>

                        <div class="col-12 d-md-flex gap-3 mb-4">
                            <div class="mb-3 mb-md-0 w-100">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone">
                            </div>

                            <div class="mb-3 mb-md-0 w-100">
                                <label for="empresa" class="form-label">Empresa</label>
                                <input type="text" class="form-control" id="empresa">
                            </div>
                        </div>

                        <div class="mb-3 mb-md-4">
                            <label class="form-label" for="mesagem">Mensagem</label>
                            <textarea class="form-control" id="mesagem"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 <?php echo ($current_page === '/pages/contato.php' ? 'mb-4' : '')  ?>" disabled>ENVIAR</button>

                        <?php if ($current_page === "/pages/contato.php") : ?>
                            <p class="mb-0">Entre em contato conosco e fale diretamente com nossos especialistas!</p>
                        <?php endif ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
</main>

<!-- FOOTER -->
<footer id="footer">
    <div class="container text-center text-white py-md-5">
        <div class="row pt-5 py-md-5 pb-3 align-items-center justify-content-center"  data-aos="fade-up" data-aos-duration="800">
            <div class="col-12 col-md-3 mb-4 mb-md-0 d-md-none">
                <figure class="mb-0">
                    <a href="https://grupopolar.com.br/" title="Logo Grupo Polar" target="_blank">
                        <img loading="lazy" src="../assets/images/logos/logo_grupo-polar.png" width="128" height="75" class="img-fluid mb-3" alt="Logo Grupo Polar">
                    </a>
                    <p class="small m-md-0">Uma empresa do Grupo Polar</p>
                </figure>
            </div>

            <div class="social col-12 col-md-2">
                <figure class="mb-4">
                    <a href="/" target="_blank">
                        <img loading="lazy" src="../assets/images/logos/logo_maapi.png" width="95" height="37" class="img-fluid" alt="Logo Maapi">
                    </a>
                </figure>

                <figure class="mb-4 mb-md-0 d-flex justify-content-center gap-2">
                    <a href="">
                        <img loading="lazy" src="../assets/icons/facebook_icon.svg" class="img-fluid" alt="Icone facebook">
                    </a>
                    <a href="">
                        <img loading="lazy" src="../assets/icons/instagram_icon.svg" class="img-fluid" alt="Icone Instagram">
                    </a>
                    <a href="">
                        <img loading="lazy" src="../assets/icons/youtube_icon.svg" class="img-fluid" alt="Icone Youtube">
                    </a>
                    <a href="">
                        <img loading="lazy" src="../assets/icons/twitter_icon.svg" class="img-fluid" alt="Icone Twitter">
                    </a>
                </figure>

                <ul class="p-0 lh-lg d-md-none">
                    <li><a href="/" title="Home">Home</a></li>
                    <li><a href="/pages/sobre-nos.php" title="Sobre nos">Sobre nós</a></li>
                    <li><a href="/pages/polar-tracker.php" title="Polar tracker">Polar Tracker</a></li>
                    <li><a href="/pages/aplicacoes.php" title="Aplicações">Aplicações</a></li>
                    <li><a href="/pages/contato.php" title="Contato">Contato</a></li>
                </ul>
            </div>

            <div class="grupo col-12 col-md-3 mb-4 mb-md-0 mx-md-4 d-none d-md-block">
                <figure class="mb-0">
                    <a href="https://grupopolar.com.br/" target="_blank">
                        <img loading="lazy" src="../assets/images/logos/logo_grupo-polar.png" width="128" height="75" class="img-fluid mb-3" alt="Logo Grupo Polar">
                    </a>
                    <p class="small m-md-0">Uma empresa do Grupo Polar</p>
                </figure>
            </div>

            <div class="navegacao col-md-2 d-none d-md-block">
                <ul class="p-0 lh-lg text-start">
                    <li><a href="/" title="Home">Home</a></li>
                    <li><a href="/pages/sobre-nos.php" title="Sobre nos">Sobre nós</a></li>
                    <li><a href="/pages/polar-tracker.php" title="Polar tracker">Polar Tracker</a></li>
                    <li><a href="/pages/aplicacoes.php" title="Aplicações">Aplicações</a></li>
                    <li><a href="/pages/contato.php" title="Contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="direitos container-fluid text-center text-white" >
        <div class="row mx-auto direitos small align-items-end justify-content-start py-4" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom">
            <div class="copyright col-12 col-md-3 mb-4 mb-md-0 ms-md-5">
                <p class="m-0 mx-auto">Copyright 2022 | Todos os direitos reservados</p>
            </div>

            <div class="desenvolvido col-12 col-md-3">
                <p class="m-0 mx-auto">Desenvolvido por
                    <a href="https://blackbeans.com.br/" target="_blank">
                        <img loading="lazy" src="../assets/images/logos/logo_blackbeans.png" class="img-fluid mb-1 mx-2" alt="Logo Black Beans">
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</footer>

</body>

</html>