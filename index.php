<?php
/*
 *
 * Small Application that collects a piece of text into an array
 * Counts the total words, then all the unique words
 * Iterates through multiplying by the repeats
 * to show the total character occurrence
 *
 * Folders To Ignore
 * /tests - Random Test Cases
 * /views - Aesthetics
 *
 * Textarea is display only
 *
 */

require("classes/App.php");

require("views/header.php");
require("views/main.php");

$app = new App();
$wordCount = $app->wordCount();
$charCount = $app->charCount();

?>

<div class="container">
    <table class="table">

        <thead>
        <tr>
            <th>Letter</th>
            <th>Occurrence</th>

        </tr>
        </thead>
        <tbody>

<?php foreach ($charCount as $i => $val) : ?>


        <tr>
            <td><?php echo chr($i); ?></td>
            <td><?php echo $val; ?></td>
        </tr>


<?php endforeach; ?>

    </tbody>
    </table>
</div>

<?php

require("views/footer.php");

