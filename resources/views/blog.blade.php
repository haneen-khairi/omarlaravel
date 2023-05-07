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
                        @foreach ($blogModel as $singleItemBlog)
                        <div class="blog__post">

                            <div class="post-teaser p-r bg-white ">
                                <div class="row">
                                    <div class="col-md-3 offset-xl-2 ai-end d-none lg-up-d-f">
                                        <div class="post-teaser__date title-xs">{{$singleItemBlog['published_at']}}</div>
                                    </div>
                                    <div class="col-md-13 col-lg-10 col-xl-8 mb-md md-up-mb-0">
                                        <a href="{{ url('/blog-post/' . $singleItemBlog['slug']) }}" class="d-b"
                                            aria-label="THE EYEBROW">
                                            <div id="img-173789" class="lazy-image " style="padding-bottom:57%;">
                                                <img src="{{ asset('storage/' . $singleItemBlog['banner']) }}"
                                                    alt="" class="lazy-image__img">
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="post-teaser__metas col-md-11 col-lg-10 col-xl-8 offset-lg-1 d-f fd-column">
                                        <div class="post-teaser__metas__top">
                                            <h3 class="post-teaser__title title-md tt-u fw-300">
                                                <a href="{{ url('/blog-post/' . $singleItemBlog['slug']) }}"
                                                    class="d-b">{{$singleItemBlog['title']}}</a>
                                            </h3>
                                            <div class="post-teaser__date title-xs md-up-d-none mb-sm md-up-mb-0">
                                                24.02.23</div>
                                            <p class="post-teaser__excerpt mb-sm lg-up-mb-0"></p>
                                        </div>
                                        <div class="post-teaser__metas__bottom mb-0 mt-auto">
                                            <a href="{{ url('/blog-post/' . $singleItemBlog['slug']) }}"
                                                class="btn">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
