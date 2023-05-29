<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consume Students REST API || trash</title>
</head>
<body>
@if (Session::get('errors'))
    <p>{{Session::get('errors')}}</p>
    @endif
    @if (Session::get('success'))
    <p style="color: green;">{{Session::get('success')}}</p>
    @endif
    
    <a href="/">Kembali</a>
    <ol>
        @foreach ($studentTrash as $student)
            <li>NIS : {{$student['nis']}}</li>
            <li>Nama : {{$student['nama']}}</li>
            <li>Rombel : {{$student['rombel']}}</li>
            <li>Rayon : {{$student['rayon']}}</li>
            <li>Dihapus Tanggal : {{ \Carbon\Carbon::parse($student['deleted_at'])->format('j F, Y') }}</li>
            <li>
                <a href="{{ route('restore', $student['id'])}}">Kembali Data</a>
                <a href="{{ route('permanent', $student['id'])}}">Hapus Data permanent</a>
            </li>
        @endforeach
    </ol>
</body>
</html>