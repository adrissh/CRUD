<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Biodata {{ $mahasiswa->nama }}</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-between align-items-center">
                    <h2 class="h2">Biodata {{ $mahasiswa->nama }}</h2>
                    <a href="{{ route('mahasiswas.edit', ['mahasiswa' => $mahasiswa->id]) }}"
                        class="btn btn-primary">Edit</a>
                    <form action="{{ route('mahasiswas.destroy', ['mahasiswa' => $mahasiswa->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <ul>
                    <li>NIM: {{ $mahasiswa->nim }} </li>
                    <li>Nama: {{ $mahasiswa->nama }} </li>
                    <li>Jenis Kelamin:
                        {{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}
                    </li>
                    <li>Jurusan: {{ $mahasiswa->jurusan }} </li>
                    <li>Alamat:
                        {{ $mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
