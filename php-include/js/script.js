const app = new Vue(
    {
        el: '#app',
        data:{
            albums: []
        },
        created(){
            axios.get('http://localhost:8888/php-ajax-dischi/php-include/server/controller.php').then(
                (result) =>{
                    this.albums = result.data.results;
                }).cath((error) => {
                    console.warn(error);
                });
        }
    }
)