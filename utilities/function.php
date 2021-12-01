<?php
function stampaDischi($arr)
{
    if (!isset($arr)) {
        return;
    }
    $img = $arr["poster"];
    $title = $arr["title"];
    $author = $arr["author"];
    $year = $arr["year"];
?>


    <div class='col'>
        <div class='card'>
            <img src='<?php echo $img ?>' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'><?php echo $title ?></h5>
                <p class='card-text'><?php echo $author ?></p>
                <p class='card-text'><?php echo $year ?></p>
            </div>
        </div>
    </div>
<?php
}
?>