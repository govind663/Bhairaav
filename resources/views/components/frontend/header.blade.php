<header class="cs_site_header cs_style_1 cs_transparent_header cs_primary_color cs_sticky_header">
    <div class="cs_main_header">
        <div class="container">
            <div class="cs_main_header_in">

                <div class="cs_main_header_left">
                    <nav class="cs_nav cs_fs_14 cs_semibold">
                        <ul class="cs_nav_list">
                            {{-- <li><a href='{{ route('/') }}'>Home</a></li> --}}

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
                                <a href='javascript:;'>Projects</a>
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href='javascript:;'>Ongoing Projects</a>
                                        <ul>
                                            <li>
                                                <a href='{{ route('frontend.project.ongoing-project.residential-project') }}'>Residential Projects</a>
                                            </li>
                                            <li>
                                                <a href='{{ route('frontend.project.ongoing-project.commercial-project') }}'>Commercial Projects</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href='javascript:;'>Completed Projects</a>
                                        <ul>
                                            <li>
                                                <a href='{{ route('frontend.project.completed-project', ['projectId' => '2', 'projectType' => '1']) }}'>Residential Projects</a>
                                            </li>
                                            <li>
                                                <a href='{{ route('frontend.project.completed-project', ['projectId' => '2', 'projectType' => '2']) }}'>Commercial Projects</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href='{{ route('frontend.project.upcoming-project') }}'>Upcoming Projects</a>
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

                            <li>
                                <a href='{{ route('frontend.media') }}'>Media</a>
                            </li>

                            <li>
                                <a href='{{ route('frontend.blog') }}'>Blog</a>
                            </li>

                            <li>
                                <a href='{{ route('frontend.contact-us') }}'>Contact</a>
                            </li>

                            {{-- <li>
                                <a href='{{ route('admin.login') }}'>Admin</a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
                <div class="cs_main_header_right">
                    <a class='cs_site_branding' href='{{ route('/') }}'>
                        <img src="{{ asset('frontend/assets/img/Bhairaav-Logo.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
