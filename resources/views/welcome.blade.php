<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@lang('Personal Portfolio')</title>

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @vite(['resources/css/app.css'])

        <livewire:styles />
    </head>
    <body>
        <header class="header">
            <a href="" class="logo">{!! $user->name !!}</a>

            <i class='bx bx-menu' id="menu-icon"></i>

            <nav class="navbar">
                <a href="#home" class="active">@lang('Home')</a>
                <a href="#skills">@lang('Skills')</a>
                <a href="#portfolio">@lang('Portfolio')</a>
                <a href="#about">@lang('About')</a>
                <a href="#contact">@lang('Contact')</a>

                <ul style="display: inline-flex">
                    <li>
                        <a href="#"><i class='bx bx-globe'></i> {{Str::upper($locale)}}</a>
                      <ul class="dropdown">
                        <li><a href="/lang/es">Español</a></li>
                        <li><a href="/lang/en">English</a></li>
                      </ul>
                    </li>
                </ul>

            </nav>
        </header>

        <section class="home" id="home">
            <div class="home-content">
                <h3>@lang('Hola, mi nombre es')</h3>
                <h1>{!! $user->name !!}</h1>
                {{-- <h3>And I'm a <span class="multiple-text"></span></h3> --}}
                <div>{!! $user->about_short !!}</div>
                <div class="social-media">
                    @foreach ($user->networks as $network)
                        <a target="blank" href="{{$network->pivot->url}}">{!! $network->icon !!}</a>
                    @endforeach
                </div>
                <a href="javascript:openModal()" id="downloadBtn" class="btn">@lang('Descargar CV')</a>

            </div>
            <div class="home-img">
                <img src="/images/avatar5.png" alt="avatar">
            </div>
        </section>

        <section class="skills" id="skills">

            @include('partials.skills')

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
                <h2 class="heading">@lang('acerca de mi')</h2>
                <h3>{!! $user->profession !!}</h3>
                <div>{!! $user->about_long !!}</div>

                {{-- <a href="#" class="btn hidden">Read More</a> --}}

            </div>
        </section>

        <section class="contact" id="contact">

            @livewire("contact-component")

        </section>

        <footer class="footer">
            <div class="footer-text">
                @lang('desarrollado en')
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
                <h3>@lang('Curriculum Vitae')</h3>
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

        <livewire:scripts />

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    </body>
</html>
