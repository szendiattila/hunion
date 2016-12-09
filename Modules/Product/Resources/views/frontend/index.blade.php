@extends('frontend::layouts.master')

@section('content')

        <h1>Termékeink</h1>
        @if(count($products) > 0)
            <div class="card-container">
                @foreach($products as $product)

                        <div class="product-card">
                            <div class="card-header"><h1>{{ $product->name }}</h1></div>
                            <div class="card-content">{{ $product->intro }}</div>
                            <div class="card-footer">

                                <div class="card-footer-item">
                                    <span class="card-button">Kiszerelés: {{ $product->packings }}</span>
                                </div>

                                <div class="card-footer-item">
                                    <a class="btn card-button" href="/termekeink/{{ $product->id }}">
                                        Részletek
                                    </a>
                                </div>

                                <div class="card-footer-item">
                                    <a class="btn card-button" href="/ajanlatkeres/{{ $product->id }}">
                                        Ajánlatkérés
                                    </a>
                                </div>


                            </div>
                        </div>

                @endforeach
            </div>
        @endif

        <div class="pagination-container">
            @include('frontend::layouts.partials._custom_pagination', ['paginator' => $products])
        </div>
@stop