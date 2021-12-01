<?php
require_once __DIR__ . "/data/dischi_arr.php";
require __DIR__ . "/utilities/function.php"
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once "./components/head.php" ?>

<body>
    <header>
        <?php include_once "components/header.php" ?>
    </header>

    <main>
        <div class="d-flex row-cols-5 flex-wrap w-75 m-auto">
            <?php
            foreach ($dischi as $disco) {
                // $img = $disco["poster"];
                // $title = $disco["title"];
                // $author = $disco["author"];
                // include "components/dischi-container.php";
                stampaDischi($disco);
            }
            ?>
        </div>
    </main>

</body>

</html>