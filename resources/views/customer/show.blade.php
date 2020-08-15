@extends('layouts.layout01')


@section('content')
    <div class="alert alert-primary" role="alert">姓名: {{ $customer->姓名 }}</div>
    <div class="alert alert-primary" role="alert">電話: {{ $customer->電話 }}</div>
    <div class="alert alert-primary" role="alert">手機: {{ $customer->手機 }}</div>
    <div class="alert alert-primary" role="alert">傳真: {{ $customer->傳真 }}</div>
    <div class="alert alert-primary" role="alert">電郵: {{ $customer->電郵 }}</div>
    <div class="alert alert-primary" role="alert">地址: {{ $customer->地址 }}</div>
@endsection
