const { createApp } = Vue;

createApp({
    data(){
        return {
            apiURL: './api.php',
            toDoList: [],
            newTaskText: ""
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
        },
        getData(){
            axios.post(this.apiURL)
            .then(result => {
                this.toDoList = [...result.data];
                console.log("toDoList: ", this.toDoList);
            })
        },
        sendData(data){
            axios.post(this.apiURL, data, {
                headers: { 'Content-Type': 'multipart/form-data' }})
            .then(result => {
                this.toDoList = [...result.data];
                console.log("toDoList: ", this.toDoList);
            })
        },
        addTask(){
            const data = {
                task: this.newTaskText
            }

            this.sendData(data);
        }

        
    },
    mounted(){
        this.getData();
    }
}).mount('#app')