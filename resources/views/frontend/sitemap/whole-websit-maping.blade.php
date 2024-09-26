@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Sitemap
@endsection

@push('styles')
    <style>
        /* Basic styling for table-based sitemap */
        .sitemap-table {
            width: 100%;
            border-collapse: collapse;
        }

        .sitemap-table th, .sitemap-table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Indentation for nested elements */
        .sitemap-table td.indent-1 {
            padding-left: 20px;
        }

        .sitemap-table td.indent-2 {
            padding-left: 40px;
        }

        .sitemap-table td.indent-3 {
            padding-left: 60px;
        }

        /* Basic link styling */
        .sitemap a {
            text-decoration: none;
            font-weight: bold;
            color: #302eca;
            transition: color 0.3s;
        }

        .sitemap a:hover {
            text-decoration: underline;
        }

        /* Folder icon for list items */
        .sitemap td::before {
            content: '\1F5C0'; /* folder icon */
            margin-right: 5px;
            color: #ba8d27;
        }

        /* Expand/collapse arrow */
        .sitemap td:has(ul)::after {
            content: '\25B6'; /* right-pointing arrow */
            margin-left: 10px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .sitemap td.open::after {
            transform: rotate(90deg);
        }

        /* Hide nested rows initially */
        .sitemap-table tr.nested {
            display: none;
        }

        .sitemap-table tr.open + tr.nested {
            display: table-row;
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
    <section class="cs_gray_bg text-justify">
        <div class="cs_height_70 cs_height_lg_70"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_45">
                <div class="col-lg-6 justify-content-center align-items-center">
                    <!-- Sitemap Content Start -->
                    <div class="sitemap d-flex justify-content-center align-items-center">
                        <table class="sitemap-table table table-bordered">
                            <tr>
                                <td><a href="{{ route('/') }}" >Home</a></td>
                            </tr>
                            <tr class="expandable">
                                <td>About Us</td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-1"><a href="{{ route('frontend.about.who-we-are') }}">Who We Are</a></td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-1"><a href="{{ route('frontend.about.leadership') }}">Leadership</a></td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-1"><a href="{{ route('frontend.about.our-team') }}">Our Team</a></td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-1"><a href="{{ route('frontend.about.associates') }}">Associates</a></td>
                            </tr>
                            <tr class="expandable">
                                <td>Projects</td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-1">Ongoing Projects</td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-2"><a href="{{ route('frontend.project.ongoing-project.residential-project') }}">Residential Projects</a></td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-2"><a href="{{ route('frontend.project.ongoing-project.commercial-project') }}">Commercial Projects</a></td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-1"><a href="{{ route('frontend.project.completed-project', ['projectId' => '2']) }}">Completed Projects</a></td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-1"><a href="{{ route('frontend.project.upcoming-project') }}">Upcoming Projects</a></td>
                            </tr>
                            <tr class="expandable">
                                <td>Become an Associate</td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-1"><a href="{{ route('frontend.becone-an-associate.channel-partner') }}">Channel Partner</a></td>
                            </tr>
                            <tr class="nested">
                                <td class="indent-1"><a href="{{ route('frontend.becone-an-associate.chanel-refer') }}">Refer a friend</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('frontend.media') }}">Press & Media</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('frontend.blog') }}">Blog</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('frontend.career') }}">Career</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('frontend.contact-us') }}">Contact Us</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('frontend.disclaimer') }}">Disclaimer</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('frontend.privacy-policy') }}">Privacy Policy</a></td>
                            </tr>
                        </table>
                    </div>
                    <!-- Sitemap Content End -->

                </div>
            </div>
        </div>
        <div class="cs_height_70 cs_height_lg_70"></div>
    </section>
    <!-- End Sitemap Section -->

@endsection

@push('scripts')
    <script>
        // JavaScript to handle opening and closing of tree structure in table rows
        document.querySelectorAll('.sitemap-table .expandable').forEach(item => {
            item.addEventListener('click', function (e) {
                // Toggle open class to show or hide nested rows
                this.classList.toggle('open');
                let nextRow = this.nextElementSibling;
                while (nextRow && nextRow.classList.contains('nested')) {
                    nextRow.style.display = nextRow.style.display === 'table-row' ? 'none' : 'table-row';
                    nextRow = nextRow.nextElementSibling;
                }
            });
        });
    </script>
@endpush
