@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Daftar Buku</h1>
                    <a href="/tambah" class="btn btn-primary mb-3">Tambah Buku</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buku as $no => $b)
                            <tr>
                                <th scope="row">{{ $no + 1 }}</th>
                                <td>{{ $b->judul }}</td>
                                <td>{{ $b->penulis }}</td>
                                <td>{{ $b->tahun }}</td>
                                <td>Ubah | Hapus</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
