@extends("templates.main")

@section("content")
    <!-- Fiz essa chamada sem view só pra demonstrar como eu geralmente faço usando somente laravel -->

    <div class="row  col m8 offset-m2">
        <form class="col m12 l12 s12" action="{{action("ProductController@update",$product->id)}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <h4>Editar produto</h4>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="text"
                           class="validate"
                           name="name"
                           @if(isset($product)) value="{{$product->name}}" @else value="{{Input::old('name')}}"@endif
                           >
                    <label for="icon_prefix">Nome</label>
                    <span class="erro">{{$errors->first('name')}}</span>
                </div>
                <div class="input-field col s4">
                    <input type="text"
                           class="validate"
                           name="price"
                           @if(isset($product)) value="{{$product->price}}" @else value="{{Input::old('price')}}"@endif
                           >
                    <label for="icon_telephone">Preço</label>
                    <span class="erro">{{$errors->first('price')}}</span>
                </div>
                <div class="input-field col s4">
                    <input type="number"
                           class="validate"
                           name="in_stock"
                           @if(isset($product)) value="{{$product->in_stock}}" @else value="{{Input::old('in_stock')}}"@endif
                           >
                    <label for="icon_telephone">Em estoque</label>
                    <span class="erro">{{$errors->first('in_stock')}}</span>
                </div>
                <div class="row">
                    <button type="submit" class="teal waves-effect waves-light btn">Salvar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
