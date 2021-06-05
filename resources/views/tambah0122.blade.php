<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

    <table width="1250">
        <tr>
            <td colspan="2" bgcolor="#aaf"><h1>PRAKTIKUM PERTEMUAN KE 3</h1> </td>
        </tr>
        <tr>
            <td><a href="{{url('/tampil0122')}}"> Kembali </a></td>
        </tr>
        <tr align="Top">
            <td bgcolor="#887" width ="250"><b>Menu</b> <br/>
            <a href="">Cari </a></br>
            </td>

            <td width="1000" bgcolor="#776">
                 <form action="/store" method="post">
            {{csrf_field()}}
                 Judul <input type="text" name="judul"><br/>
                 Tahun Terbit <input type="text" name="tahun_terbit"><br/>
                 <input type="submit" value="Simpan Data ">
                 </form>
            </td>
        </tr>
    
    </table>

</body>
</html>