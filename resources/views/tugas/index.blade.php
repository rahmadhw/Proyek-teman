<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>


 
</head>
<body>

    
    <h1>Halaman Mahasiswa</h1>
    <table border="1" cellpadding = "10" cellspacing= "1" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>jurusan</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs => $value)
            <tr>
                <td>{{ $mhs + 1 }}</td>
                <td>{{ $value['nama'] }}</td>
                <td>{{ $value['jurusan']  }}</td>
                <td>{{ $value['email']  }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>