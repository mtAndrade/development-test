Vue.component("product",{
    template:
    '<li class="collection-item row" v-show="visible">'+
        '<div class="col m6">{{name}}</div>'+
        '<div class="col m2">{{price}}</div>'+
        '<div class="col m2">{{in_stock}}</div>'+
        '<div class="col m2">'+
            ' <div class="col m6">'+
                '<a class="btn-floating btn-small waves-effect waves-light" @click="deleteProduct">' +
                '<i class="material-icons">delete</i></a>'+
            '</div>'+
            '<div class="col m6">'+
                '<a class="btn-floating btn-small waves-effect waves-light" :href="edit_url">' +
                '<i class="material-icons">mode_edit</i></a>'+
            '</div>'+
        '</div>'+
    '</li>',

    props:['name','price','in_stock','id','edit_url'],

    data:function(){
        return{
            visible:true
        }
    },

    methods:{
        deleteProduct:function () {
            axios.get('product/delete/'+this.id).then(function () {
                this.visible= false;
            }.bind(this))
        }
    }
});

new Vue({
    el:'#main-content',
});

