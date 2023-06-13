<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>ToDoList JSON</title>
</head>

<body>

    <div id="app">
        <div class="container">
            <div class="my-task-box mt-5">
                <h1 class="title text-center">ToDo List</h1>
                <div class="my-task-list rounded-3">
                    <ul>
                        <li v-for="(task, i) in toDoList" class="d-flex justify-content-between align-items-center" :class="getTaskTextClass(i)">
                            {{ task.task }}
                            <div class="my-task-button">
                                <button class="btn me-2" :class="getChangeStatusClass(i)" @click="changeTaskStatus(i)"><i class="fa-solid" :class="getChangeStatusIcon(i)"></i></button>
                                <button class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pencil"></i></button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICA TASK</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>VECCHIO TESTO:</p>
                                                <p>{{ task.task }}</p>
                                                <input type="text" class="form-control" placeholder="Inserisci il nuovo testo" v-model="editTaskText">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">CHIUDI</button>
                                                <button type="button" class="btn btn-primary w-25" data-bs-dismiss="modal" @click="editTask(i)">CAMBIA</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-dark" @click="deleteTask(i)"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Inserisci elemento..." v-model="newTaskText">
                    <button type="submit" class="btn btn-outline-warning px-4" @click="addTask">Inserisci</button>
                </div>
            </div>

        </div>
    </div>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>