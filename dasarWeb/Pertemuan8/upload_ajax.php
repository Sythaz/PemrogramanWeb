<?php
if (isset(($_FILES['file']))) { // formData dari ajax ditangkap oleh $_FILES
    $errors = array();
    $totalFiles = count($_FILES['file']['name']); // Menghitung total inputan

    for ($i=0; $i < $totalFiles; $i++) { 
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_type = $_FILES['file']['type'][$i];
        @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'][$i])) . "");
        
        $extensions = array("png", "jpeg", "jpg", "gif");
    
        if(in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
        }
    
        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }
    
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File berhasil diunggah. <br>";
        } else {
            echo implode(" ", $errors);
        }
    }
}
?>