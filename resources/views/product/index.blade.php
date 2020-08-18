@extends('layouts.layout01')

@section('content')

    <div class="row">
        <div class="col">
            {{ $products->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

    <!-- `商品編號`, `品名`, `分類`, `材質`, `面漆`, `售價` -->
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">商品編號</th>
            <th scope="col">品名</th>
            <th scope="col">材質</th>
            <th scope="col">面漆</th>
            <th scope="col">售價</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->商品編號 }}</td>
            <td>{{ $p->品名 }}</td>
            <td>{{ $p->材質 }}</td>
            <td>{{ $p->面漆 }}</td>
            <td>{{ $p->售價 }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>




@endsection
