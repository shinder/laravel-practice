@extends('layouts.layout01')

@section('content')
    <?php  //print_r($sess) ?>
    <div class="row">
        <div class="col d-flex justify-content-end">
            <form class="form-inline my-2 my-lg-0">
                <b>€ 10</b> <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> <b>€ 1000</b>
                <input class="form-control mr-sm-1" type="number" step="500"
                       value="{{ $minPrice }}"
                       placeholder="最低價格" name="minPrice">-
                <input class="form-control mr-sm-1" type="number" step="500"
                       value="{{ $maxPrice }}"
                       placeholder="最高價格" name="maxPrice">
                &nbsp;&nbsp;&nbsp;
                <input class="form-control mr-sm-2" type="search"
                       name="search" value="{{ $search }}"
                       placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            {{ $products->appends([
                'search' => $search,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
            ])->links('vendor.pagination.bootstrap-4') }}
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

@section('scripts')
<script>
    $("#ex2").slider({});
</script>
@endsection
