@extends("templates.main")

@section("content")
    <ul class="collection with-header col m8 offset-m2">
        <li class="collection-header">
            <div class="row">
                <div class="col m6"><h4>Ordens</h4></div>
            </div>
        </li>
        @foreach($orders as $order)
            <li class="collection-item">
                <div class="row">
                    <div class="col m6"><b>Código de rastreio:</b>{{$order->tracking_code}}</div>
                    <div class="col m6"><b>Valor total:</b>{{$order->total_value}}</div>
                </div>
                <div class="row">
                    Produtos
                    <ul class="collection">
                        @foreach($order->products as $product)
                            <li>
                                <div class="col m6"><b>Quantidade: </b>{{ $product->pivot->quantity }}</div>
                                <div class="col m6"><b>Produto: </b>{{$product->name }}</div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
        @endforeach
    </ul>

@endsection

@section("script")
    <script src="{{asset("js/product/index.js")}}"></script>
@endsection