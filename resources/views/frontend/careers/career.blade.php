@extends('frontend.layouts.master')

@section('title')
    Bhairaav | Career
@endsection

@push('styles')
    <style>
        /* Under Construction Styles */
        .under-construction {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa; /* Light background color */
            text-align: center;
        }

        .under-construction h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .under-construction p {
            font-size: 1.5rem;
            animation: fadeIn 1.5s ease-in-out;
        }

        .construction-icon {
            font-size: 100px; /* Size of the icon */
            color: #ffc107; /* Icon color */
            animation: bounce 1s infinite; /* Bounce animation */
            margin-bottom: 20px;
        }

        .back-home {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-home:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }
    </style>
@endpush

@section('content')
    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_breadcumbs cs_primary_bg cs_bg_filed cs_center"
        data-src="{{ asset('frontend/assets/img/bg/24010.jpg') }}">
        <div class="container">
            <h1 class="cs_white_color text-center mb-0 cs_fs_67">Career</h1>
        </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Under Construction Section -->
    <section class="under-construction">
        <div class="construction-icon">
            🚧 <!-- You can replace this with an actual icon font or image -->
        </div>
        <h1>Under Construction</h1>
        <p>This page is currently under construction. Stay tuned!</p>
        <a href="{{ url('/') }}" class="back-home">Back to Home</a>
    </section>
    <!-- End Under Construction Section -->

@endsection

@push('scripts')
    <script>
    </script>
@endpush
