<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcup icon" href="img/logo.png">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <title>Jefrey21</title>
</head>
<body>
<header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="img/logo.png" alt="">Jefrey21</a>
                <div class="nav__menu" id="nav-menu">
                       <ul class="nav__list">
                        <li class="nav__item">
                            <!-- Buscador -->
                            <div class="search-container container">
                                <input type="text" class="search-input" placeholder="Buscar...">
                                <button class="search-button">Buscar</button>
                            </div>
                        </li>
                        <li class="nav__item">
                            <a href="#home1" class="nav__link active-link">Inicio</a>
                        </li>
                        <a href="#popular" class="nav__link">Popular</a>
                    </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">Nosotros</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('login')}}" class="nav__link"><i class="ri-user-line"></i></a>
                        </li>
                        
                       </ul> 
                       <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                       </div>
                       <img src="img/mariposa.png" alt="" class="nav__img-1">
                       <img src="img/mariposa.png" alt="" class="nav__img-2"> 
                </div> 
                <div class="nav__buttons">
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-apps-fill"></i>
                    </div>
                </div>
            </a>
        </nav>
</header>
    <main class="main">
        <section class="home section" id="home1">

            <div class="home__container container grid">
                <div class="home__data">
                <h1 class="home__tittle">
                    Tenemos lo <br>
                    ultimo en <br>
                    moda 
                </h1>
                <p class="homme__description">
                    Obten lo ultimo en moda,
                    tenemos las mejores ropas para grandes 
                    y chicos con un precio economico.
                </p>
                <a href="" class="button">COMPRA YA</a>
                <img src="img/mariposa.png" alt="image" class="home__fruit">
                </div>
                <img src="img/modelo-1.png" alt="image" class="home__img">
            </div>
            
            <img src="img/rosa.png" alt="image" class="home__branch">
        </section>
        <!-- =========POPULAR======= -->
        <section class="enjoy section" id="enjoy">
            <h2 class="section__title">
                La moda es para todos
            </h2>
            <div class="enjoy__container container grid">
                <article class="enjoy__card">
                    <div class="enjoy__bg"></div>
                    <a href="#">
                        <img src="img/men.png" alt="img" class="enjoy__img">
                        <h3 class="enjoy__tittle">Hombre</h3>
                        <span class="enjoy_subtittle">Nike-Adidas-Zara <br>
                                                    Levi's- H&M                    
                        </span>
                    </a>
                </article>
                <article class="enjoy__card">
                    <div class="enjoy__bg"></div>
                    <a href="">
                        <img src="img/women.png" alt="img" class="enjoy__img">
                        <h3 class="enjoy__tittle">Mujer</h3>
                        <span class="enjoy_subtittle">Forever 21-Victoria's Secret-Zara <br>
                                                    Levi's- H&M </span>
                    </a>
                </article>

                <article class="enjoy__card">
                    <div class="enjoy__bg"></div>
                    <a href="#">
                        <img src="img/bb.jpg" alt="img" class="enjoy__img">
                        <h3 class="enjoy__tittle">Niños</h3>
                        <span class="enjoy_subtittle">Para los engreidos</span>
                    </a>
                </article>
            
                
            </div>
        </section>
       
        <section class="popular section" id="popular">
            <h2 class="section__title">
                Ropa Populares
            </h2>
            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__bg"></div>
                    <img src="img/mona3.png" alt="image" class="popular__img">
                    <h3 class="popular__title">polo</h3>
                    <span class="popular__subtitle">Gucci</span>
                    <h3 class="popular__price">S/40.99</h3>
                    <button class="popular__button button">
                    <i class="ri-shopping-cart-line"></i>
                    </button>
                </article>
                <article class="popular__card">
                    <div class="popular__bg"></div>
                    <img src="img/mona3.png" alt="image" class="popular__img">
                    <h3 class="popular__title">Pantalon</h3>
                    <span class="popular__subtitle">Zara</span>
                    <h3 class="popular__price">S/40.99</h3>
                    <button class="popular__button button">
                    <i class="ri-shopping-cart-line"></i>
                    </button>
                </article>
                <article class="popular__card">
                    <div class="popular__bg"></div>
                    <img src="img/mona3.png" alt="image" class="popular__img">
                    <h3 class="popular__title">Vestido</h3>
                    <span class="popular__subtitle">Zara</span>
                    <h3 class="popular__price">S/40.99</h3>
                    <button class="popular__button button">
                    <i class="ri-shopping-cart-line"></i>
                    </button>
                </article>
            </article>
            <article class="popular__card">
                <div class="popular__bg"></div>
                <img src="img/mona3.png" alt="image" class="popular__img">
                <h3 class="popular__title">Vestido</h3>
                <span class="popular__subtitle">Zara</span>
                <h3 class="popular__price">S/40.99</h3>
                <button class="popular__button button">
                <i class="ri-shopping-cart-line"></i>
                </button>
            </article>
        </article>
        <article class="popular__card">
            <div class="popular__bg"></div>
            <img src="img/mona3.png" alt="image" class="popular__img">
            <h3 class="popular__title">Vestido</h3>
            <span class="popular__subtitle">Zara</span>
            <h3 class="popular__price">S/40.99</h3>
            <button class="popular__button button">
            <i class="ri-shopping-cart-line"></i>
            </button>
        </article>
    </article>
    <article class="popular__card">
        <div class="popular__bg"></div>
        <img src="img/mona3.png" alt="image" class="popular__img">
        <h3 class="popular__title">Vestido</h3>
        <span class="popular__subtitle">Zara</span>
        <h3 class="popular__price">S/40.99</h3>
        <button class="popular__button button">
        <i class="ri-shopping-cart-line"></i>
        </button>
    </article>
            </div>
        </section>
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">
                        Proporcionamos <br>
                        la mejores marca al mejor precio
                    </h2>
                    <p class="about_description">
                        Ropas a medidas de marcas conocidas, no te quedes atras 
                        y viste lo actual, 
                    </p>
                    <a href="#" class="button">Saber mas</a>
                    <img src="img/mariposa.png " alt="image" class="about__fruit">
                </div>
                <img src="img/modelo-1.png" alt="image" class="about__img">
            </div>
            <img src="img/rosa.png" alt="image" class="about__branch">
        </section>

        
        <section class="join__section" id="join">
            <div class="join__container container grid">
                <div class="join__content grid">
                    <div class="join__data">
                        <h2 class="section__title">
                        Únete a nosotros <br>
                        Se parte de la comunidad
                        </h2>
                        <p class="join__description">
                            Enterate de la ofertas y novedades que
                            tenemos para ti.
                        </p>
                    </div>
                    <form action="join" class="join__form">
                        <input type="email" placeholder="Ingrese su Email" required class="join__input">
                        <button class="join__button button">
                            Suscribete Ahora
                        </button>
                    </form>
                    <img src="img/join.jpg" alt="image" class="join__bg">
                </div>
                <img src="img/flor azul.png" alt="image" class="join__leaf-1">
                <img src="img/flor azul.png" alt="image" class="join__leaf-2">
            </div>
        </section>
    </main> 

    <footer class="footer">
        <div class="footer__container container grid">
            <div>
            <a href="#" class="footer__logo">
                <img src="img/logo.png" alt="">Jefrey21
            </a>
            <p class="footer__description">
                Lo ultimo en moda <br>
                con las mejores ropas.
            </p>
            </div>

        <div class="footer__data grid">
            <div>
                <h3 class="footer__title">Compania</h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">FAQS</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Contactanos</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">New</h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Caracteristicas</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Testimonial</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Videos</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">Direccion</h3>
                <ul class="footer__links">
                    <li class="footer__info">
                        Av.Amazonas 2121 <br>
                        Puccallpa 4321, Perú
                    </li>
                    <li class="footer__info">
                        9AM - 10PM
                    </li>
                </ul>
            </div>
                <div>
                    <h3 class="footer__title">Redes sociales</h3>
                    <div class="footer__social">
                        <a href="https://web.facebook.com/jeffersonandres.chotarodriguez" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-circle-line"></i>
                        </a>
                        <a href="https://www.instagram.com/jeffersonchrodriguez/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <img src="img/polera.png" alt="image" class="footer__fruit">
            <img src="img/branch-1.png" alt="image" class="footer__branch-1">
            <img src="img/branch-2.png" alt="image" class="footer__branch-2">
        </div>

        <span class="footer__copy">
            &#169; Todo los derechos reservados por Jefrey21
        </span>
    </footer>
    <!-- SCROLL UP -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
    </a>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/tema.js"></script>
</body>
</html>