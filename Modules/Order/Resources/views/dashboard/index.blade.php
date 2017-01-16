@extends('dashboard::layouts.master')
@php
$modul = 'order';
@endphp
@section('title', config('hunion.title_prefix') . 'Rendeléskezelő')

@section('content')

    <div class="crud-index-header">
        <h1>Ajánlatkérések</h1>
        <a class="btn btn-success" href="{{ url('dashboard/order/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Új ajánlatkérés hozzáadása</a>
    </div>

    @if(count($orders) > 0)
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>#</th>
                <th>Megnevezés</th>
                <th>Létrehozva</th>
                <th>Legutolsó Módosítás</th>
                <th>Műveletek</th>
            </tr>
            </thead>
            <tbody>
            @php
                $orderCounter = 0;
            @endphp
            @foreach($orders as $order)
                <tr>
                    <td><a href="order/{{ $order->id }}/edit">{{ ++$orderCounter }}</a></td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->created_at }} - {{ $order->created_at->diffForHumans() }}</td>
                    <td>{{ $order->updated_at }} - {{ $order->updated_at->diffForHumans() }}</td>
                    <td>  @include('dashboard::layouts.partials._row_actions_min',['row_id'=> $order->id]) </td>

                </tr>
            @endforeach
            </tbody>

        </table>

    @else
        <p class="alert alert-danger">Nincs megjelenítendő ajánlatkérés!</p>
    @endif
    <div>

    </div>
    <div class="col-md-4 col-md-offset-4">
        {{ $orders->render() }}
    </div>
@stop
