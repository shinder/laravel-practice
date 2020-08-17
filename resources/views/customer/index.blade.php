@extends('layouts.layout01')

@section('content')
    <div class="row" style="margin: 5px 0;">
        <div class="col d-flex justify-content-end">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search"
                       value="{{ $search }}"
                       name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>客戶編號</th>
                    <th>姓名</th>
                    <th>電話</th>
                    <th>手機</th>
                    <th>傳真</th>
                    <th>電郵</th>
                    <th>地址</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $c)
                <tr>
                    <td scope="col">{{ $c->客戶編號 }}</td>
                    <td scope="col">{{ $c->姓名 }}</td>
                    <td scope="col">{{ $c->電話 }}</td>
                    <td scope="col">{{ $c->手機 }}</td>
                    <td scope="col">{{ $c->傳真 }}</td>
                    <td scope="col">{{ $c->電郵 }}</td>
                    <td scope="col">{{ $c->地址 }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <!-- 客製化 pagination -->
        <!-- php artisan vendor:publish --tag=laravel-pagination -->
        <div class="col">{{ $customers->appends(['search'=>$search])->links('vendor.pagination.bootstrap-4') }}</div>

    </div>
@endsection
