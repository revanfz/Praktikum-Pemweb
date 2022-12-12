<table border="1">
    <tr>
        <td> No. </td>
        <td> NIM </td>
        <td> Nama </td>
        <td> Program Studi </td>
    </tr>

    <?php
        include "koneksi.php";

        $prodi = "";
        $query = "SELECT * FROM mahasiswa";

        if (isset($_POST["prodi"])) {
            $prodi = $_POST["prodi"];
            if ($prodi !== "semua") {
                $query .= " WHERE prodi=\"$prodi\"";
            }
        }

        $query .= " ORDER BY nim ASC";

        $result = mysqli_query($connection, $query);
        $i = 0;

        while ($data = mysqli_fetch_array($result)) : $i++;
        ?>

        <tr>
            <td> <?= $i ?> </td>
            <td> <?= $data["nim"] ?> </td>
            <td> <?= $data["nama"] ?></td>
            <td> <?= $data["prodi"] ?></td>
        </tr>
    <?php
        endwhile
    ?>
</table>