<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <table width="1250">
        <tr>
            <td colspan="2" bgcolor="#aaf"><h1>PRAKTIKUM PERTEMUAN KE 3</h1> </td>
        </tr>
        <tr>
            <td><a href="{{url('tambah0122')}}"> + Tambah Data Buku</a></td>
        </tr>
        <tr align="Top">
            <td bgcolor="#887" width ="250"><b>Menu</b> <br/>
            <a href="">Cari </a></br>
            </td>

            <td width="1000" bgcolor="#776">
                 <table border="1">
                    <tr>
                        <th> ID </th>
                        <th> Judul </th>
                        <th> Tahun Terbit </th>
                     
                        <th> Option </th>

                    </tr>
                    @foreach($buku as $b)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $b->judul}}</td>
                        <td>{{ $b->tahun_terbit}}</td>

                        <td> <a href="{{url('/edit0122',$b->id)}}">Edit</a>| <a href="{{url('hapus',$b->id)}}">Hapus</a></td>
                    </tr>
                    @endforeach
                 </table>
            </td>
        </tr>
    
    </table>

</body>
</html>