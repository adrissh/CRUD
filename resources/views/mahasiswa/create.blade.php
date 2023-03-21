<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route('mahasiswas.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2>Pendaftaran Mahasiswa</h2>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Nim</label>
                                <input type="text"class="form-control @error('nim') is-invalid @enderror"
                                    id="nim" name="nim" value="   {{ old('nim') }}">
                                @error('nim')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    id="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Jenis Kelamin
                                </label>
                                <div class="d-flex">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="laki_laki" value="L" @checked(old('jenis_kelamin') == 'L')>
                                        <label class="form-check-label" for="laki_laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="perempuan" value="P" @checked(old('jenis_kelamin') == 'P')>
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                @error('jenis_kelamin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="jurusan">Jurusan</label>
                                <select class="form-select" name="jurusan" id="jurusan">
                                    <option value="Teknik Informatika"@selected(old('jurusan') == 'Teknik Informatika')>Teknik Informatika
                                    </option>
                                    <option value="Sistem Informasi" @selected(old('jurusan') == 'Sistem Informasi')>Sistem Informasi
                                    </option>
                                    <option value="Ilmu Komputer" @selected(old('jurusan') == 'Ilmu Komputer')>Ilmu Komputer</option>
                                    <option value="Teknik Komputer" @selected(old('jurusan') == 'Teknik Komputer')>Teknik Komputer
                                    </option>
                                    <option value="Teknik Telekomunikasi" @selected(old('jurusan') == 'Teknik Telekomunikasi')>Teknik
                                        Telekomunikasi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Daftar</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
