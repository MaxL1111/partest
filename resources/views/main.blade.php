@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <div class="alert alert-success" role="alert">
        <h5 class="alert-heading">Приветствуем тебя наш посетитель!</h5>
        <hr>
        <p>Мы оказываем услуги по парсингу сайтов.<br/>
            Даннные будут представлены в удобном для мониторинга формате excel-таблиц.</p>
    </div>

    <a class="btn btn-success" href="{{'/zeonnb/store/'}}" role="button">Экспортировать на сервер</a>

    <a class="btn btn-info" href="{{'/777555'}}" role="button">Парсить зеон</a>
    <br>
    @if(!empty($res_pars777555))
        @foreach($res_pars777555 as $key => $value)
            {{$key}} = {{ $value }} <br>
        @endforeach

    @endif

    <hr id="line_main">

    <h2>Примеры результата парсинга ниже по ссылкам</h2>



    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Парсинг сайта www.777555.by</h5>
                    <p class="card-text">Ниже по ссылке вы можете скачать пробный отчет в формате
                        excel-файла!</p>
                    <a href="{{'/download/zeon_notebook.xlsx'}}" class="btn btn-primary">Скачать файл</a>
                </div>
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Парсинг сайта www.5element.by</h5>
                    <p class="card-text">Ниже по ссылке вы можете скачать пробный отчет в формате
                        excel-файла!</p>
                    <a href="{{'/download/invoices1.xlsx'}}" class="btn btn-primary">Скачать файл</a>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Парсинг сайта www.xxxxx.by</h5>
                    <p class="card-text">Ниже по ссылке вы можете скачать пробный отчет в формате
                        excel-файла!</p>
                    <a href="{{'/download/invoices1.xlsx'}}" class="btn btn-primary">Скачать файл</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Парсинг сайта www.qqqq.by</h5>
                    <p class="card-text">Ниже по ссылке вы можете скачать пробный отчет в формате
                        excel-файла!</p>
                    <a href="{{'/download/invoices1.xlsx'}}" class="btn btn-primary">Скачать файл</a>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Уважаемые жильцы!</h4>
        <hr>
        <p>Ставим вас в известность, что участились случаи, когда представители различных
            коммерческих организаций предлагают услуги по техническому обслуживанию
            электропроводки или выполнению электромонтажных работ, выдавая себя за
            работников РУП «Гомельэнерго» или коммунальных служб.</p>
        <p>
            В связи с этим предупреждаем, что сотрудники энергосберегающей организации
            в лице филиала «Энергосбыт» РУП «Гомельэнерго» при посещении потребителей
            должны быть одеты в спецодежду и иметь при себе служебное удостоверение.
            Акцентируем внимание, что работники РУП «Гомельэнерго» и коммунальных
            служб не предлагают заключить договор на оказание услуг (работ) на
            месте их выполнения, т.е. на объекте потребителя.
        </p>


    </div>

    <br>

    <h2>Услуги</h2>
    <hr id="line_main">

    <div class="list-group">
        <li class="list-group-item list-group-item-success">
            АРЕНДА
        </li>
        <li class="list-group-item text-justify">Гомельский горисполком предлагает к продаже
            и сдаче в аренду ряд объектов недвижимого имущества, подробную информацию Вы можете получить,
            обратившись по телефонам: 21-25-60, 34-16-48.
        </li>
    </div>

@endsection
