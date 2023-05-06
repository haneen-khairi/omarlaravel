@extends('layouts.default')
@section('content')
    <div data-barba="container" data-barba-namespace="templates_contact">
      @include('includes.head') 
        <main id="page-contact" class="contact page-offset">
            <section class="banner w-100 c-white ta-c">
                <div class="banner__bg absolute-full o-h">
                    <div class="banner__bg__inner absolute-full" data-kira-item="parallaxTop"
                        data-bg="assets/img/homepage/homepage6.jpg" data-bg-hidpi="assets/img/homepage/homepage6.jpg"></div>
                </div>
                <div class="container" data-kira-timeline="onload">
                    <h1 class="title-xxl banner__title tt-u mb-md" data-kira-item="splitline" data-splittext="lines, words">
                        Contact us
                    </h1>
                    <div class="item-text" data-kira-item="fadeInUp" data-start="-=1">
                        <div class="row jc-center">
                            <div class="col-lg-12">
                                <div class="banner__text cms fs-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact__infos p-r" data-kira-timeline="onload">
                <div class="contact__container container" data-kira-item="fadeInUp" data-start="+=0.5">
                    <div class="contact__infos__inner bg-white lh-md">
                        <div class="row">
                            <div class="col-md-24 col-lg-22 col-xl-22">
                                <h2 class="title-lg tt-u mb-md lh-md">Send us a message</h2>
                                <div class="contact-form gravity-form-bootstrap materialize-form">
                                    <div class="wpcf7 no-js" id="wpcf7-f546-o1" lang="en-GB" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form action="#" method="post" class="wpcf7-form init"
                                            aria-label="Contact form" novalidate="novalidate" data-status="init">
                                            <div style="display: none">
                                                <input type="hidden" name="_wpcf7" value="546" />
                                                <input type="hidden" name="_wpcf7_version" value="5.7.2" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_GB" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f546-o1" />
                                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                <input type="hidden" name="_wpcf7_recaptcha_response" value="" />
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span class="wpcf7-form-control-wrap" data-name="your-surname"><input
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="First name*" value="" type="text"
                                                            name="your-surname" /></span>
                                                </div>
                                                <div class="col-md-12">
                                                    <span class="wpcf7-form-control-wrap" data-name="your-name"><input
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                            aria-required="true" aria-invalid="false" placeholder="Surname*"
                                                            value="" type="text" name="your-name" /></span>
                                                </div>
                                            </div>

                                            <span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                                    size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Email address*" value="" type="email"
                                                    name="your-email" /></span>

                                            <span class="wpcf7-form-control-wrap" data-name="your-tel"><input
                                                    size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                    aria-required="true" aria-invalid="false" placeholder="Phone number*"
                                                    value="" type="tel" name="your-tel" /></span>

                                            <span class="wpcf7-form-control-wrap" data-name="your-subject"><input
                                                    size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false" placeholder="Subject*"
                                                    value="" type="text" name="your-subject" /></span>

                                            <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                    placeholder="Message" name="your-message"></textarea>
                                            </span>

                                            <div class="ta-c">
                                                <span class="p-r">
                                                    <!-- <input
                              class="wpcf7-form-control has-spinner wpcf7-submit btn-submit-form"
                              type="submit"
                              value="Send"
                            /> -->
                                                    <button class="btn-submit-form">Send</button>
                                                </span>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    @stop
