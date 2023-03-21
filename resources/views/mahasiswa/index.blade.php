<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            @if (session()->has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
            @endif
            <div class="col-12">
                <div class="py-4 d-flex justify-content-between algn-items-center">
                    <h2>Tabel Mahasiswa</h2>
                    <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td><a href=" {{ url('mahasiswas/' . $mahasiswa->id) }}">{{ $mahasiswa->nim }}</a>
                                </td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                <td>{{ $mahasiswa->jurusan }}</td>
                                <td>{{ $mahasiswa->alamat }}</td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
