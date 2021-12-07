<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/head.php" ?>
</head>

<body>
    <header>
        <?php include_once "components/head.php" ?>
    </header>
    <main class=" container" id="vueContainer">
        <h1>Lista Dischi con Vue</h1>
        <div class="d-flex row-cols-5 flex-wrap w-75 m-auto bg-dark justify-content-center gap-4">
            <div class=" card bg-dark row text-white text-center" v-for="disco in arrDischi">

                <img :src="disco.poster" class="card-img-top" alt="...">
                <div class="card-body">

                    <h5 class="card-title">{{disco.title}}</h5>
                    <p class="card-text">{{disco.author}}</p>
                    <p class="card-text">{{disco.year}}</p>
                </div>
            </div>
        </div>
    </main>


</body>
<script src="datiVue.js"></script>

</html>