const { createApp } = Vue;

createApp({
    data(){
        return {
            stringArray: []
        }
    },
    methods: {

    },
    mounted(){
        axios.get('./api.php')
        .then(result => {
            this.stringArray = [...result.data];
            console.log("stringArray: ", stringArray);
        })
    }
}).mount('#app')