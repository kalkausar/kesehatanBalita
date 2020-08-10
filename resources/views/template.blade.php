<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Pusat Data Pesebaran Kesehatan Balita</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{url('assets/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css" integrity="sha512-SUJFImtiT87gVCOXl3aGC00zfDl6ggYAw5+oheJvRJ8KBXZrr/TMISSdVJ5bBarbQDRC2pR5Kto3xTR0kpZInA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js" integrity="sha512-G8JE1Xbr0egZE5gNGyUm1fF764iHVfRXshIoUWCTPAbKkkItp/6qal5YAHXrxEu4HNfPTQs6HOu3D5vCGS1j3w==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha512-vBmx0N/uQOXznm/Nbkp7h0P1RfLSj0HQrFSzV8m7rOGyj30fYAOKHYvCNez+yM8IrfnW0TCodDEjRqf6fodf/Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha512-QEiC894KVkN9Tsoi6+mKf8HaCLJvyA6QIRzY5KrfINXYuP9NxdIkRQhGq3BZi0J4I7V5SidGM3XUQ5wFiMDuWg==" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    @include('navbar')

    @yield('content')

    @include('footer')


    <!-- Javascript -->
    <script src="{{url('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
	  <script src="{{url('assets/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/owl-carousel.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/superfish.min.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>


</body>
</html>
