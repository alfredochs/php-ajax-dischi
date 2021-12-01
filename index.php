<?php
require_once __DIR__ . "/data/dischi_arr.php"
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once "./components/head.php" ?>

<body>
    <header>
        <?php include_once "components/header.php" ?>
    </header>

    <main>
        <div class="d-flex row-cols-5 flex-wrap">

            <?php
            foreach ($dischi as $disco) {
                $img = $disco["poster"];
                $title = $disco["title"];
                $author = $disco["author"];
                include "components/dischi-container.php";
            }

            ?>
        </div>
    </main>

</body>

</html>