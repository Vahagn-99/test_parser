@extends('layouts.app')

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="card">
            <div class="text-center" style="background-color: rgb(13, 0, 78);color:white">
                <h2>Наименование: {{ $product->denomination }}</h2>
                <p class="p-0 m-0 fs-6"><b>Код: </b> {{ $product->code }}</p>
                <p class="p-0 m-0 fs-6"><b>Количество: </b> {{ $product->total }}</p>
                <p class="p-0 m-0 fs-6">Выводить на главной: {{ $product->show_main }}</p>
            </div>
            <div class="row py-3 px-4">
                <div class="col-md-6">
                    <div>
                        <img src="{{ $product->image }}" alt="{{ $product->denomination }}" class="img-thumbnail"
                            style="max-width:100%;height:auto">
                    </div>
                    <div class="pt-2">
                        <p class="fs-4 text-center p-0 m-0"> <b>Описание</b> </p>
                        {{ $product->description }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="fs-5 p-0 m-0"><b>Уровень 1</b></p>
                                <p class="fs-6 p-0 m-0">{{ $product->level_1 }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="fs-5 p-0 m-0"><b>Уровень 2</b></p>
                                <p class="fs-6 p-0 m-0">{{ $product->level_2 }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="fs-5 p-0 m-0"><b>Уровень 3</b></p>
                                <p class="fs-6 p-0 m-0">{{ $product->level_3 }}</p>
                            </div>
                        </div>
                        <div class="pt-4">
                            <p class="p-0 m-0 fs-5"><b>Цена: </b> {{ $product->price }} $</p>
                            <p class="p-0 m-0 fs-5"><b>ЦенаСП: </b>{{ $product->price_sp }}$</p>
                        </div>
                        <div class="pt-4">
                            <p class="fs-4 text-center p-0 m-0"> <b>Свойства</b> </p>
                            <p> {{ $product->property_fields }}.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fs-5 p-0 m-0"><b>Совместные покупки</b></p>
                                <p class="fs-6 p-0 m-0">{{ $product->joint_purchases }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="fs-5 p-0 m-0"><b>Единица измерения</b></p>
                                <p class="fs-6 p-0 m-0">{{ $product->unit }}</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
