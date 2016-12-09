@extends('dashboard::layouts.master')

@section('content')
    <h1>Új ajánlatkérés hozzáadása</h1>

    {{ Form::open(['url' => 'dashboard/order']) }}

    @include('order::dashboard.partials._form', ['submitButton' => 'Mentés'])
@stop