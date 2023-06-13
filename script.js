const { createApp } = Vue;

createApp({
    data(){
        return {
            toDoList: []
        }
    },
    methods: {
        getTaskTextClass(i){
            if(this.toDoList[i].done){
                return  "text-decoration-line-through";
            }
        },
        getChangeStatusClass(i){
            if(this.toDoList[i].done){
                return  "btn-danger";
            }else{
                return  "btn-success";
            }
        },
        getChangeStatusIcon(i){
            if(this.toDoList[i].done){
                return  "fa-xmark";
            }else{
                return  "fa-check";
            }
        }
        
    },
    mounted(){
        axios.get('./api.php')
        .then(result => {
            this.toDoList = [...result.data];
            console.log("toDoList: ", this.toDoList);
        })
    }
}).mount('#app')