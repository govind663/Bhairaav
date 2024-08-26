<!-- Basic Page Info -->
<meta charset="utf-8" />

<!-- Meta -->
<meta name="description" content="Bhairaav">
<meta name="author" content="Bhairaav">
<meta name="keywords" content="Bhairaav">

<!-- Title -->
<title>@yield('title')</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="content">
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

<!-- Site favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/src/images/favicon.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/src/images/favicon.png') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/src/images/favicon.png') }}" />

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/core.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}" />

<!-- Datatable CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}" />

<!-- bootstrap-tagsinput css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/style.css') }}" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-GBZ3SGGX85");
</script>

<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
</script>
<!-- End Google Tag Manager -->

<!-- Toaster CSS / JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>