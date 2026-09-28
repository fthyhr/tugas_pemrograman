<!DOCTYPE html>
<html>
<head>
    <title>Hasil Biodata Mahasiswa</title>
</head>
<body>
    <h2>Hasil Biodata Mahasiswa</h2>

    <?php
    if (isset($_POST['Pilih'])) {
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $jk = $_POST['jk'];
        $jurusan = $_POST['jurusan'];

        echo "<b>Nama          :</b> $nama<br>";
        echo "<b>NPM           :</b> $npm<br>";
        echo "<b>Jenis Kelamin :</b> $jk<br>";
        echo "<b>Jurusan       :</b><font color='blue'>$jurusan</font><br><br>";


        echo "Mata kuliah Favorit :<br>";
        if (isset($_POST['mk1'])) {
            echo "+ " . $_POST['mk1'] . "<br>";
        }
        if (isset($_POST['mk2'])) {
            echo "+ " . $_POST['mk2'] . "<br>";
        }
        if (isset($_POST['mk3'])) {
            echo "+ " . $_POST['mk3'] . "<br>";
        }
        if (isset($_POST['mk4'])) {
            echo "+ " . $_POST['mk4'] . "<br>";
        }
        if (isset($_POST['mk5'])) {
            echo "+ " . $_POST['mk5'] . "<br>";
        }
    }
    ?>
    <br>
    <a href="index.html">Kembali ke Form</a>
</body>
</html>
