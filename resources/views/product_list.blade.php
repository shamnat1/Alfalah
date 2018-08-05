@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form class="navbar-form navbar-left" method="GET" action="{{url('product_list')}}">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Product ID" name="product_id">
                            <button class="btn btn-default" type="submit">SUBMIT
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>

                    <div class="product-section container">
                        @foreach($stockList as $product)

                            <div class="product-section-information">
                                <h1 class="product-section-title">{{ $product->StockName }}</h1>
                                <div class="product-section-subtitle">{{ $product->StockCodeTemp }}</div>
                                <div>{!! $product->StockCodeTemp !!}</div>
                                <div class="product-section-price">{{ $product->stockgroup }}</div>

                                <p>
                                    {!! $product->BaseQty !!}
                                </p>

                                <p>&nbsp;</p>

                                {{--@if ($product->TotalQty > 0)
                                    <form action="{{ route('cart.store', $product) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="button button-plain">Add to Cart</button>
                                    </form>
                                @endif--}}
                            </div>
                        @endforeach
                    </div> <!-- end product-section -->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
