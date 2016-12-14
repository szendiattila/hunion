@extends('dashboard::layouts.master')
@php
$modul = 'product';
$newString = 'Termék';
@endphp
@section('title', config('hunion.title_prefix') . 'Kezelőpult')

@section('content')

    <div class="crud-index-header">
        <h1>Termékek</h1>
        <a class="btn btn-success" href="{{ url('dashboard/product/create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Új termék hozzáadása</a>
    </div>

    @if(count($products) > 0)
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>#</th>
                <th>Megnevezés</th>
                <th>Kép</th>
                <th>Létrehozva</th>
                <th>Legutolsó Módosítás</th>
                <th>Műveletek</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <td><a href="product/{{ $product->id }}/edit">{{ $key + 1 + (($products->currentPage() - 1) * $products->perPage())}}.</a></td>
                    <td>{{ $product->name }}</td>
                    <td><img src="{{asset('images/product/tn-'.$product->image)}}" height="50px"></td>
                    <td>{{ $product->created_at }} - {{ $product->created_at->diffForHumans() }}</td>
                    <td>{{ $product->updated_at }} - {{ $product->updated_at->diffForHumans() }}</td>
                    <td>  @include('dashboard::layouts.partials._row_actions_min',['row_id'=> $product->id]) </td>
                </tr>
            @endforeach
            </tbody>

        </table>

    @else
        <p class="alert alert-danger">Nincs megjelenítendő termék!</p>
    @endif
    <div>

    </div>
    <div class="col-md-4 col-md-offset-4">
        {{ $products->render() }}
    </div>
@stop
