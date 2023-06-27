<html>

<head>
    <title>Invoice Pembayaran Anda</title>
    <style>
        #tabel {
            font-size: 15px;
            border-collapse: collapse;
        }

        #tabel td {
            padding-left: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body style='font-family:tahoma; font-size:8pt;'>
    <?php foreach ($transaksi as $tr) : ?>
        <center>
            <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
                <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                    <span style='font-size:12pt'><b>Tenancy Rentcars</b></span></br>
                    JL.Raya Pasundan Blok F7 </br>
                    Telp : +021-4140234
                </td>
                <td style='vertical-align:top' width='30%' align='left'>
                    <b><span style='font-size:12pt'>INVOICE PEMBAYARAN</span></b></br>
                    Customer Name : <?php echo $tr->nama ?></br>
                    Tgl Rental :<?php echo $tr->tanggal_rental ?></br>
                </td>
            </table>
            <table cellspacing='0' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>

                <tr align='center'>
                    <td width='10%'>Merk Mobil</td>
                    <td width='20%'>Tgl Kembali</td>
                    <td width='13%'>Harga Sewa/Day</td>
                    <td width='4%'>Jumlah Hari Sewa</td>
                    <td width='7%'>Discount</td>
                    <td width='13%'>Total Harga</td>
                <tr>
                    <td>T501F</td>
                    <td>Asus Zenfone 5</td>
                    <td>Rp2.400.000,00</td>
                    <td>1</td>
                    <td>Rp0,00</td>
                    <td style='text-align:right'>Rp2.400.000,00</td>
                <tr>
                    <td>T12</td>
                    <td>Tinta</td>
                    <td>Rp60.000,00</td>
                    <td>1</td>
                    <td>Rp0,00</td>
                    <td style='text-align:right'>Rp60.000,00</td>
                </tr>

                <tr>
                    <td colspan='5'>
                        <div style='text-align:right'>Total Yang Harus Di Bayar Adalah : </div>
                    </td>
                    <td style='text-align:right'>Rp2.460.000,00</td>
                </tr>
                <tr>
                    <td colspan='6'>
                        <div style='text-align:right'>Terbilang : Dua Juta Empat Ratus Enam Puluh Ribu Rupiah</div>
                    </td>
                </tr>
                <tr>
                    <td colspan='5'>
                        <div style='text-align:right'>Cash : </div>
                    </td>
                    <td style='text-align:right'>Rp2.460.000,00</td>
                </tr>
                <tr>
                    <td colspan='5'>
                        <div style='text-align:right'>Kembalian : </div>
                    </td>
                    <td style='text-align:right'>Rp0,00</td>
                </tr>
                <tr>
                    <td colspan='5'>
                        <div style='text-align:right'>DP : </div>
                    </td>
                    <td style='text-align:right'>Rp0,00</td>
                </tr>
                <tr>
                    <td colspan='5'>
                        <div style='text-align:right'>Sisa : </div>
                    </td>
                    <td style='text-align:right'>Rp0,00</td>
                </tr>
            </table>

            <table style='width:650; font-size:7pt;' cellspacing='2'>
                <tr>
                    <td align='center'>Diterima Oleh,</br></br><u>(............)</u></td>
                    <td style='border:1px solid black; padding:5px; text-align:left; width:30%'></td>
                    <td align='center'>TTD,</br></br><u>(...........)</u></td>
                </tr>
            </table>
        </center>
    <?php endforeach; ?>
</body>

</html>