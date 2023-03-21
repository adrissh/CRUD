<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Edit Mahasiswa</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('mahasiswas.update', ['mahasiswa' => $mahasiswa->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nim</label>
                        <input type="text" class="form-control" name="nim"
                            value=@if (empty(old('nim'))) {{ $mahasiswa->nim }} @else {{ old('nim') }} @endif>
                        {{-- cara lama --}}
                        @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama"
                            value="{{ old('nama') ?? $mahasiswa->nama }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                                value="L"
                                {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'L' ? 'checked' : '' }}>
                            <label class="form-check-label" for="laki-laki">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                value="P"
                                {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'P' ? 'checked' : '' }}>
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                        @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="jurusan">Jurusan</label>
                        <select class="form-select" name="jurusan" id="jurusan">
                            <option
                                value="Teknik Informatika"{{ (old('jurusan') ?? $mahasiswa->jurusan) == 'Teknik Informatika' ? 'selected' : '' }}>
                                Teknik Informatika
                            </option>
                            <option
                                value="Sistem Informasi"{{ (old('jurusan') ?? $mahasiswa->jurusan) == 'Sistem Informasi' ? 'selected' : '' }}>
                                Sistem Informasi
                            </option>
                            <option
                                value="Ilmu Komputer"{{ (old('jurusan') ?? $mahasiswa->jurusan) == 'Ilmu Komputer' ? 'selected' : '' }}>
                                Ilmu Komputer</option>
                            <option
                                value="Teknik Komputer"{{ (old('jurusan') ?? $mahasiswa->jurusan) == 'Teknik Komputer' ? 'selected' : '' }}>
                                Teknik Komputer
                            </option>
                            <option
                                value="Teknik Telekomunikasi"{{ (old('jurusan') ?? $mahasiswa->jurusan) == 'Teknik Telekomunikasi' ? 'selected' : '' }}>
                                Teknik
                                Telekomunikasi</option>
                        </select>
                        @error('jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ old('alamat') ?? $mahasiswa->alamat }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
