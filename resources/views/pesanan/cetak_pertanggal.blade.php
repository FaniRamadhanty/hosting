<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Data Donasi</title>
    <style>
        table tr td {
            font-size: 15px;
        }

        table tr .text {
            text-align: right;
            font-size: 15px;
        }

        table tr .text1 {
            text-align: right;
            font-size: 15px;
        }

        table tr .jumlah {
            font-size: 15px;
        }

        table tr .total {
            padding-left: 20px;
            font-size: 15px;
        }

    </style>
</head>

<body>
    <script language="JavaScript">
        var tanggallengkap = new String();
        var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
        var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
        namabulan = namabulan.split(" ");
        var tgl = new Date();
        var hari = tgl.getDay();
        var tanggal = tgl.getDate();
        var bulan = tgl.getMonth();
        var tahun = tgl.getFullYear();
        tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
    </script>
    <center>
        <table width="710">
            <tr>
                <td><img src="{{ asset('vendor/adminlte/dist/img/logon.png') }}" width="70" height="70"></td>
                <td>
                    <center>
                        <font size="6"><b>Sport Shop</b></font><br>
                        <font size="2"><i>Email: faniramadhanty73@gmail.com, Telepon: +62 895631989279  </i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
        <table width="710">
            <tr>
                <td class="text1">
                    <script language='JavaScript'>
                        document.write(tanggallengkap);
                    </script>
                </td>
            </tr>
        </table>
        <br>
      
        <table border="1px" width="710">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Tanggal</th>
                <th>status</th>

                <th>Kode</th>
                <th>Jumlah Harga</th>
            </tr>
            @php $no=1; @endphp
            @foreach ($pesanan as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->user->name }}</td>
                    <td>{{ date('d-m-Y', strtotime($data->tanggal)) }}</td>
                    <td>{{ $data->status }}</td>
                    <td>{{ $data->kode }}</td>
                    <td>Rp. {{ number_format($data->jumlah_harga) }}</td>

                    </td>
                </tr>
            @endforeach
        </table>
        <table border="1" width="710" height="100">
            <tr>
                <td width="420" class="total"><b>Total Harga : </b></td>
                <td align="center" class="jumlah"><b>Rp. {{ number_format($total) }}</b></td>
            </tr>
        </table>
    </center>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
