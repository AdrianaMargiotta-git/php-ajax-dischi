var app = new Vue ({
    el: "#app",
    data:{
        database: [],
        singerAttuale: "all"
    },
    mounted: function() {
       axios
       .get('data.php')
       .then(response => {
           this.database = response.data;
       });
    },
    methods: {
        selectSinger () {
            axios.get('data.php')
            .then(response => {
                if (this.singerAttuale !== "All") {
                    response.data = response.data.filter(element => element.author === this.singerAttuale);
                }
                this.database = response.data
            })
        }
    }
});