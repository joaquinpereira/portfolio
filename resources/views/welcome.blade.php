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
            <a href="" class="logo">@lang('Portfolio')</a>

            <i class='bx bx-menu' id="menu-icon"></i>

            <nav class="navbar">
                <a href="#home" class="active">@lang('Home')</a>
                <a href="#about">@lang('About')</a>
                <a href="#skills">@lang('Skills')</a>
                <a href="#portfolio">@lang('Portfolio')</a>
                <a href="#contact">@lang('Contact')</a>
            </nav>
        </header>

        <section class="home" id="home">
            <div class="home-content">
                <h3>Hello, It's Me</h3>
                <h1>Joaquin Pereira</h1>
                <h3>And I'm a <span class="multiple-text">FullStack Developer</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, cumque vel! Excepturi qui fugit ut, eligendi quae omnis dolor ratione?
                    Reiciendis quaerat perspiciatis quod enim dolor dicta eos, nesciunt tenetur.</p>
                <div class="social-media">
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
                <a href="#" class="btn">Download CV</a>

            </div>
            <div class="home-img">
                <img src="/images/avatar5.png" alt="avatar">
            </div>
        </section>

        <section class="about" id="about">
            <div class="about-img">
                <img src="/images/developer.png" alt="developer image">
            </div>

            <div class="about-content">
                <h2 class="heading">About <span>Me</span></h2>
                <h3>FullStack Developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis error animi adipisci quam vel id fugit,
                    ducimus, expedita maiores qui nihil, doloribus cupiditate asperiores inventore corrupti similique ea sed alias.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam molestias aut dolores reiciendis quisquam provident illum.
                     Excepturi optio sapiente, molestias dignissimos illum iusto, quod, accusantium rem neque iste amet error?
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ducimus pariatur cupiditate, odio veniam vero labore eos hic,
                     commodi corrupti laudantium laboriosam iste consequatur expedita itaque ab at nemo modi?
                </p>
                <a href="#" class="btn">Read More</a>

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

        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>

        @vite(['resources/js/app.js'])
    </body>
</html>
