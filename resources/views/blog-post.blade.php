@extends('layouts.default')
@section('content')

<div data-barba="container" data-barba-namespace="news_single">

    @include('includes.head')
    <main id="page-news-single" class="page-offset">

        <section class="section pb-0 md-up-pt-xxl ta-c">
            <div class="container">
                <a href="#" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="4" viewBox="0 0 10 4">
                        <path fill="#272727"
                              d="M10 1.65H2.59C2.947 1 3.125.577 3.143 0 2.331.995 1.276 1.512 0 2c1.276.467 2.285 1.035 3.143 2-.055-.627-.202-1.006-.564-1.695H10z"/>
                    </svg>
                    Back
                </a>
                <div class="title-md fw-300 mt-md">{{$singleBlogPost['published_at']}}</div>
                <h1 class="title-xl tt-u md-up-pt-xl mb-0">{{$singleBlogPost['title']}}</h1>
            </div>
        </section>
        <section class="section pb-0">
            <div class="container">
                <div class="row jc-center">
                    <div class="col-md-20">
                        <div class="cms">

                            <img src="{{ asset('storage/' . $singleBlogPost['banner']) }}" class="text-center" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pb-0">
            <div class="container">
                <div class="row jc-center">
                    <div class="col-md-20">
                        <div class="cms">

                            <div class="block block--wysiwyg">
                                {!!$singleBlogPost['content']!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    @stop
