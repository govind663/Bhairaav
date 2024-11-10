@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Sitemap
@endsection

@push('styles')
    <style type="text/css">
        div.footerinfo {
            margin-top: 16px;
            color: #272525;
            font-size: 12px;
            text-align: right;
        }

        div.footerinfo * {
            font-size: 12px;
        }

        .sitemap {
            margin: 5em 0
        }

        .primaryNav {
            clear: both;
            width: 100%;
            margin-top: 3em 0
        }

        .primaryNav #home {
            position: absolute;
            margin-top: -3em;
            margin-bottom: 0;
            min-width: 14.5em;
            width: 100%
        }

        .primaryNav #home:before {
            display: none
        }

        .primaryNav #home.long-cell:before {
            display: block;
            position: absolute;
            border-width: 0;
            border-color: #118bdd;
            border-style: solid;
            z-index: -1;
            border-left-width: 2px;
            border-top-width: 2px;
            top: 1.375em
        }

        @media screen and (max-width:1111px) {
            .primaryNav #home.long-cell:before {
                left: -40px;
                box-shadow: -10px 0 0 0 #fff
            }
        }

        .primaryNav ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            position: relative;
            padding-inline-start: 40px
        }

        .primaryNav li {
            flex: 1;
            flex-basis: 14.5em;
            padding-right: 1.25em;
            position: relative;
            min-width: 14.5em
        }

        .primaryNav li ul li {
            min-width: 12.5em
        }

        .primaryNav li ul li ul li {
            min-width: 10.5em
        }

        .primaryNav>ul>li {
            margin-top: 3em
        }

        .primaryNav li a {
            margin: 0;
            padding: .875em .9375em .9375em .9375em;
            display: block;
            font-size: .9375em;
            background: #fff;
            border: 1px solid #118bdd;
            border-radius: 3px;
            box-shadow: 0 3px 3px #666;
            text-decoration: none
        }

        .primaryNav li a:hover {
            box-shadow: 0 3px 3px 1px #666
        }

        .primaryNav a:link:after,
        .primaryNav a:visited:after,
        .utilityNav a:link:after,
        .utilityNav a:visited:after {
            display: block;
            font-weight: 600;
            font-size: .75em;
            margin-top: .25em;
            word-wrap: break-word;
            color: #666
        }

        .primaryNav ul ul {
            display: block
        }

        .primaryNav ul ul li {
            padding-top: .9875em;
            padding-right: 0
        }

        .primaryNav ul ul li:first-child {
            padding-top: 2em
        }

        .primaryNav ul ul ul {
            margin-top: .6em;
            padding-top: .6em;
            padding-bottom: .625em
        }

        .primaryNav ul ul ul li {
            padding-top: .3125em;
            padding-bottom: .3125em
        }

        .primaryNav ul ul ul li a {
            font-size: .75em;
            padding: .75em;
            min-width: 90%;
            width: auto;
            margin-right: 0;
            margin-left: auto
        }

        .primaryNav ul ul ul li:first-child {
            padding-top: 1em
        }

        .primaryNav ul ul ul li a:link:after,
        .primaryNav ul ul ul li a:visited:after {
            font-size: .75em
        }

        .primaryNav ul ul ul ul {
            margin-top: 0;
            padding-top: .3125em;
            padding-bottom: .3125em
        }

        .primaryNav ul ul ul ul li a {
            padding: .75em;
            min-width: 80%;
            width: auto
        }

        .primaryNav ul ul ul ul li a:link:after,
        .primaryNav ul ul ul ul li a:visited:after {
            display: none
        }

        .primaryNav ul li:after,
        .primaryNav ul li:before,
        .primaryNav ul:after,
        .primaryNav ul:before {
            display: block;
            content: '';
            position: absolute;
            border-width: 0;
            border-color: #118bdd;
            border-style: solid;
            z-index: -2
        }

        .primaryNav>ul>li:before {
            height: 1.375em;
            top: -1.375em;
            right: calc(50% + .625em);
            width: calc(100% - 2px);
            border-top-width: 2px;
            border-right-width: 2px
        }

        .primaryNav>ul>li:first-child+li:before {
            border-top-width: 0;
            height: 5em;
            top: -5em
        }

        .primaryNav ul ul li:after {
            width: 50%;
            height: .9875em;
            top: 0;
            right: 1px;
            border-left-width: 2px
        }

        .primaryNav ul ul li:first-child:before {
            width: 50%;
            height: 1.3125em;
            top: .9875em;
            right: 1px;
            border-left-width: 2px
        }

        .primaryNav>ul>li:last-child:after {
            border-bottom-width: 0
        }

        .primaryNav ul ul ul li:before {
            width: calc(50% - 15px) !important;
            height: calc(100% - 2px);
            top: -50%;
            left: 0;
            border-left-width: 2px;
            border-bottom-width: 2px
        }

        .primaryNav ul ul ul li:first-child:before {
            height: 2.125em;
            top: -1px;
            border-top-width: 2px
        }

        .primaryNav ul ul ul:before {
            width: 50%;
            height: 1.25em;
            top: -10px;
            right: 1px;
            border-left-width: 2px
        }

        .primaryNav ul ul ul li:after {
            border-width: 0
        }

        .primaryNav ul ul ul ul li:before,
        .primaryNav ul ul ul ul li:first-child:before {
            display: none
        }

        .primaryNav ul ul ul ul:before {
            width: 1px;
            height: calc(100% + 2.5em);
            top: -2.5em;
            left: 0;
            border-left-width: 2px
        }

        @media screen and (max-width:30em) {
            .primaryNav ul {
                display: block
            }

            .primaryNav li {
                width: 100%;
                padding-right: 0
            }

            .primaryNav #home {
                width: 100%;
                position: relative;
                margin-bottom: -1em;
                margin-top: 0
            }
        }

        @media screen and (min-width:30em) {
            .primaryNav>ul>li {
                max-width: 50%
            }
        }

        @media screen and (min-width:38.5em) {
            .primaryNav>ul>li {
                max-width: 33%
            }
        }

        @media screen and (min-width:50em) {
            .primaryNav>ul>li {
                max-width: 25%
            }
        }

        @media screen and (min-width:61em) {
            .primaryNav>ul>li {
                max-width: 20%
            }
        }

        @media screen and (min-width:73em) {
            .primaryNav>ul>li {
                max-width: 16.66%
            }
        }

        @media screen and (min-width:84.5em) {
            .primaryNav>ul>li {
                max-width: 14.285%
            }
        }

        @media screen and (min-width:96em) {
            .primaryNav>ul>li {
                max-width: 12.5%
            }
        }

        @media screen and (min-width:107.5em) {
            .primaryNav>ul>li {
                max-width: 11.11%
            }
        }

        @media screen and (min-width:119em){.primaryNav>ul>li{max-width:10%}}a[href$="#"] {
            cursor:default;
            color:#333
        }

        .collapsed_item {
            display: none !important;
            cursor: pointer !important
        }

        .expand_items a{color:#333!important;text-align:center;cursor:pointer!important}a[href$="#"]:not(.collapsed_item, .expand_items a):before {
            content: ""
        }



        .sitemap>li>ul {
            margin-top: 1.5rem;
        }

        .sitemap ul {
            list-style: none;
        }

        .sitemap ul li {
            line-height: 46px;
            vertical-align: top;
            position: relative;
        }

        .sitemap ul li a {
            text-decoration: none;
            color: #01609d;
            display: inline-block;
        }

        .sitemap ul ul {
            margin-left: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .sitemap ul ul li {
            position: relative;
        }

        .sitemap ul ul li::before {
            content: "";
            display: inline-block;
            width: 3rem;
            height: 1.4rem;
            border-bottom: 1px #01609d85 solid;
            position: absolute;
            top: 0.25rem;
        }

        .sitemap ul ul li::before {
            content: "";
            display: inline-block;
            width: 3rem;
            height: 100%;
            border-left: 1px #01609d85 solid;
            position: absolute;
            top: -0.75rem;
        }

        .sitemap ul ul li a {
            margin-left: 3.75rem;
        }
    </style>
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/bg/24010.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Sitemap</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Sitemap Section -->
    <section class="">
        <div class="container">
            <div class="sitemap">
                <ul>
                    <li><a href="{{ route('/') }}">Home</a></li>

                    <li><a href="">About Bhairaav</a>
                        <ul>
                            <li><a href="{{ route('frontend.about.who-we-are') }}">Who We Are</a></li>
                            <li><a href="{{ route('frontend.about.leadership') }}">Our Leaders</a></li>
                            <li><a href="{{ route('frontend.about.our-team') }}">Our Team</a></li>
                            <li><a href="{{ route('frontend.about.associates') }}">Associates</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;" onclick="if (!window.__cfRLUnblockHandlers) return false; return false"
                            data-cf-modified-bd5bfbce5c71f4a42346285f-="">Projects</a>
                        <ul>
                            <li>
                                <a href="javascript:;" onclick="if (!window.__cfRLUnblockHandlers) return false; return false" data-cf-modified-bd5bfbce5c71f4a42346285f-="">Ongoing Project</a>
                                <ul>
                                    <li><a href="{{ route('frontend.project.ongoing-project.residential-project') }}">Residential Project</a></li>
                                    <li><a href="{{ route('frontend.project.ongoing-project.commercial-project') }}">Commercial Projects</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('frontend.project.completed-project', ['projectId' => '2']) }}">Completed Project</a></li>
                            <li><a href="{{ route('frontend.project.upcoming-project') }}">Upcoming Projects</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" onclick="if (!window.__cfRLUnblockHandlers) return false; return false" data-cf-modified-bd5bfbce5c71f4a42346285f-="">Becone An Associate</a>
                        <ul>
                            <li><a href="{{ route('frontend.becone-an-associate.channel-partner') }}r">Channel Partner</a></li>
                            <li><a href="{{ route('frontend.becone-an-associate.chanel-refer') }}">Loyalty Program</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('frontend.media') }}">Recognition</a></li>
                    <li>
                        <a href="{{ route('frontend.blog') }}">Blog</a>
                    </li>
                    <li><a href="{{ route('frontend.contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ route('frontend.career') }}">Career</a></li>
                    <li><a href="{{ route('frontend.disclaimer') }}">Disclaimer</a></li>
                    <li><a href="{{ route('frontend.privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('frontend.sitemap') }}">Sitemap</a></li>
                </ul>
            </div>
        </div>

    </section>
    <!-- End Sitemap Section -->
@endsection

@push('scripts')
@endpush
