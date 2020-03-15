<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/app.css" rel="stylesheet">

    <!-- Подключаем иконки -->
    <script src="https://kit.fontawesome.com/59c86a6755.js"></script>


    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</head>
<body>
<div id="main_style" class="container">
    @section('navbar')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <p class="nav-link" href="#"><strong>Парсинг-локальный</strong><span class="sr-only">(current)</span></p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Структура</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'/question'}}">Обратная связь</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>

        <div class="qwe">

        </div>

    @show

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2 col-md-12">
                <div class="row">
                    <div id="left_navbar" class="nav-link font-weight-bold list-group list-group-flush">


                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{'/'}}">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/shop_dress_belarus'}}">База магазинов одежды Беларуси</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/shop_build_belarus'}}">База строительных компаний
                                    Беларуси</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">

                <div class="card-body">
                    @yield('content')
                </div>

            </div>

            <div id="right_navbar" class="col-lg-2 col-md-5">


                <div class="list-group" role="tablist">
                    <a href="http://www.mjkx.gov.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/1mingkh.png') }}" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>

        </div>
    </div>

    @section('footer')

        <div id="footer">

            <p><strong>Официальный сайт по оказанию услуг</strong>
                <br>
                <span id="footer_text_small"
                      class="small">246000, Республика Беларусь</span>
            </p>


            <hr id="line">
            <span id="footer_text_small"><strong>Соглашение о пользовании информационными системами и ресурсами</strong></span>

        </div>


@show

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/ajax.js"></script>

    <script type="text/javascript" src="/js/my.js"></script>


</div>
</body>

</html>