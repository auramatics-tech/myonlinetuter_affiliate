<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="">

<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0,user-scalable=0" />
    <title>TUTORS & STUDENTS | MYONLINETUTOR</title>
    <meta name="description" content="MyOnlineTutor is a new and innovative online tutoring platform that provides you with a one-of-a-kind tutoring experience that includes a smart calendar, quiz creator, video conferencing, chat function and much more.  " />
    <meta name="keywords" content="MyOnlineTutor is a new and innovative online tutoring platform that provides you with a one-of-a-kind tutoring experience that includes a smart calendar, quiz creator, video conferencing, chat function and much more.  " />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="https://myonlinetutor.co/image/show/48/1/MEDIUM" />
    <link rel="shortcut icon" href="https://myonlinetutor.co/image/show/12/0/ORIGINAL">
    <link rel="apple-touch-icon" href="https://myonlinetutor.co/image/show/18/0/LARGE">
    <link rel="canonical" href="http://myonlinetutor.co" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/global.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/common.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/index.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom.css')}}" />
    <style>
        :root {
            --color-primary: #0037B4;
            --color-secondary: #FF5200;
            --color-primary-inverse: #FFFFFF;
            --color-secondary-inverse: #FFFFFF;
            --color-dark-blue: #152352;
            --color-dark-blue-inverse: #FFFFFF;
            --color-dark-yellow: #F2F6E6;
            --color-dark-text: #000000;
            --color-secondary-text: #FF5200;
        }
    </style>
     @yield('css')
</head>

<body class="home home-index " dir="ltr">
    <!-- Custom Loader -->
    <div id="app-alert" class="alert-position alert-position--top-right">
        <alert role="alert" class="alert">
            <alert-icon class="alert__icon"></alert-icon>
            <alert-message class="alert__message">
                <p></p>
            </alert-message>
            <alert-close class="alert__close" onclick="$.appalert.close();"></alert-close>
        </alert>
    </div>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')

    <a href="#top" class="gototop" title="Back to Top"></a>
    <script src="{{asset('frontend/css/index.js')}}"></script>
    <script src="{{asset('frontend/css/index1.js')}}"></script>
    <script src="{{asset('frontend/css/index2.js')}}"></script>
    <script src="{{asset('frontend/css/index3.js')}}"></script>
    @yield('js')
</body>

</html>