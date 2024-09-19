<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Image Compressor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
{{--Nav--}}
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Image Compressor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--Form--}}
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Image Compressor with Laravel
        </div>
        <div class="card-body">
{{--            Success Message--}}
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {!! session('success') !!}
                </div>
            @endif

{{--            Form --}}
            <form method="POST" action="{{ route('compress-image') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Input Gambar</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">

                    @error('image')
                            <span class="invalid-feedback">
                                {{$message}}
                            </span>
                    @enderror
                </div>


{{--                Select Type --}}
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="image_format" class="form-label">Tipe Konversi Gambar (Ganti Format Gambar)</label>
                        <select id="image_format" name="image_format" class="form-select @error('image_format') is-invalid @enderror">
                            <option value="jpg">JPG</option>
                            <option value="png">PNG</option>
                            <option value="webp">WEBP</option>
                        </select>

                        @error('image_format')
                        <span class="invalid-feedback">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">
                    Compress Image
                </button>
            </form>
        </div>
    </div>
</div>

{{--Footer--}}
<p class="text-center mt-5">
    @Dunia Coding
</p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
