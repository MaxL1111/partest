@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <div class="card mb-3" style="max-width: 590px;">
        <div class="row no-gutters">
            <div class="col-4 col-sm-3 col-md-6 col-lg-4 col-xl-3">
                <img src="{{ URL::to('/images/director.jpg') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-8 col-sm-9 col-md-6 col-lg-8 col-xl-9">
                <div class="card-body">
                    <h5 id="name_director" class="card-title"><span class="name_director">Кулаго Виктор Андреевич</span></h5>
                    <h5 id="discr_director"><small class="text-muted">Генеральный директор КПУП "Гомельское городское ЖКХ"</small></h5>
                </div>
            </div>
        </div>
    </div>

    <p class="text-justify"><strong>Уважаемые гомельчане и гости нашего города! Позвольте мне от имени КПУП "Гомельское
            городское ЖКХ" приветствовать Вас в качестве посетителей официального сайта Гомельского городского ЖКХ.
            <br/>
            Коммунальное производственное унитарное предприятие "Гомельское городское
            ЖКХ" - многоотраслевая
            организация,
            функциональное назначение которой состоит в создании надлежащих условий для жизнедеятельности
            населения,
            предоставляя весь комплекс жилищно-коммунальных услуг.
            <br/>

            <a href="https://rocld.com/ga02v">Скачать с гугл диск</a>
            Ознакомиться с деятельностью предприятий жилищно-коммунального хозяйства города, узнать
            историю нашего предприятия, получить информацию о состоянии культурной и спортивной жизни КПУП
            "Гомельское городское ЖКХ" вы сможете на нашем сайте.
            <br/>
            Надеюсь, что посещение сайта откроет для Вас много нового и интересного о
            жилищно-коммунальном хозяйстве
            города Гомеля.
            <br/>
            Спасибо.
        </strong></p>

    <a class="btn btn-primary" href="{{'/zeonnb/store/'}}" role="button">Загрузить на диск</a>
    <a class="btn btn-primary" href="{{'/zeonnb/export/'}}" role="button">Скачать архив</a>
    <a class="btn btn-primary" href="{{'/777555'}}" role="button">777555</a>
    <br>
    @if(!empty($res_pars777555))
        @foreach($res_pars777555 as $key => $value)
            {{$key}} = {{ $value }} <br>
        @endforeach

    @endif

    <h2>Внимание</h2>

    <hr id="line_main">

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Уважаемые жители!</h5>
                    <p class="card-text">С 4 по 30 октября 2019 года проводится перепись населения!</p>
                    <a href="{{'/download/perepis_nasel.pdf'}}" class="btn btn-primary">Скачать брошюру</a>
                </div>
            </div>
        </div>
        <span class="invisible_symbol">&nbsp</span>

        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Как не стать жертвой кибермошенников!</h5>
                    <p class="card-text">Надежные пароли, безопасный WI-FI...</p>
                    <a href="{{'/download/info_security.pdf'}}" class="btn btn-primary">Скачать брошюру</a>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Подоходный налог с физлиц при сдаче внаем помещений</h5>
                    <p class="card-text">Порядок налогообложения доходов, полученных физическими лицами...</p>
                    <a href="{{'/download/podoh_nalog.pdf'}}" class="btn btn-primary">Скачать брошюру</a>
                </div>
            </div>
        </div>
        <span class="invisible_symbol">&nbsp</span>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Информация о действующих службах</h5>
                    <p class="card-text">Службы, оказывающие медицинскую, социальную и психологическую помощь...</p>
                    <a href="{{'/download/helper_service.pdf'}}" class="btn btn-primary">Скачать брошюру</a>
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
