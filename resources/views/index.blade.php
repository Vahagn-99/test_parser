@extends('layouts.app')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Improt CSV file</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('csv_import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="file" name="csv_import" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @error('csv_import')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="d-flex justify-content-end">
        <button class="btn btn-md upload_btn mt-2 @error('csv_import') is-invalid @enderror" style="margin-right:20px"
            data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->denomination }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->price_sp }}</td>
                            <td>{{ $product->total }}</td>
                            <td> <a href="{{ route('scv_show', ['product' => $product->id]) }}"
                                    class="btn btn-success">подробнее
                                    </а>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>

    </div>
@endsection
