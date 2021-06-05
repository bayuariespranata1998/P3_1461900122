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
            <a href="{{url('tampil0122')}}">Tampilkan Data </a></br>
            </td>

            <td width="1000" bgcolor="#776">
                 <table border="1">
                    <tr>
                        @foreach ($buku as $b)
                            <form action="{{url('update',$b->id)}}" method="post">
                            {{csrf_field()}}
                            @method("put")
                        
                            Judul <input type="text" required="required" name="judul" value="{{$b->judul}}"><br/>
                            Tahun <input type="text" required="required" name="tahun_terbit" value="{{$b->tahun_terbit}}"><br/>
                            <input type="submit" value="Simpan Data">
                            </form>

                        @endforeach

                    </tr>
                    
                 </table>
            </td>
        </tr>
    
    </table>

</body>
</html>