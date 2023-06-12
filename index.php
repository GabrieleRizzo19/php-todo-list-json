<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>ToDoList JSON</title>
</head>
<body>
    
    <div id="app">
        <div class="container">
            <h1>DATI RECUPERATI DALL'API</h1>
            <template v-for="stringa in stringArray">
                <p> {{ stringa }} </p>
            </template>
        </div>
    </div>
    
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>