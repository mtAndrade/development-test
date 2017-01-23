new Vue({
    el: "#main-content",

    data:function(){
        return{
            name:'',
            price:'',
            in_stock:'',
            errors:{}
        }
    },

    methods:{
        store: function() {
            axios.post('store', this.$data)
                .then(response => {
                    Materialize.toast("Produto criado com sucesso", 3000);
                    this.name='';
                    this.price='';
                    this.in_stock='';
                })
                .catch(error => this.errors = error.response.data)
        }
    }
});
