<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan data siswa</title>

</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampilan Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th text-align ="left">Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td text-align ="left">NIM</td>
                <td>:</td>
                <td>
                    <?= $nim; ?>
                </td>
            </tr>
            <tr>
                <td text-align ="left">Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tanggal_lahir; ?>
                </td>
            </tr>
            <tr>
                <td text-align ="left">Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= $tempat_lahir; ?>
                </td>
            </tr>
            <tr>
                <td text-align ="left">Alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <th text-align ="left">Agama</th>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <th text-align ="left">Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <?= $jenis_kelamin; ?>
                </td>
            </tr>

            <tr>
                <td text-align ="left">SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('siswa'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>