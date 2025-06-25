<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Data Siswa</h1> <hr>
    <table border="0">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        
        @php $no = 1; @endphp
        @foreach ($siswa as $data) 
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data['nama']}}</td>
                <td>{{$data['kelas']}}</td>
                <td>
                   <form action="/siswa/{{ $data['id'] }}" method="post">
                <a href="/siswa/{{ $data['id'] }}"  class="btn btn-success" >Show</a>
                <a href="/siswa/{{ $data['id'] }}/edit"  class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">
                        Delete
                    </button>
                </form>
                </td>
            </tr>
        @endforeach
        </table>

</body>
</html>