<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
            <span id="nama-error" style="color: red;"></span>
            <br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <span id="email-error" style="color: red;"></span>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <span id="password-error" style="color: red;"></span>
            <br>
            <input type="submit" value="Submit">
        </form>

        <div id="result" style="color: green;"></div>

        <script>
            $(document).ready(function(){
                $("#myForm").submit(function(event){
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    if (nama == "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email == "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (password.length < 7) {
                        $("#password-error").text("Password harus minimal 8 karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text("");
                    }

                    event.preventDefault();

                    if (valid) {
                        $.ajax({
                            url: 'form_validasi.php',
                            type: 'POST',
                            data: {
                                nama: nama,
                                email: email,
                                password: password
                            },
                           success: function(response) {
                                $("#result").html("Data berhasil dikirim: Nama = " + nama + ", Email = " + email);
                            },
                            error: function() {
                                $("#result").html("Terjadi kesalahan, coba lagi.");
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
