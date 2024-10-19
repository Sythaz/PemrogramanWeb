$(document).ready(function () {
    // Pada saat submit di klik
    $('#upload-form').submit(function(e) {
        e.preventDefault();

        // Untuk persiapan mengirimkan input data form ke php, karena ajax menggunakan cara ini
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData, // data dikirimkan melalui data: formData
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});