<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Pengambilan Sampah || trash</title>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Lihat Data <b>Terhapus</b></h2></div>
                    <div class="col-sm-4">
                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
@if (Session::get('errors'))
    <p>{{Session::get('errors')}}</p>
    @endif
    @if (Session::get('success'))
    <p style="color: green;">{{Session::get('success')}}</p>
    @endif
    
    <a href="/"><button type="submit" class="btn btn-primary" style="margin-right:20px;">Kembali</button></a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Kepala Keluarga</th>
                <th scope="col">Nomor Rumah</th>
                <th scope="col">RT/Rw</th>
                <th scope="col">Total Karung Sampah</th>
                <th scope="col">Tanggal Pengangkutan</th>
                <th scope="col">Kriteria</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            
        @foreach ($sampahTrash as $sampah)
            <tr>
                
                <td>{{ $sampah['kepala_keluarga'] }}</td>
                <td>{{$sampah['no_rumah']}}</td>
                <td>{{$sampah['rt_rw']}}</td>
                <td> {{$sampah['total_karung_sampah']}}</td>
                <td>{{$sampah['tanggal_pengangkutan']}}</td>
                <td>{{$sampah['kriteria']}}</td>
                <td>   

                
                <a href="{{ route('restore', $sampah['id'])}}"><button type="button" class="btn btn-primary">Kembali Data</button></a> 
                <a href="{{ route('permanent', $sampah['id'])}}"><button type="button" class="btn btn-danger">Hapus Data permanent</button></a> 
                @endforeach
</body>
</html>