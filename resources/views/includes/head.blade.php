<div class="site-container">
    <header id="header" data-kira-timeline="onload">
        <div class="header-container" data-kira-item="fadeInUp.stagger.sm">
            <div data-stagger-item>
                <a target="_blank" href="{{ url('/') }}" class="item-logo">
                    <!-- Dr. Omar Yousef -->
                    <img src="{{ asset('assets/img/homepage/logo1.png') }}" class="logo-img" alt="" />
                </a>
            </div>
            <nav class="item-nav">
                <ul class="item-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-684"
                        data-stagger-item>
                        <a class="d-b" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63 menu-item-has-children"
                        data-stagger-item>
                        <a class="d-b" href="">Medicine</a>
                        <ul class="sub-menu">
                            <li
                                class="sub-menu-item item-link--2 menu-item menu-item-type-post_type menu-item-object-page menu-item-141">
                                <a class="d-b" href="{{ url('/acid') }}">Hyaluronic acid</a>
                            </li>
                            <li
                                class="sub-menu-item item-link--2 menu-item menu-item-type-post_type menu-item-object-page menu-item-142">
                                <a class="d-b" href="{{ url('/toxic') }}">Botulinum toxin</a>
                            </li>
                            <li
                                class="sub-menu-item item-link--2 menu-item menu-item-type-post_type menu-item-object-page menu-item-143">
                                <a class="d-b" href="{{ url('/acid') }}">Mesotherapy</a>
                            </li>
                            <li
                                class="sub-menu-item item-link--2 menu-item menu-item-type-post_type menu-item-object-page menu-item-144">
                                <a class="d-b" href="{{ url('/acid') }}">Peeling</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-137 menu-item-has-children"
                        data-stagger-item>
                        <a class="d-b" href="">Aesthetic medicine </a>
                        <ul class="sub-menu">
                            <li
                                class="sub-menu-item item-link--2 menu-item menu-item-type-post_type menu-item-object-page menu-item-138">
                                <a class="d-b" href="{{ url('/toxic') }}">Corps</a>
                            </li>
                            <li
                                class="sub-menu-item item-link--2 menu-item menu-item-type-post_type menu-item-object-page menu-item-139">
                                <a class="d-b" href="{{ url('/toxic') }}">Body</a>
                            </li>
                            <li
                                class="sub-menu-item item-link--2 menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
                                <a class="d-b" href="{{ url('/toxic') }}">Face</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-684"
                        data-stagger-item>
                        <a class="d-b" href="{{ url('/blog') }}">Blogs</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25" data-stagger-item>
                        <a class="d-b" href="{{ route('contact-us') }}">Contact</a>
                    </li>
                </ul>
                <div class="lang-container" data-stagger-item>
                    <div class="menu-lang">
                        <span class="active menu-lang__current">AR</span>
                        <ul>
                            <li>
                                <a class="menu-lang__item" href="#">en</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <button class="btn-menu" aria-label="Menu" data-stagger-item>
                <span class="item-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
    </header>
    <div class="submenu-overlay p-f absolute-full bg-black"></div>
    <div id="mobile-menu">
        <div class="item-container container md-up-ta-c">
            <ul>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-684" data-stagger-item>
                    <a class="d-b" href="{{ url('/') }}">Home</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63 menu-item-has-children"
                    data-stagger-item>
                    <a class="d-b" href="">Medicine</a>
                    <ul class="nav-drop">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141">
                            <a class="d-b" href="{{ url('/acid') }}">Hyaluronic acid</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142">
                            <a class="d-b" href="{{ url('/acid') }}">Botulinum toxin</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143">
                            <a class="d-b" href="{{ url('/acid') }}">Mesotherapy</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-144">
                            <a class="d-b" href="{{ url('/acid') }}">Peeling</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-137 menu-item-has-children"
                    data-stagger-item>
                    <a class="d-b" href="">Aesthetic medicine </a>
                    <ul class="nav-drop">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138">
                            <a class="d-b" href="{{ url('/toxic') }}">Corps</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139">
                            <a class="d-b" href="{{ url('/toxic') }}">Body</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
                            <a class="d-b" href="{{ url('/toxic') }}">Face</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-684" data-stagger-item>
                    <a class="d-b" href="{{ url('/blog') }}">Blogs</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25" data-stagger-item>
                    <a class="d-b" href="{{ route('contact-us') }}">Contact</a>
                </li>
                <li class="lang-container" data-stagger-item>
                    <div class="menu-lang">
                        <span class="active menu-lang__current">AR</span>
                        <ul>
                            <li>
                                <a class="menu-lang__item" href="#">en</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
