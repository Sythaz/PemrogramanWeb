<?php
$pattern = '/go{1,3}d/';
$replacement = 'banana';
$text = 'is good';
// $new_text = preg_replace($pattern, $replacement, $text);
// echo $new_text; // Output: "I like banana pie."

// echo "<br>";

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang coock!";
}
?>