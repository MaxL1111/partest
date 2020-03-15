@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <div class="alert alert-success" role="alert">
        <h5 class="alert-heading">Парсинг сайтов!</h5>
        <hr>
        <p>Цены, статистика и т.д.<br/>
            Даннные в формате excel-таблиц.</p>
    </div>

    @if(!empty($res_pars777555))
        @foreach($res_pars777555 as $key => $value)
            {{$key}} = {{ $value }} <br>
        @endforeach

    @endif

    <hr id="line_main">


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Парсинг сайта www.777555.by</h5>
                    <p><a class="btn btn-info" href="{{'/777555'}}" role="button">Парсить и записать данные в таблицу БД</a></p>
                    <p><a class="btn btn-success" href="{{'/zeonnb/store/'}}" role="button">Экспортировать на сервер в формате exel</a></p>
                    <p><a href="{{'/download/zeon_notebook.xlsx'}}" class="btn btn-primary">Скачать exel-файл</a></p>
                </div>
            </div>
        </div>

        </br>

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Парсинг сайта www.auto.ru</h5>
                    <p><a class="btn btn-info" href="{{'/autoru'}}" role="button">Парсить и записать данные в таблицу БД</a></p>
                    <p><a class="btn btn-success" href="{{'/zeonnb/store/'}}" role="button">Экспортировать на сервер в формате exel</a></p>
                    <p><a href="{{'/download/zeon_notebook.xlsx'}}" class="btn btn-primary">Скачать exel-файл</a></p>
                </div>
            </div>
        </div>
    </div>


@endsection
