@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 1.2em;">
                    <strong>{{ $product->title }}</strong>
                    <a href="{{ route('products.index') }}" class="btn btn-default btn-sm pull-right">
                        Back
                    </a>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ $product->img }}" class="thumbnail" alt="">
                        </div>
                        <div class="col-md-6">
                             <h3>{{ $product->title }}</h3>
                             <p>
                                 {{ $product->description }}
                             </p>
                             <hr>
                             <p>
                                 <ul class="list-inline">
                                     <li class="list-item">
                                         <strong>Stock:</strong>&nbsp;{{ $product->stock }}
                                     </li>
                                     <li class="list-item pull-right">
                                         <button class="btn btn-sm btn-{{ $stock = $product->status ?'primary':'danger' }}">
                                             {{ $stock ? 'In Stock' : 'Out of Stock' }}
                                         </button>
                                     </li>
                                 </ul>
                             </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
