@extends('front-end.master')

@push('page-style')
    <style>
        .carousel-indicators>li {
            border-radius: 50%;
            background-clip: initial;
            width: 19px;
            height: 1px;
        }

        .carousel-indicators .active {
            background-color: #bc5020;
            opacity: 80%;
        }
    </style>
@endpush

@section('content')
    <!-- slideshow content begin -->
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($banners as $banner)
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->index }}"
                        class="{{ $loop->index == 0 ? 'active' : '' }}">
                    </li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach ($banners as $banner)
                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                        <img src="{{ $banner->image }}" class="d-block w-100" alt="RIJVI & RODH">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- slideshow content end -->


    <!-- section content begin -->
    <div class="uk-section uk-section-primary uk-preserve-color in-equity-1" id="services">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <h4>Our Services</h4>
                </div>
            </div>
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-bottom"
                data-uk-grid>
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="uk-flex uk-flex-middle">
                            <span class="in-product-name red">EQ</span>
                            <h5 class="uk-margin-remove">Export</h5>
                        </div>
                        <p class="text-white">
                            Exporting refers to the selling of goods and services from the home country to a foreign
                            nation...
                        </p>
                        <a href="javascript:void(0)"
                            class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="uk-flex uk-flex-middle">
                            <span class="in-product-name green">LQ</span>
                            <h5 class="uk-margin-remove">Import</h5>
                        </div>
                        <p class="text-white">
                            Importing refers to the purchase of foreign products and bringing them into one's home
                            country...
                        </p>
                        <a href="javascript:void(0)"
                            class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="uk-flex uk-flex-middle">
                            <span class="in-product-name orange">FB</span>
                            <h5 class="uk-margin-remove">Manpower</h5>
                        </div>
                        <p class="text-white">
                            Manpower is the total number of people who can work to get something done. How quickly you
                            clean...
                        </p>
                        <a href="javascript:void(0)"
                            class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="uk-flex uk-flex-middle">
                            <span class="in-product-name blue">FU</span>
                            <h5 class="uk-margin-remove">E-Commerce</h5>
                        </div>
                        <p class="text-white">
                            Our company is focused on maximizing returns for our investors by investing their funds in the
                            e-commerce market....
                        </p>
                        <a href="javascript:void(0)"
                            class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section uk-section-primary uk-preserve-color in-equity-1" id="about">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-center bg-white py-5">
                <div class="uk-width-3-5@m uk-text-center">
                    <h1 class="uk-margin-remove-bottom text-dark">RIJVI & RODH GENERAL TRADING LLC</h1>
                    <p class="uk-text-lead text-white uk-margin-small-top text-dark">
                        We are a leading export-import company that specializes in
                        facilitating the international trade of goods and services between countries. With 10 years of
                        experience in the industry, we have built a reputation for excellence in quality, customer service,
                        and ethical business practices.
                    </p>
                </div>
            </div>
            <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        <div class="in-icon-wrap ml-2">
                            <img src="{{ asset('front-end/img/icon/1.png') }}" width="50px" alt="R&R">
                        </div>
                    </div>
                    <div>
                        <h3>Mission</h3>
                        <p class="uk-margin-remove-bottom text-white mr-2">
                            Our mission is to facilitate global trade by providing high-quality products and services that
                            exceed the expectations of our customers. We are committed to ethical business practices,
                            transparency, and integrity in all our dealings. We strive to build lasting relationships with
                            our clients, suppliers, and partners based on mutual trust, respect, and shared goals. We
                            embrace innovation, flexibility, and continuous improvement in all aspects of our business.
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        <div class="in-icon-wrap ml-2">
                            <img src="{{ asset('front-end/img/icon/2.png') }}" width="50px" alt="R&R">
                        </div>
                    </div>
                    <div>
                        <h3>Vision</h3>
                        <p class="uk-margin-remove-bottom text-white mr-2">
                            Our vision is to become a global leader in the export-import industry by providing innovative
                            solutions that enable our customers to achieve their business objectives. We aim to be
                            recognized for our exceptional quality, customer service, and ethical business practices. We
                            are committed to building a sustainable business that creates value for our shareholders and
                            contributes to the development of the communities where we operate.
                        </p>
                    </div>
                </div>
                <div class="uk-flex uk-flex-left">
                    <div class="uk-margin-right">
                        <div class="in-icon-wrap ml-2">
                            <img src="{{ asset('front-end/img/icon/3.png') }}" width="50px" alt="R&R">
                        </div>
                    </div>
                    <div>
                        <h3>Goals</h3>
                        <p class="uk-margin-remove-bottom text-white mr-2">
                            Our goal is to expand our global reach and increase our market share by providing high-quality
                            products and services that meet the unique needs of our customers. We aim to achieve this by,
                            Building lasting relationships with our clients, suppliers, and partners based on mutual trust,
                            respect, and shared goals.
                            Ensuring exceptional quality in all our products and services through rigorous testing and
                            quality control measures.
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-flex uk-flex-center">
                <div class="uk-width-3-5@m uk-text-center">
                    <p class="uk-text-lead text-white uk-margin-small-top">
                        Contact us today to learn how we can help you achieve your global trade objectives.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-2@m">
                    <div class="uk-grid uk-grid-small" data-uk-grid>
                        <div class="uk-width-auto@m">
                            <div class="in-icon-wrap large primary-color uk-margin-right">
                                <i class="fas fa-money-bill-wave fa-2x"></i>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="text-dark">Why trade with our Company?</h3>
                            <p>
                                Working with RIJVI & RODH General Trading LLC can help you navigate the complex world of
                                international trade with ease. Our team of experts has extensive knowledge and experience in
                                the industry, and we are committed to providing exceptional quality, customer service, and
                                ethical business practices.
                                <br>
                                <br>
                                At RIJVI & RODH General Trading LLC, we are dedicated to helping our clients achieve their
                                global trade objectives while creating sustainable value for our shareholders and
                                contributing to the economic growth and development of the communities where we operate.
                                Contact us today to learn more about how we can help you succeed in the global marketplace.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <h3 class="text-center text-dark">
                        By partnering with us, you can expect the following benefits:
                    </h3>
                    <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                        <div>
                            <ul class="uk-list in-list-check">
                                <li>
                                    Access to a wide range of high-quality products and services that meet your unique needs
                                    and requirements
                                </li>
                                <li>
                                    A customized approach to global trade that is tailored to your specific industry and
                                    business objectives
                                </li>
                                <li>
                                    A trusted partner that is committed to building lasting relationships based on mutual
                                    trust, respect, and shared goals
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-list in-list-check">
                                <li>
                                    Responsive and reliable customer service that is available to assist you at every stage
                                    of the trade process
                                </li>
                                <li>
                                    Competitive pricing and flexible payment options that fit your budget and cash flow
                                    needs
                                </li>
                                <li>
                                    Expert guidance on international trade regulations and requirements, including customs
                                    clearance, import/export documentation, and compliance with local laws and regulations
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section in-equity-4 container">
        <div class="uk-width-1-1@m uk-text-center uk-margin-bottom mb-5">
            <h1>More than <span class="in-highlight">23,000</span> traders joined</h1>
        </div>
        <div class="uk-slider-container uk-margin-bottom" uk-slider="autoplay: true">
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>
                <ul
                    class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid text-center">
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-1.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Marco P</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Italian</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Sono molto soddisfatto degli investimenti che ho fatto con questa azienda. Il team è
                                        molto professionale e i rendimenti sono eccellenti.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-2.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Lars H</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Danish</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Jeg er meget tilfreds med mine investeringer i dette firma. Teamet er meget
                                        kompetent og afkastet er fremragende.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-3.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Maria S</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Spanish</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Estoy muy contento con las inversiones que he hecho con esta empresa. El equipo es
                                        muy profesional y los retornos son excelentes
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-4.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Pierre L</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">French</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Je suis très satisfait de mes investissements avec cette entreprise. L'équipe est
                                        très professionnelle et les rendements sont excellents.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-5.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Katrin W</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">German</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Ich bin sehr zufrieden mit den Investitionen, die ich bei diesem Unternehmen
                                        getätigt habe. Das Team ist sehr kompetent und die Renditen sind ausgezeichnet.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-6.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Marcos S</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Portuguese</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Eu estou muito satisfeito com os meus investimentos nesta empresa. A equipe é muito
                                        profissional e os retornos são excelentes.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-7.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">佐藤健太郎</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Japanese</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        私はこの会社での投資に非常に満足しています。チームは非常にプロフェッシ
                                        ョナルで、リターンも優れています。
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-8.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Pieter V</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Dutch</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Ik ben erg tevreden over de investeringen die ik bij dit bedrijf heb gedaan. Het
                                        team is zeer deskundig en de rendementen zijn uitstekend
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-9.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Anna L</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Norwegian</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Jeg er veldig fornøyd med investeringene mine i dette selskapet. Teamet er veldig
                                        profesjonelt og avkastningen er utmerket
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-5.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Hoàng A</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Vietnamese</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Tôi rất hài lòng với các khoản đầu tư của mình với công ty này. Đội ngũ làm việc rất
                                        chuyên nghiệp và lợi nhuận rất tốt
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                    uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                    uk-slider-item="next"></a>

            </div>
        </div>
        <div class="uk-width-1-1@m uk-text-center">
            <a href="javascript:void(0)" class="uk-button uk-button-text">
                See more traders stories from all over the world
                <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section" id="contact">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-contact-6">
                <div class="uk-width-1-2@m">
                    <iframe class="uk-width-1-1 uk-height-medium uk-border-rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7215.60498807165!2d55.3286308267257!3d25.277228630572864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c956c599479%3A0xcdb0cdf53b3ac84d!2sHor%20Al%20Anz%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sbd!4v1680764223082!5m2!1sen!2sbd">
                    </iframe>

                    

                    <hr class="uk-margin-medium">
                    <div class="uk-grid uk-child-width-1-3@m uk-margin-medium-top uk-text-center" data-uk-grid="">
                        <div>
                            <h5 class="uk-margin-remove-bottom text-dark"><i
                                    class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i>Address</h5>
                            <p class="uk-margin-small-top">
                                Plot No - 152, Nooraniyah Building, Hor Al Anz, United Arab Emirates, PO Box No - 94406
                            </p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom text-dark"><i
                                    class="fas fa-envelope fa-sm uk-margin-small-right"></i>Email</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">rijvi.rodh2022@gmail.com</p>
                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">for public
                                inquiries</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom text-dark"><i
                                    class="fas fa-phone-alt fa-sm uk-margin-small-right"></i>Call</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">+971561261391</p>
                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">Mon - Fri,
                                9am - 5pm</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <p class="uk-margin-remove-bottom uk-text-lead uk-text-muted uk-text-center">Have a questions?
                    </p>
                    <h1 class="uk-margin-small-top uk-text-center">Let's <span class="in-highlight">get in
                            touch</span></h1>
                    <form id="contact-form" class="uk-form uk-grid-small uk-margin-medium-top" data-uk-grid="">
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-user fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="name" name="name" type="text"
                                placeholder="Full name">
                        </div>
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="email" name="email" type="email"
                                placeholder="Email address">
                        </div>
                        <div class="uk-width-1-1 uk-inline">
                            <span class="uk-form-icon fas fa-pen fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text"
                                placeholder="Subject">
                        </div>
                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div class="uk-width-1-1">
                            <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="sendemail"
                                type="submit" name="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section in-equity-5">
        <div class="uk-container uk-margin-remove-bottom">
            <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                <div>
                    <div class="uk-flex uk-flex-left in-award">
                        <div class="uk-margin-small-right">
                            <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                data-src="{{ asset('front-end/img/in-equity-5-award-1.svg') }}" alt="award-1"
                                width="91" height="82" data-uk-img>
                        </div>
                        <div>
                            <h6 class="text-dark">Reliable</h6>
                            <p class="provider">Someone that you can trust</p>
                            <p class="year">100%</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-flex uk-flex-left in-award">
                        <div class="uk-margin-small-right">
                            <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                data-src="{{ asset('front-end/img/in-equity-5-award-2.svg') }}" alt="award-2"
                                width="91" height="82" data-uk-img>
                        </div>
                        <div>
                            <h6 class="text-dark">Transparency</h6>
                            <p class="provider">Open, Communicative, and Accountabile</p>
                            <p class="year">100%</p>
                        </div>
                    </div>
                </div>
                <div class="uk-visible@m">
                    <div class="uk-flex uk-flex-left in-award">
                        <div class="uk-margin-small-right">
                            <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                data-src="{{ asset('front-end/img/in-equity-5-award-3.svg') }}" alt="award-3"
                                width="91" height="82" data-uk-img>
                        </div>
                        <div>
                            <h6 class="text-dark">Secure</h6>
                            <p class="provider">Keeping you safe financially and mentally.</p>
                            <p class="year">100%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection
