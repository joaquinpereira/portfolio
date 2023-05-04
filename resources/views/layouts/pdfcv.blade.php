<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@lang('Personal Portfolio')</title>

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            :root {
                --bg-color: #1f242d;
                --second-bg-color: #323946;
                --text-color: #fff;
                --second-text-color: #616875;
                --main-color: #0ef;
            }
            body{
                background-color: var(--second-bg-color);
            }
            .currentColorText{
                color: var(--text-color);
            }
            .left-column{
                background: var(--bg-color);
                color: var(--text-color);
            }
            .right-column{
                border: 0.2rem solid var(--bg-color);
                color: var(--bg-color);
                padding: 3.5rem 2.5rem;
                background-color: #fff;
            }
            .home-img{
                padding-top: 3.5rem;
                text-align: center;
            }
            .home-img img {
                height: 15rem;
                width: 15rem;
                border: 0.2rem solid var(--text-color);
                border-radius: 50%;
                color: var(--text-color);
                box-shadow: 0 0 2rem var(--text-color);
            }
            .box {
                position: relative;
                display: inline-block;
                font-size: 2rem
            }
            .box svg {
                height: 2rem;
                width: 2rem;
            }
            .mysql {
                height: 2.5rem !important;
                width: 2.5rem !important;
            }
            .section{
                border-bottom: 0.2rem solid var(--second-text-color);
            }
            .about-short, .job-description{
                color: var(--second-text-color);
                font-size: 0.9rem;
            }
            .work-experience{
                margin-top: 2.2rem;
                border-left: 0.1rem solid var(--second-text-color);
                padding-left: 1rem;
            }
            .job{
                margin-top: 1.6rem
            }
            .job-item{
                height: 1rem;
                width: 1rem;
                border: 0.2rem solid var(--second-text-color);
                border-radius: 50%;
                background-color: #fff;
                margin-right: 0.5rem;
                margin-top: 0.3rem;
            }
            .job-title{
                left: -0.5rem;
                position: relative;
            }
            .job-title h4{
                font-size: 1rem
            }
            .job-company-dates{
                color: var(--second-text-color);
            }
            .job-company{
                font-size: 0.8rem
            }
            .references{
                margin-top: 2rem;
                padding-left: 1rem;
            }
            .references h5, .references p{
                margin: 0
            }
            .reference-description{
                color: var(--second-text-color);
                font-size: 1rem;
                margin-bottom: 2rem
            }
            .section-left{
                border-bottom: 0.2rem solid var(--text-color);
                margin-top: 3rem
            }
            .contact{
                margin-top: 1rem
            }
            .contact p{
                margin: 0
            }
            .skills{
                margin-top: 1rem
            }
            .skills p{
                margin: 0
            }
            .progress{
                height: 1rem !important;
                border: 0.1rem solid var(--text-color);
            }
            .bg-progress{
                background: var(--bg-color)
            }
            .education p{
                margin: 0
            }
            .education div{
                margin-top: 1rem;
            }
            .btn {
                display: inline-block;
                /* padding: 1rem 2.8rem; */
                background: var(--main-color);
                border-radius: 4rem;
                box-shadow: 0 0 1rem var(--main-color);
                font-size: 1.6rem;
                color: var(--second-bg-color);
                letter-spacing: .1rem;
                font-weight: 600;
                transition: .5s ease;
            }
            div.sticky {
                position: relative;
                top: 10rem;
                z-index: 10;
                height: 0;
                width: 2vw;
                float: right;
                margin-right: 10vw;
            }
        </style>
    </head>
    <body>
        <div class="sticky"><a href="javascript:generatePDF()" id="downloadBtn" class="btn"><i class='bx bx-download'></i></a></div>
        <div class="container" id="pdfLayout">

            <div class="row">
                <div class="col-4 left-column">
                    <div class="home-content">
                        <div class="home-img">
                            <img src="{{ asset('/images/avatar5.png') }}" alt="avatar">
                        </div>
                        <div class="section-left">
                            <h4>@lang('Contacto')</h4>
                        </div>
                        <div class="contact">
                            <p><strong>@lang('Teléfono')</strong></p>
                            <p>{{ $user->telf }}</p>
                            <br>
                            <p><strong>@lang('Email')</strong></p>
                            <p>{{ $user->email }}</p>
                            <br>
                            <p><strong>@lang('Address')</strong></p>
                            <p>{{ $user->address }}</p>
                        </div>

                        <div class="section-left">
                            <h4>@lang('Education')</h4>
                        </div>
                        <div class="row education">
                            @foreach ($educations as $education)
                                <div class="col-12">
                                    <p><small>{{ $education->start_date->format('Y') }}</small></p>
                                    <p><strong>{{ $education->title }}</strong></p>
                                    <p><small>{{ $education->university }}</small></p>
                                </div>
                            @endforeach
                        </div>

                        <div class="section-left">
                            <h4>@lang('Skills')</h4>
                        </div>
                        <div class="row skills">
                            @foreach ($techs as $tech)
                                <div class="col-4 text-center mb-2">
                                    <div class="box">
                                        {!! $tech->icon !!}
                                    </div>
                                    <p><small>{{ $tech->name }}</small></p>

                                    <div class="progress">
                                        <div class="progress-bar bg-progress" role="progressbar" style="width: {{$tech->pivot->expertise}}%" aria-valuenow="{{$tech->pivot->expertise}}" aria-valuemin="0" aria-valuemax="100">{{$tech->pivot->expertise}}%</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>


                </div>
                <div class="col-8 right-column">
                    <h1>{{ $user->name }} </h1>
                    <h3>{{ $user->profession }}</h3>
                    <div class="about-short">
                        {!! $user->about_short !!}
                    </div>

                    <div class="section">
                        <h3><strong>@lang('Experiencia laboral')</strong></h3>
                    </div>

                    <div class="work-experience">
                        @foreach ($jobs as $job)
                            <div class="job">
                                <div class="row job-title">
                                    <div class="job-item"></div>
                                    <h4>{{ $job->position }}</h4>
                                </div>
                                <div class="row job-company-dates">
                                    <div class="col-7 job-company">
                                        <h6>{{ $job->company }}</h6>
                                    </div>
                                    <div class="col-5 d-flex justify-content-end">
                                        <h6>{{ $job->start_date->format('m/Y') }} - {{ $job->end_date->format('m/Y') }}</h6>
                                    </div>
                                </div>
                                <p class="job-description">{{ $job->description }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="section">
                        <h3><strong>@lang('Referencias')</strong></h3>
                    </div>

                    <div class="references">
                        <div class="row">
                            @foreach ($references as $reference)
                                <div class="col-6">
                                    <h5>{{ $reference->name }}</h5>
                                    <div class="reference-description">
                                        <p>{{ $reference->position }}</p>
                                        <p><strong>@lang('Teléfono')</strong> {{ $reference->telf }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

        <script>

            async function generatePDF(){
                //Start
                document.getElementById('downloadBtn').innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';

                var pdfLayout = document.getElementById('pdfLayout');


                var opt = {
                    margin: 0.1,
                    filename: 'cv_joaquin_pereira.pdf',
                    image: { type: 'jpeg', quality: 0.98, },
                    html2canvas: { scale: 3, letterRendering: true, },
                    jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait'}
                };

                html2pdf().set(opt).from(pdfLayout).toPdf()
                    .save()
                    .catch(err => console.log(err))
                    .finally(()=>{
                        document.getElementById('downloadBtn').innerHTML = "<i class='bx bx-download'></i>";
                    });

                //end
                document.getElementById('downloadBtn').innerHTML = "<i class='bx bx-download'></i>";
            }
        </script>

    </body>
</html>
