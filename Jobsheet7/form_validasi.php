<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi Password dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi Password dan AJAX</h1>

    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (e) {
                e.preventDefault(); // Mencegah pengiriman form langsung
                
                // Validasi sederhana
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Reset pesan error
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!validateEmail(email)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                }

                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                }

                
                if (valid) {
                    var formData = $("#myForm").serialize(); 

                    $.ajax({
                        url: "proses_validasi.php", 
                        type: "POST",
                        data: formData,
                        success: function (response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        },
                        error: function () {
                            // Tampilkan pesan error jika AJAX gagal
                            $("#hasil").html("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });

            // Fungsi validasi email
            function validateEmail(email) {
                var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(String(email).toLowerCase());
            }
        });
    </script>
</body>
</html>
