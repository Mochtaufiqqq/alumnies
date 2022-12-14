@extends('layouts.user.master')

@section('title','Detail Lowongan Pekerjaan')
    

@section('content')
    
<section class="container mt-5 mb-6 pt-5 pb-lg-5">
    <div class="row gy-4">
      <div class="col-lg-7 col-md-6">
        <img src="{{ asset($loker->foto) }}" alt="Cover" class="rounded-3" width="300%">
      </div>
      <div class="col-lg-5 col-md-6">
        <div class="ms-xl-5 ms-lg-4 ps-xxl-34">
          <h3 class="h6 mb-2">
            {{ $loker->nama_perusahaan }}
          </h3>
          <h1 class="display-5 pb-md-3">{{ $loker->judul }}</h1>
          <div class="d-flex align-items-center flex-wrap text-muted mb-lg-5 mb-md-4 mb-3">
            <div class="fs-sm border-end pe-3 me-3 mb-2">{{ $loker->tgl }}</div>
          </div>
          <p class="mb-0 fs-lg">{{ $loker->deskripsi }}</p>

          <div class="mt-3">
            <a href="/lowonganpekerjaan" style="text-decoration: none"><h6 class="text-md text-primary"> << Kembali ke halaman sebelumnya</h1></a>
        </div>
        </div>
      </div>
    </div>
  </section>

@endsection