$(document).ready(function() {
    // Mengatur status tombol upload berdasarkan pemilihan file
    $('#file').change(function() {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    // Menghandle pengiriman form menggunakan AJAX
    $('#upload-form').submit(function(e) {
        e.preventDefault(); // Mencegah form dari pengiriman default

        var formData = new FormData(this); // Mengambil data form

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php', // URL untuk memproses unggahan
            data: formData,
            cache: false,
            contentType: false, // Menghindari pengaturan konten secara otomatis
            processData: false, // Menghindari pemrosesan data secara otomatis
            success: function(response) { // Jika berhasil
                $('#status').html(response); // Menampilkan respon dari server
                $('#file').val(''); // Mengosongkan input file setelah pengunggahan
                $('#upload-button').prop('disabled', true).css('opacity', 0.5); // Menonaktifkan tombol upload
            },
            error: function() { // Jika terjadi kesalahan
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
