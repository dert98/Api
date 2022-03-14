<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://dert98.github.io/Porfolio/global.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container" id="root">
        <div class="grid-menu" id="">
            <label for="">class_alias</label>
            <div v-for="producto in filtrados">
                <div class="menu-item">
                    <div class="img-prod">
                        <div class="icon-img-prod"></div>
                        <img class="img-thumbnail" loading="lazy" :src="`images/${producto.id}.jpg`">
                    </div>
                    <div class="nom-prod">{{producto.nombre}}</div>
                    <div class="precio-prod">${{producto.precio}}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- App VueJs -->
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>