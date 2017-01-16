@extends('frontend::layouts.master')

@section('content')
    <div class="row product-show">

            <h1>{{ $product->name }} - <small>Kiszerelés: {{ $product->packings }}</small></h1>

            <p class="">{!! $product->description !!}</p>

        @if(isset($product->table))
            {!! $product->table !!}
        @endif

            <a class="btn btn-danger" href="/termekeink">Vissza a terméklistához</a>
            <a class="btn btn-primary" href="/ajanlatkeres/{{ $product->id }}">Ajánlatkérés</a>
    </div>
@stop