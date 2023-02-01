<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>To Do List json</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="container-modificabile  mt-5">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center mt-5">
                        <h1>Lista della Spesa</h1>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <ul class="list-unstyled">
                            <li v-for="item in todolist" class="my-2">
                                {{item.name}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-6">
                        <input type="text" v-model="name" class="ms-2 form-control" placeholder="Aggiungi prodotto" >
                        <!-- mi ero dimenticato il V-MODEL -->
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary" @click="add">Aggiungi</button>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/script.js"></script>    
</body>
</html>