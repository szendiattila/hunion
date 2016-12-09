@extends('frontend::layouts.master')

@section('content')
    <div class="offer-container">

        <h1>Ajánlatkérés a <strong>"{{ $product->name }}"</strong> nevű termékhez</h1>

        {{ Form::open(['url' => '/ajanlatkeres']) }}

        <div class="form-group">
            {{ Form::label('name', 'Név') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Név...']) }}
        </div>

        <div class="form-group">
            {{ Form::hidden('product_id', $product->id) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'E-mail cím') }}
            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail...']) }}
        </div>

        <div class="form-group">
            {{ Form::label('order', 'Ajánlatkérés') }}
            {{ Form::textarea('order', null, ['class' => 'form-control', 'placeholder' => 'Ajánlatkérés tartalma...']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Elküld', ['class' => 'form-control btn btn-primary']) }}
            <a class="btn btn-danger form-control" href="{{ url('/termekeink') }}">Mégse</a>
        </div>

        {{ Form::close() }}

        @include('dashboard::_errors')
    </div>
@stop