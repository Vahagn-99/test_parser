@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end">
        <button class="btn btn-md upload_btn mt-2" style="margin-right:20px">
            <img class="pb-1 " src="{{ asset('images/upload.svg') }}" width="20px" height="auto">
            Upload File
        </button>
    </div>
    <div class="col-md-12 px-5 mt-4">
        <div style="overflow-x:auto;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Код</th>
                        <th>Наименование</th>
                        <th>Цена</th>
                        <th>ЦенаСП</th>
                        <th>Количество</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td> <button class="btn btn-success">13</button> </td>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>



    {{-- <div class="ml-12">
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            <form action="{{ route('csv_import') }}" method="post">
                @csrf
                <input type="file" name="csv_import" id="" class="form-control">
            </form>
        </div>
    </div> --}}
@endsection
