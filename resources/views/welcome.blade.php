<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@lang('Personal Portfolio')</title>

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        @vite(['resources/css/app.css'])
    </head>
    <body>
        <header class="header">
            <a href="" class="logo">Joaquin Pereira</a>

            <i class='bx bx-menu' id="menu-icon"></i>

            <nav class="navbar">
                <a href="#home" class="active">@lang('Home')</a>
                <a href="#skills">@lang('Skills')</a>
                <a href="#portfolio">@lang('Portfolio')</a>
                <a href="#about">@lang('About')</a>
                <a href="#contact">@lang('Contact')</a>
            </nav>
        </header>

        <section class="home" id="home">
            <div class="home-content">
                <h3>Hello, It's Me</h3>
                <h1>Joaquin Pereira</h1>
                <h3>And I'm a <span class="multiple-text"></span></h3>
                <p>Soy un desarrollador con más de 9 años de experiencia, me considero una persona muy responsable, honesto, respetuoso, amigable, creativo, innovador, organizado y siempre muy dispuesto al trabajo duro aportando mis conocimientos.</p>
                <p>Me apasiona aprender y conocer cosas nuevas del desarrollo de software y me encanta participar en proyectos ambiciosos y complejos porque considero que son la mejor forma de consolidar el conocimiento a parte de la satisfacción de participar en el desarrollo de un producto.</p>
                <div class="social-media">
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-dev-to'></i></a>
                </div>
                <a href="javascript:openModal()" id="downloadBtn" class="btn">Download CV</a>

            </div>
            <div class="home-img">
                <img src="/images/avatar5.png" alt="avatar">
            </div>
        </section>

        <section class="skills" id="skills">
            <h2 class="heading">My <span>Skills</span></h2>

            <div class="skills-container">
                <div class="skill-box">
                    <i class='bx bx-code-alt' ></i>
                    <h3>Backend Development</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit explicabo ad, tempore molestias nemo
                        eaque ipsam consectetur quod et quaerat dolorem cumque beatae saepe eveniet laborum veritatis
                        repellendus ipsa odio!</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="skill-box">
                    <i class='bx bx-code-alt' ></i>
                    <h3>Frontend Development</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit explicabo ad, tempore molestias nemo
                        eaque ipsam consectetur quod et quaerat dolorem cumque beatae saepe eveniet laborum veritatis
                        repellendus ipsa odio!</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="skill-box">
                    <i class='bx bx-code-alt' ></i>
                    <h3>Web Development</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit explicabo ad, tempore molestias nemo
                        eaque ipsam consectetur quod et quaerat dolorem cumque beatae saepe eveniet laborum veritatis
                        repellendus ipsa odio!</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolio">
            <h2 class="heading">Latest <span>Project</span></h2>

            <div class="portfolio-container">
                <div class="portfolio-box">
                    <img src="/images/portfolio01.png" alt="">
                    <div class="portfolio-layer">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                            quaerat quidem! Id non culpa magnam quasi voluptate quibusdam eius laudantium
                            voluptatem qui impedit autem necessitatibus est aliquid, obcaecati quisquam iste.</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="/images/portfolio02.png" alt="">
                    <div class="portfolio-layer">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                            quaerat quidem! Id non culpa magnam quasi voluptate quibusdam eius laudantium
                            voluptatem qui impedit autem necessitatibus est aliquid, obcaecati quisquam iste.</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="/images/portfolio03.png" alt="">
                    <div class="portfolio-layer">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                            quaerat quidem! Id non culpa magnam quasi voluptate quibusdam eius laudantium
                            voluptatem qui impedit autem necessitatibus est aliquid, obcaecati quisquam iste.</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="/images/portfolio04.png" alt="">
                    <div class="portfolio-layer">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                            quaerat quidem! Id non culpa magnam quasi voluptate quibusdam eius laudantium
                            voluptatem qui impedit autem necessitatibus est aliquid, obcaecati quisquam iste.</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="/images/portfolio05.png" alt="">
                    <div class="portfolio-layer">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                            quaerat quidem! Id non culpa magnam quasi voluptate quibusdam eius laudantium
                            voluptatem qui impedit autem necessitatibus est aliquid, obcaecati quisquam iste.</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="/images/portfolio06.png" alt="">
                    <div class="portfolio-layer">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
                            quaerat quidem! Id non culpa magnam quasi voluptate quibusdam eius laudantium
                            voluptatem qui impedit autem necessitatibus est aliquid, obcaecati quisquam iste.</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>
            </div>

        </section>

        <section class="about" id="about">
            <div class="about-img">
                <img src="/images/developer.png" alt="developer image">
            </div>

            <div class="about-content">
                <h2 class="heading">About <span>Me</span></h2>
                <h3>FullStack Developer</h3>
                <p>Nací en la hermosa ciudad de Mérida de los Andes de Venezuela, mi país pese a su caótica situación económica y política, es una hermosa nación con innumerables y variados paisajes naturales y con un pueblo muy solidario y alegre.</p>
                <p>Desde mi infancia, me apasione por el mundo de la tecnología, dedicando largas horas a vídeos juegos y a explorar diferentes programas en mi computadora.</p>
                <p>En la universidad al estudiar Bioánalis, compre una calculadora casio que contaba con un modulo de basic para programar pequeñas rutinas, dicha característica me ensimismo a tal punto que todas las formulas que veía en cálculo y estadística las programaba, pasaba muchas horas programando en basic hasta que un amigo estudiante de ingeniería me invito a asistir a una clase de programación en lenguaje C como oyente, lo que vi en esa clase me marco al punto que solo pensaba en programación y esto me llevo a la determinación de decidir a dedicar mi vida profesional a la informática.</p>
                <p>Siendo estudiante de informática conocí personas destacadas en la programación y participe junto a compañeros de estudios en las olimpiadas Venezolana de informática, en la que obtuve lugares destacados en dichas competencias como Subcampeón y Campeón en programación en distintos años.</p>
                <p>Al graduarme tuve la fortuna trabajar en el Centro Nacional de Tecnologías de la Información de la que obtuve una valiosa experiencia profesional y personal. Luego decidí dedicarme a trabajar en modo remoto y esto me ha permitido acumular una gran cantidad de experiencia, trabajando y conociendo a empresas y personas increíbles y maravillosas de todo el mundo.</p>
                <a href="#" class="btn hidden">Read More</a>

            </div>
        </section>

        <section class="contact" id="contact">
            <h2 class="heading">@lang('Contact') <span>Me!</span></h2>

            <form action="#">
                <div class="input-box">
                    <input type="text" placeholder="Full Name">
                    <input type="email" placeholder="Email address">
                </div>
                <div class="input-box">
                    <input type="number" placeholder="Mobile Number">
                    <input type="text" placeholder="Email Subject">
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </section>

        <footer class="footer">
            <div class="footer-text">
                <p>Developed in laravel with css and js from Miranda, Venezuela.</p>
            </div>
            <div class="footer-icon-top">
                <a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
            </div>
        </footer>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                <span class="close">&times;</span>
                <h3>Curriculum Vitae</h3>
                </div>
                <div class="modal-body">
                    <iframe id="cv-iframe" class="responsive-iframe" src="{{ route('profile.pdf') }}">Your browser isn't compatible</iframe>
                </div>
            </div>

        </div>

        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>

        @vite(['resources/js/app.js'])

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("downloadBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            function openModal(){
                document.getElementById("myModal").style.display = "block";
                document.getElementById('cv-iframe').contentWindow.generatePDF();
            }
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        </script>
    </body>
</html>
