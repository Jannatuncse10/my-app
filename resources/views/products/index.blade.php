@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 1.2em;">
                    <strong>Product Lists</strong>
                </div>
                <div class="panel-body">
                    @if(count($products))
                        @foreach( $products->chunk(3) as $chunk )
                            <div class="row">
                                @foreach($chunk as $product)
                                    <div class="col-sm-4">
                                        <div class="thumbnail">
                                          <img src="{{ $product->img }}" alt="{{ $product->title }}">
                                          <div class="caption">
                                            <h3>{{ $product->title }}</h3>
                                            <p>
                                                {{ str_limit($product->description, config('myapp.excerpt_length')) }}
                                            </p>
                                            <p>
                                                <a href="{{ route('products.show', $product) }}" class="btn btn-primary btn-sm" role="button">VIEW</a>
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                @endforeach
                            </div>
                        @endforeach
                        <div class="text-center">
                            {{ $products->links() }}
                        </div>
                    @else
                        <h3>no products found!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
