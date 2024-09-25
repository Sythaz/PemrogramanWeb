<?php
    $loremIpsum = "Lorem, ipsum dolor sit amet consectetur adipisicing.
    Soluta, maiores labore! Nam quo dolorum molestiae! Voluptates minima esse, blanditiis ipsa autem odio.
    Nemo laudantium ex consectetur mollitia vero quis.";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
    echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";

?>