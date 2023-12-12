<!-- Title -->
<title>@yield("title")</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('frontend/images/favicon1.png') }}" type="image/x-icon" />
<!-- Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
@yield('css')
<link href="{{ URL::asset('css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">
<!--- Style css -->
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
<!--- Style css -->
<link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
@livewireStyles
