const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl:'./server.php',
            cdList:[]
        }
    },

    methods: {
        getcdList(){
            axios.get(this.apiUrl,{
                params:{}
            })
            .then((response) => {
                console.log(response);
                this.cdList = response.data;
                console.log(this.cdList);
            })
        }
    },
    created() {
      this.getcdList();
    },
}).mount("#App")