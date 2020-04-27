<?php foreach ($dataAspirasi as $key) { ?>
    <p>ASPIRASI <?= $key['ASP_ID'] ?> </p>
    <p>&nbsp;</p>
    <p><?= $key['KONTEN'] ?></p>
    <p>&nbsp;</p>
    <table style="height: 27px; width: 328px;">
        <tbody>
            <tr style="height: 26px;">
                <td style="width: 112px; height: 26px;">Nama Pembuat</td>
                <td style="width: 202px; height: 26px;"><?= $key['NAMA'] ?></td>
            </tr>
            <tr style="height: 9px;">
                <td style="width: 112px; height: 9px;">
                    <p>Kategori Aspirasi</p>
                </td>
                <td style="width: 202px; height: 9px;"><?= $key['KAT_NAMA'] ?></td>
            </tr>
            <tr style="height: 9px;">
                <td style="width: 112px; height: 9px;">
                    <p>Ditujukan Untuk</p>
                </td>
                <td style="width: 202px; height: 9px;"><?= $key['OKI_NAMA'] ?></td>
            </tr>
            <tr style="height: 9px;">
                <td style="width: 112px; height: 9px;">
                    <p>Tanggal Dibuat</p>
                </td>
                <td style="width: 202px; height: 9px;"><?= $key['DATE'] ?></td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
<?php } ?>