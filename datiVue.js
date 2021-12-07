new Vue({
    el: "#vueContainer",
    data : {
        arrDischi: [],
    },
    mounted(){
        axios.get("http://localhost:8888/php-dischi/api/dischi.php").then((resp) => {
            this.arrDischi = resp.data.listaDischi;
        })
    }
})