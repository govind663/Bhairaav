<style>
    .is-invalid {
        border-color: #dc3545; /* Bootstrap's red color for errors */
    }

    .invalid-feedback {
        color: #dc3545; /* Match the border color */
        font-size: 0.875em; /* Adjust font size as needed */
    }
</style>
<footer class="cs_footer cs_primary_bg cs_ternary_color">
    <div class="cs_footer_main">
        <div class="container">
            {{-- <div class="cs_footer_grid_4 pb-4">
                <div class="cs_footer_grid_item">
                    <div class="cs_footer_item">
                        <div class="cs_text_widget">
                            <a class='cs_site_branding' href='{{ route('/') }}'>
                                <img src="{{ asset('frontend/assets/img/Bhairaav-Logo.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="cs_footer_grid_4">
                <div class="cs_footer_grid_item">
                    <div class="cs_footer_item">
                        <h2 class="cs_widget_title cs_bold cs_fs_21 cs_white_color"><span>Contact Us</span></h2>
                        <ul class="cs_menu_widget cs_mp0">
                            <li class="cs_white_color">
                                1003, 10th Floor,<br>
                                Raheja Center,<br>
                                Free Press Journal Marg,<br>
                                Nariman Point - 400021
                            </li>
                            <li class="cs_white_color">
                                <a href="tel:+919322225030">
                                    +91 90711 23428
                                </a>
                            </li>
                            <li class="cs_white_color">
                                <a href="mailto:sales@bhairaav.com">
                                    sales@bhairaav.com
                                </a>
                            </li>
                        </ul>
                        <div class="cs_social_btns cs_style_1">
                            <a href="https://www.instagram.com/bhairaav.group/" target="_blank" class="cs_center">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com/BhairaavGroup" target="_blank" class="cs_center">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCE4JeJCeI-PKGbcc1mEMhTw" target="_blank" class="cs_center">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="https://www.facebook.com/bhairaav/" target="_blank" class="cs_center">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/bhairaav-group/" target="_blank" class="cs_center">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cs_footer_grid_item">
                    <div class="cs_footer_item">
                        <h2 class="cs_widget_title cs_bold cs_fs_21 cs_white_color"><span>Links</span></h2>
                        <ul class="cs_menu_widget cs_mp0">
                            <li><a href='{{ route('/') }}'>Home</a></li>
                            <li class="menu-item-has-children">
                                <a href='javascript:;'>About Bhairaav</a>
                                <ul>
                                    <li>
                                        <a href='{{ route('frontend.about.who-we-are') }}'>Who We Are</a>
                                    </li>
                                    <li>
                                        <a href='{{ route('frontend.about.leadership') }}'>Leadership</a>
                                    </li>
                                    <li>
                                        <a href='{{ route('frontend.about.our-team') }}'>Our Team</a>
                                    </li>
                                    <li>
                                        <a href='{{ route('frontend.about.associates') }}'>Associates</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="javascript:;">Become an associate</a>
                                <ul>
                                    <li>
                                        <a href='{{ route('frontend.becone-an-associate.channel-partner') }}'>Channel Partner</a>
                                    </li>
                                    <li>
                                        <a href='{{ route('frontend.becone-an-associate.chanel-refer') }}'>Refer a friend</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cs_footer_grid_item">
                    <div class="cs_footer_item">
                        <h2 class="cs_widget_title cs_bold cs_fs_21 cs_white_color"><span>Projects</span></h2>
                        <ul class="cs_menu_widget cs_mp0">
                            <li >
                                <a href='javascript:;'>Ongoing Projects</a>
                                <ul class="menu-item-has-children">
                                    <li>
                                        <a href='{{ route('frontend.project.ongoing-project.residential-project') }}'>Residential</a>
                                    </li>
                                    <li>
                                        <a href='{{ route('frontend.project.ongoing-project.commercial-project') }}'>Commercial</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href='{{ route('frontend.project.completed-project', ['projectId' => '2']) }}'>Completed Projects</a>
                            </li>
                            <li>
                                <a href='{{ route('frontend.project.upcoming-project') }}'>Upcoming Projects</a>
                            </li>
                            <li><a href='{{ route('frontend.career') }}'>Career</a></li>
                            <li><a href='{{ route('frontend.media') }}'>Recognition</a></li>
                            <li><a href='{{ route('frontend.blog') }}'>Blog</a></li>
                            <li><a href='{{ route('frontend.contact-us') }}'>Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="cs_footer_grid_item">
                    <div class="cs_footer_item">
                        <h2 class="cs_widget_title cs_bold cs_fs_21 cs_white_color"><span>Subscribe</span></h2>
                        <div class="cs_newsletter cs_style_1 cs_color_1">
                            <form method="POST" action="{{ route('frontend.subscribe-us') }}" class="cs_newsletter_form position-relative" enctype="multipart/form-data">
                                @csrf

                                <input type="email" id="email" name="email" value="{{ old('email') }}" class=" @error('email') is-invalid @enderror cs_newsletter_input cs_radius_5" placeholder="Enter Your Email Address">
                                <button class="cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15" type="submit">
                                    Subscribe
                                    <span>
                                        <i>
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                    fill="currentColor">
                                                </path>
                                            </svg>
                                        </i>
                                        <i>
                                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z"
                                                    fill="currentColor">
                                                </path>
                                            </svg>
                                        </i>
                                    </span>
                                </button>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </form>
                            <p class="cs_newsletter_subtitle cs_ternary_color cs_mb_30">
                                Your Dose of
                                Knowledge and
                                Inspiration
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_bottom_footer_wrap">
        <div class="container">
            <div class="cs_bottom_footer position-relative">
                <div class="cs_copyright">© Copyright {{ date('Y') }} Bhairaav | Designed By
                    <a href="https://www.matrixbricks.com/" target="_blank">Matrix Bricks.</a> All Rights Reserved
                </div>
                <span class="cs_scrollup cs_center">
                    <svg width="15" height="7" viewBox="0 0 15 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 6.18793L14.1169 7L7.93687 1.31723C7.81958 1.20941 7.66053 1.14885 7.49468 1.14885C7.32884 1.14885 7.16978 1.20941 7.0525 1.31723L0.884376 6.99022L0 6.177L6.16812 0.505163C6.51998 0.181708 6.99715 0 7.49468 0C7.99222 0 8.46938 0.181708 8.82125 0.505163L15 6.18793Z"
                            fill="white" />
                    </svg>
                    <span class="cs_scrollup_bg_dotted cs_accent_color">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="28" cy="28" r="27.5" stroke="currentColor"
                                stroke-dasharray="5 5" />
                        </svg>
                    </span>
                </span>
                <div class="cs_bottom_footer_right">
                    <ul class="cs_footer_links cs_mp_0">
                        <li>
                            <a href="{{ route('frontend.disclaimer') }}">Disclaimer </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.privacy-policy') }}">Privacy Policy </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.sitemap') }}">Sitemap</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
