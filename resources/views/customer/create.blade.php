<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <style>
        table.table>tbody>tr:hover {
            background-color: olivedrab;
        }
    </style>
    <title>Document</title>
</head>
<body>

<div class="container">
    <!--
    <div class="row">
        <div class="col"><?php print_r($data); ?></div>
    </div>
        <div class="row">
        <div class="col"><?php var_dump($errors); ?></div>
    </div>
    -->
    <div class="row" style="margin-top: 1rem;">

        <div class="col">
            <!-- `客戶編號`, `姓名`, `電話`, `手機`, `傳真`, `電郵`, `地址` -->
            <form action=" {{ route('customer.store') }} " method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="姓名">姓名</label>
                    <input type="text" class="form-control @error('姓名') is-invalid @enderror" id="姓名" name="姓名">

                    @error('姓名')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="電話">電話</label>
                    <input type="text" class="form-control" id="電話" name="電話">
                </div>
                <div class="form-group">
                    <label for="手機">手機</label>
                    <input type="text" class="form-control" id="手機" name="手機">
                </div>
                <div class="form-group">
                    <label for="傳真">傳真</label>
                    <input type="text" class="form-control" id="傳真" name="傳真">
                </div>
                <div class="form-group">
                    <label for="電郵">電郵</label>
                    <input type="text" class="form-control" id="電郵" name="電郵">
                </div>
                <div class="form-group">
                    <label for="地址">地址</label>
                    <textarea class="form-control" id="地址" name="地址" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">新增</button>
            </form>
        </div>
    </div>

</div>

<script src="/js/jquery-3.5.1.js"></script>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>

