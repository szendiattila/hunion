@extends('dashboard::layouts.master')

@section('content')
    <h1>Ajánlatkérés módosítása</h1>

    {{ Form::model($order,['url' => ['dashboard/order', $order],'method' => 'patch']) }}

    @include('order::dashboard.partials._form', ['submitButton' => 'Módosítás'])
@stop