<?php
$pattern = '/[a-z]/';
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Huruf kecil tidak ditemukan!";
}
?>