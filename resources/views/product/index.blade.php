@extends("templates.main")

@section("content")
    <ul class="collection with-header col m8 offset-m2">
        <li class="collection-header">
           <div class="row">
               <div class="col m6"><h4>Produtos</h4></div>
               <div class="col m6">
                   <a class="waves-effect waves-light btn" href="{{action("ProductController@create")}}">Adicionar Produto</a>
               </div>
           </div>
            <div class="row">
                <div class="col m6"><b>Nome</b></div>
                <div class="col m2"><b>Preço</b></div>
                <div class="col m4"><b>Em estoque</b></div>
            </div>
        </li>
        @foreach($products as $product)
            <product
                name="{{$product->name}}"
                price="{{$product->price}}"
                in_stock="{{$product->in_stock}}"
                id="{{$product->id}}"
                edit_url="{{action("ProductController@edit", $product->id)}}"
            ></product>
        @endforeach
    </ul>

@endsection

@section("script")
    <script src="{{asset("js/product/index.js")}}"></script>
@endsection