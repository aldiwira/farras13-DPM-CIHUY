<?php foreach ($dataSaran as $key) { ?>
    <h1>Saran</h1>
    <table style="height: 114px; width: 329px;">
        <tbody>
            <tr style="height: 64.4688px;">
                <td style="width: 315px; height: 64.4688px;" colspan="2">
                    <h3><?= $key->SARAN; ?></h3>
                </td>
            </tr>
            <tr style="height: 21px;">
                <td style="width: 157px; height: 21px;">
                    <p>Nama</p>
                </td>
                <td style="width: 158px; height: 21px;">
                    <p><?= $key->NAMA; ?></p>
                </td>
            </tr>
            <tr style="height: 21px;">
                <td style="width: 157px; height: 21px;">
                    <p>NIM</p>
                </td>
                <td style="width: 158px; height: 21px;">
                    <p><?= $key->NIM; ?></p>
                </td>
            </tr>
            <tr style="height: 22px;">
                <td style="width: 157px; height: 22px;">
                    <p>Tanggal</p>
                </td>
                <td style="width: 158px; height: 22px;">
                    <p><?= $key->DATE; ?></p>
                </td>
            </tr>
        </tbody>
    </table>
<?php } ?>