@extends('layouts.default')
@section('content')
 
    <div data-barba="container" data-barba-namespace="news_archive">
        <div data-barba="container" data-barba-namespace="templates_contact">
            @include('includes.head') 
            <main id="page-news-archive" class="blog page-offset">


                <section class="banner w-100 c-white ta-c ">
                    <div class="banner__bg absolute-full o-h">
                        <div class="banner__bg__inner absolute-full" data-kira-item="parallaxTop"
                            data-bg="assets/img/trevidic-blog-1920x886.jpg"
                            data-bg-hidpi="assets/img/trevidic-blog-1920x886.jpg">
                        </div>
                    </div>
                    <div class="container" data-kira-timeline="onload">
                        <h1 class="title-xxl banner__title tt-u mb-md" data-kira-item="splitline"
                            data-splittext="lines, words">Blogs</h1>
                        <div class="item-text" data-kira-item="fadeInUp" data-start="-=1">
                            <div class="row jc-center">
                                <div class="col-lg-12">
                                    <div class="banner__text cms fs-lg">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="blog__posts" data-kira-timeline="onload">
                    <div class="container loaded-posts" data-kira-item="fadeInUp" data-start="+=0.8">
                        <div class="blog__post">

                            <div class="post-teaser p-r bg-white ">
                                <div class="row">
                                    <div class="col-md-3 offset-xl-2 ai-end d-none lg-up-d-f">
                                        <div class="post-teaser__date title-xs">24.02.23</div>
                                    </div>
                                    <div class="col-md-13 col-lg-10 col-xl-8 mb-md md-up-mb-0">
                                        <a href="{{ url('/blog-post') }}" class="d-b"
                                            aria-label="THE EYEBROW">
                                            <div id="img-173789" class="lazy-image " style="padding-bottom:57%;">
                                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 920 1300'%3E%3C/svg%3E"
                                                    data-src="assets/img/trevidic-blogpost-3-812x462.jpg"
                                                    data-srcset="assets/img/trevidic-blogpost-3-406x231.jpg 406w, assets/img/trevidic-blogpost-3-812x462.jpg 812w"
                                                    sizes="(max-width: 639px) 406px, 812px" width="920" height="1300"
                                                    alt="" class="lazy-image__img">
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="post-teaser__metas col-md-11 col-lg-10 col-xl-8 offset-lg-1 d-f fd-column">
                                        <div class="post-teaser__metas__top">
                                            <h3 class="post-teaser__title title-md tt-u fw-300">
                                                <a href="{{ url('/blog-post') }}"
                                                    class="d-b">CHIN AESTHETICS</a>
                                            </h3>
                                            <div class="post-teaser__date title-xs md-up-d-none mb-sm md-up-mb-0">
                                                24.02.23</div>
                                            <p class="post-teaser__excerpt mb-sm lg-up-mb-0"></p>
                                        </div>
                                        <div class="post-teaser__metas__bottom mb-0 mt-auto">
                                            <a href="{{ url('/blog-post') }}"
                                                class="btn">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__post">

                            <div class="post-teaser p-r bg-white ">
                                <div class="row">
                                    <div class="col-md-3 offset-xl-2 ai-end d-none lg-up-d-f">
                                        <div class="post-teaser__date title-xs">06.01.23</div>
                                    </div>
                                    <div class="col-md-13 col-lg-10 col-xl-8 mb-md md-up-mb-0">
                                        <a href="{{ url('/blog-post') }}"
                                            class="d-b" aria-label="LE SOURCIL">
                                            <div id="img-897815" class="lazy-image " style="padding-bottom:57%;">
                                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 5760 3840'%3E%3C/svg%3E"
                                                    data-src="https://www.trevidic.com/wp-content/uploads/2022/02/iStock-810288082-812x462.jpg"
                                                    data-srcset="https://www.trevidic.com/wp-content/uploads/2022/02/iStock-810288082-406x231.jpg 406w, https://www.trevidic.com/wp-content/uploads/2022/02/iStock-810288082-812x462.jpg 812w"
                                                    sizes="(max-width: 639px) 406px, 812px" width="5760" height="3840"
                                                    alt="" class="lazy-image__img">
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="post-teaser__metas col-md-11 col-lg-10 col-xl-8 offset-lg-1 d-f fd-column">
                                        <div class="post-teaser__metas__top">
                                            <h3 class="post-teaser__title title-md tt-u fw-300">
                                                <a href="{{ url('/blog-post') }}"
                                                    class="d-b">THE EYEBROW</a>
                                            </h3>
                                            <div class="post-teaser__date title-xs md-up-d-none mb-sm md-up-mb-0">
                                                06.01.23</div>
                                            <p class="post-teaser__excerpt mb-sm lg-up-mb-0"></p>
                                        </div>
                                        <div class="post-teaser__metas__bottom mb-0 mt-auto">
                                            <a href="{{ url('/blog-post') }}"
                                                class="btn">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__post">

                            <div class="post-teaser p-r bg-white ">
                                <div class="row">
                                    <div class="col-md-3 offset-xl-2 ai-end d-none lg-up-d-f">
                                        <div class="post-teaser__date title-xs">08.12.22</div>
                                    </div>
                                    <div class="col-md-13 col-lg-10 col-xl-8 mb-md md-up-mb-0">
                                        <a href="{{ url('/blog-post') }}"
                                            class="d-b" aria-label="LES PAUPIERES INFERIEURES">
                                            <div id="img-88976" class="lazy-image " style="padding-bottom:57%;">
                                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 6720 4480'%3E%3C/svg%3E"
                                                    data-src="https://www.trevidic.com/wp-content/uploads/2022/02/iStock-1131796161-812x462.jpg"
                                                    data-srcset="https://www.trevidic.com/wp-content/uploads/2022/02/iStock-1131796161-406x231.jpg 406w, https://www.trevidic.com/wp-content/uploads/2022/02/iStock-1131796161-812x462.jpg 812w"
                                                    sizes="(max-width: 639px) 406px, 812px" width="6720" height="4480"
                                                    alt="" class="lazy-image__img">
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="post-teaser__metas col-md-11 col-lg-10 col-xl-8 offset-lg-1 d-f fd-column">
                                        <div class="post-teaser__metas__top">
                                            <h3 class="post-teaser__title title-md tt-u fw-300">
                                                <a href="{{ url('/blog-post') }}"
                                                    class="d-b">THE LOWER EYELIDS</a>
                                            </h3>
                                            <div class="post-teaser__date title-xs md-up-d-none mb-sm md-up-mb-0">
                                                08.12.22</div>
                                            <p class="post-teaser__excerpt mb-sm lg-up-mb-0"></p>
                                        </div>
                                        <div class="post-teaser__metas__bottom mb-0 mt-auto">
                                            <a href="{{ url('/blog-post') }}"
                                                class="btn">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__post">

                            <div class="post-teaser p-r bg-white ">
                                <div class="row">
                                    <div class="col-md-3 offset-xl-2 ai-end d-none lg-up-d-f">
                                        <div class="post-teaser__date title-xs">16.11.22</div>
                                    </div>
                                    <div class="col-md-13 col-lg-10 col-xl-8 mb-md md-up-mb-0">
                                        <a href="{{ url('/blog-post') }}" class="d-b"
                                            aria-label="LE VENTRE FEMININ">
                                            <div id="img-179710" class="lazy-image " style="padding-bottom:57%;">
                                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2848 4272'%3E%3C/svg%3E"
                                                    data-src="https://www.trevidic.com/wp-content/uploads/2022/07/Ventre1-812x462.jpg"
                                                    data-srcset="https://www.trevidic.com/wp-content/uploads/2022/07/Ventre1-406x231.jpg 406w, https://www.trevidic.com/wp-content/uploads/2022/07/Ventre1-812x462.jpg 812w"
                                                    sizes="(max-width: 639px) 406px, 812px" width="2848" height="4272"
                                                    alt="" class="lazy-image__img">
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="post-teaser__metas col-md-11 col-lg-10 col-xl-8 offset-lg-1 d-f fd-column">
                                        <div class="post-teaser__metas__top">
                                            <h3 class="post-teaser__title title-md tt-u fw-300">
                                                <a href="{{ url('/blog-post') }}" class="d-b">THE FEMALE STOMACH</a>
                                            </h3>
                                            <div class="post-teaser__date title-xs md-up-d-none mb-sm md-up-mb-0">
                                                16.11.22</div>
                                            <p class="post-teaser__excerpt mb-sm lg-up-mb-0"></p>
                                        </div>
                                        <div class="post-teaser__metas__bottom mb-0 mt-auto">
                                            <a href="{{ url('/blog-post') }}" class="btn">THE FEMALE STOMACH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__post">

                            <div class="post-teaser p-r bg-white ">
                                <div class="row">
                                    <div class="col-md-3 offset-xl-2 ai-end d-none lg-up-d-f">
                                        <div class="post-teaser__date title-xs">16.10.22</div>
                                    </div>
                                    <div class="col-md-13 col-lg-10 col-xl-8 mb-md md-up-mb-0">
                                        <a href="{{ url('/blog-post') }}" class="d-b"
                                            aria-label="LA PERENNITE DU LIFTING">
                                            <div id="img-300178" class="lazy-image " style="padding-bottom:57%;">
                                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 5530 3296'%3E%3C/svg%3E"
                                                    data-src="https://www.trevidic.com/wp-content/uploads/2022/07/Visage2-812x462.jpg"
                                                    data-srcset="https://www.trevidic.com/wp-content/uploads/2022/07/Visage2-406x231.jpg 406w, https://www.trevidic.com/wp-content/uploads/2022/07/Visage2-812x462.jpg 812w"
                                                    sizes="(max-width: 639px) 406px, 812px" width="5530" height="3296"
                                                    alt="" class="lazy-image__img">
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="post-teaser__metas col-md-11 col-lg-10 col-xl-8 offset-lg-1 d-f fd-column">
                                        <div class="post-teaser__metas__top">
                                            <h3 class="post-teaser__title title-md tt-u fw-300">
                                                <a href="{{ url('/blog-post') }}"
                                                    class="d-b">THE LASTING QUALITIES OF THE FACELIFT</a>
                                            </h3>
                                            <div class="post-teaser__date title-xs md-up-d-none mb-sm md-up-mb-0">
                                                16.10.22</div>
                                            <p class="post-teaser__excerpt mb-sm lg-up-mb-0"></p>
                                        </div>
                                        <div class="post-teaser__metas__bottom mb-0 mt-auto">
                                            <a href="{{ url('/blog-post') }}"
                                                class="btn">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="load-more-container mt-md">
                        <div class="ta-c load-more">
                            <a href="{{ url('/blog-post') }}"
                                class="btn load-more-btn ab-item">SEE MORE</a>
                        </div>
                   
                    </div>
                </section>
            </main>
 
@stop