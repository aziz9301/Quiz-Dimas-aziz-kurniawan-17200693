<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('user/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        D-Lemas
                    </th>

                </tr>
                <tr>
                    <th colspan="3">
                        Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" value="<?= set_value('nama') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('nama') ?>
                </td>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis" value="<?= set_value('nis') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('nis') ?>
                </td>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="k" id="k" value="<?= set_value('k')?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('k') ?>
                </td>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="ultah" id="ultah" value="<?= set_value('ultah') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('ultah') ?>
                </td>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tl" id="tl" value="<?= set_value('tl') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('tl') ?>
                </td>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                </td>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki" <?php echo  set_radio('jk', 'Laki-Laki'); ?> >
                        <label for="jk">Laki-Laki</label><br>
                        <input type="radio" name="jk" value="Perempuan" <?php echo  set_radio('jk', 'Perempuan'); ?> >
                        <label for="jk">Perempuan</label><br>
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('jk') ?>
                </td>
                <tr>
                    <!-- Error Dsisini -->
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam" <?php echo set_select('agama', 'Islam') ?>>Islam</option>
                            <option value="Kristen" <?php echo set_select('agama', 'Kristen') ?>>Kristen</option>
                            <option value="Katolik" <?php echo set_select('agama', 'Katolik') ?>>Katolik</option>
                            <option value="Budha" <?php echo set_select('agama', 'Budha') ?>>Budha</option>
                            <option value="Hindu" <?php echo set_select('agama', 'Hindu') ?>>Hindu</option>
                            <option value="Protestan" <?php echo set_select('agama', 'Protestan') ?>>Protestan</option>
                            <option value="Konghucu" <?php echo set_select('agama', 'Konghucu') ?>>Konghucu</option>
                        </select>
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?php echo form_error('agama');?>
                </td>
                <tr>
                    <td colspan="3" align="center">
                        <input class="button button-primary" type="submit" value="Submit">
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>