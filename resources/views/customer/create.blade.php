@extends('layouts.layout01')

@section('content')
   <div class="row" style="margin-top: 1rem;">
        <div class="col">
            <!-- `客戶編號`, `姓名`, `電話`, `手機`, `傳真`, `電郵`, `地址` -->
            <form action=" {{ route('customer.store') }} " method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="姓名">姓名</label>
                    <input type="text" class="form-control @error('姓名') is-invalid @enderror"
                           value="{{ old('姓名') }}"
                           id="姓名" name="姓名">

                    @error('姓名')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="電話">電話</label>
                    <input type="text" class="form-control"
                           value="{{ old('電話') }}"
                           id="電話" name="電話">
                </div>
                <div class="form-group">
                    <label for="手機">手機</label>
                    <input type="text" class="form-control @error('手機') is-invalid @enderror"
                           value="{{ old('手機') }}"
                           id="手機" name="手機">
                    @error('手機')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="傳真">傳真</label>
                    <input type="text" class="form-control"
                           value="{{ old('傳真') }}"
                           id="傳真" name="傳真">
                </div>
                <div class="form-group">
                    <label for="電郵">電郵</label>
                    <input type="text" class="form-control"
                           value="{{ old('電郵') }}"
                           id="電郵" name="電郵">
                </div>
                <div class="form-group">
                    <label for="地址">地址</label>
                    <textarea class="form-control" id="地址" name="地址" rows="3">{{ old('地址') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">新增</button>
            </form>
        </div>
    </div>
@endsection

