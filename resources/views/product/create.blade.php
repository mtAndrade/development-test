@extends("templates.main")

@section("content")
    <div class="row  col m8 offset-m2">
        <form class="col m12 l12 s12" action="{{action("ProductController@store")}}" @submit.prevent="store">
            {{csrf_field()}}
            <div class="row">
                <h4>Criar produto</h4>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="text"
                           class="validate"
                           name="name"
                           v-model="name">
                    <label for="icon_prefix">Nome</label>
                    <span class="red-text">@{{ errors.name }}</span>
                </div>
                <div class="input-field col s4">
                    <input type="text"
                           class="validate"
                           name="price"
                           v-model="price">
                    <label for="icon_telephone">Preço</label>
                    <span class="red-text">@{{ errors.price }}</span>

                </div>
                <div class="input-field col s4">
                    <input type="number"
                           class="validate"
                           name="in_stock"
                           v-model="in_stock">
                    <label for="icon_telephone">Em estoque</label>
                    <span class="red-text">@{{ errors.in_stock }}</span>

                </div>
                <div class="row">
                    <button type="submit" class="teal waves-effect waves-light btn">Salvar</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script src="{{asset('js/product/create.js')}}"></script>
@endsection