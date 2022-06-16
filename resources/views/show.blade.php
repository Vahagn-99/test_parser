@extends('layouts.app')

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="card">
            <div class="text-center" style="background-color: rgb(13, 0, 78);color:white">
                <h2>Наименование</h2>
                <p class="p-0 m-0 fs-6"><b>Код: </b> Б0000129</p>
                <p class="p-0 m-0 fs-6"><b>Количество: </b> 1500</p>
                <p class="p-0 m-0 fs-6">Выводить на главной</p>

            </div>
            <div class="row py-3 px-4">
                <div class="col-md-6">
                    <div>
                        <img src="https://dubaitrippackages.files.wordpress.com/2017/11/2-imgdinosaurs_base.jpg"
                            alt="prod_img" style="width:100%;height=auto">
                    </div>
                    <div class="pt-2">
                        <p class="fs-4 text-center p-0 m-0"> <b>Описание</b> </p>

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore, in assumenda facere, sequi
                        quia sit commodi minima quam iure qui magnam labore, nesciunt blanditiis architecto ad saepe sed
                        dicta.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="fs-5 p-0 m-0"><b>Уровень 1</b></p>
                                <p class="fs-6 p-0 m-0">Водосточная система</p>
                            </div>
                            <div class="col-md-4">
                                <p class="fs-5 p-0 m-0"><b>Уровень 2</b></p>
                                <p class="fs-6 p-0 m-0">Аквасток</p>
                            </div>
                            <div class="col-md-4">
                                <p class="fs-5 p-0 m-0"><b>Уровень 3</b></p>
                                <p class="fs-6 p-0 m-0">Import</p>
                            </div>
                        </div>
                        <div class="pt-4">
                            <p class="p-0 m-0 fs-5"><b>Цена: </b> 1230$</p>
                            <p class="p-0 m-0 fs-5"><b>ЦенаСП: </b>2000$</p>
                        </div>
                        <div class="pt-4">
                            <p class="fs-4 text-center p-0 m-0"> <b>Свойства</b> </p>
                            <p> Laboriosam saepe sint a quisquam ab
                                iste in itaque ea officia, quo fuga, soluta repudiandae exercitationem dolor minima
                                similique.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fs-5 p-0 m-0"><b>Совместные покупки</b></p>
                                <p class="fs-6 p-0 m-0">Водосточная система</p>
                            </div>
                            <div class="col-md-6">
                                <p class="fs-5 p-0 m-0"><b>Единица измерения</b></p>
                                <p class="fs-6 p-0 m-0">Аквасток</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    {{-- <th>Код</th>+
    <th>Уровень1</th>+
    <th>Уровень2</th>+
    <th>Уровень3</th>+
    <th>Цена</th>+
    <th>ЦенаСП</th>+
    <th>Количество</th>+
    <th>Поля свойств</th>+
    <th>Совместные покупки</th>+
    <th>Единица измерения</th>+
    <th>Картинка</th>+
    <th>Выводить на главной</th>
    <th>Описание</th>+ --}}
@endsection
