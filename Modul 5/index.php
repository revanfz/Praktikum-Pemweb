<form id="form_mahasiswa">
    <label for="prodi">
        Pilih Prodi :
    </label>
    <select id="prodi" name="prodi">
        <option value="semua" default> Semua Prodi </option>
        <option value="IF"> Teknik Informatika </option>
        <option value="TG"> Teknik Geofisika </option>
        <option value="ME"> Teknik Mesin </option>
        <option value="TL"> Teknik Lingkungan </option>
        <option value="TF"> Teknik Fisika </option>
    </select>
</form>

<br />
<br />

<div id="tampil_data"></div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
</script>

<script>
    $(document).ready(function() {
        $("#tampil_data").load("table.php");
        $("#prodi").on('change', function() {
            let data = $("#prodi").val();
            $.ajax({
                type: "POST",
                url: "table.php",
                data: {
                    'prodi': data
                },
                success: function (response) {
                    $("#tampil_data").html(response);
                }
            });
        })
    });
</script>