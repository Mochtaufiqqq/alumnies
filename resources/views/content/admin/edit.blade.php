@extends('layouts.admin.master')
@section('title','Edit User')
    

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                
                <h3>Edit Data User</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/semuauser">Semua User</a></li>
                    <li class="breadcrumb-item"> <a href="/useraktif"></a> User Aktif</li>
                    <li class="breadcrumb-item active"> <a href="/usernonaktif"></a> User Nonaktif</li>
                </ol>
            </div>
            
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h5>Lengkapi Form</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="/edituser/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @method('put')    
                @csrf
                  <div class="mb-3 m-form__group">
                    <label class="form-label">NISN</label>
                    <div class="input-group">
                      <input class="form-control @error('nisn') is-invalid @enderror" type="text" name="nisn" placeholder="NISN" value="{{ old('nisn', $user->nisn) }}" required autofocus>
                    </div>
                    @error('nisn')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                      <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" placeholder="Nama Lengkap" value="{{ old('nama', $user->nama) }}" aria-label="Recipient's username" required autofocus>
                    </div>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                      <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"  value="{{ old('email', $user->email) }}" aria-label="Amount (to the nearest dollar)" placeholder="Email" required autofocus>
                    </div>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <div class="input-group">
                      <textarea class="form-control" name="alamat" id="" cols="30" rows="10" required>{{ old('alamat',$user->alamat) }}</textarea>
                    </div>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3 input-group-solid">
                    <label class="form-label">Jurusan</label>
                    <select name="jurusan" id=""  value="{{ old('jurusan', $user->jurusan) }}" class="form-select form-control" required autofocus>
                        <option selected value="{{ old('jurusan',$user->jurusan) }}">{{ $user->jurusan }}</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia">Multimedia</option>
                    </select>
                    @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3 input-group-solid">
                    <label class="form-label">Tahun Lulus</label>
                    <select name="thn_lulus" id="" class="form-select form-control" required autofocus >
                        <option selected value="{{ old('thn_lulus',$user->thn_lulus) }}">{{ $user->thn_lulus }}</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                    </select>
                    @error('thn_lulus')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                      <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" value="{{ $user->password }}" aria-label="Amount (to the nearest dollar)" placeholder="Password">
                    </div>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  {{-- <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <div class="input-group">
                      <input class="form-control @error('confirmation') is-invalid @enderror" name="confirmation" type="password" value="{{ old('password',$user->password) }}" aria-label="Amount (to the nearest dollar)" placeholder="Konfirmasi Password" required autofocus>
                    </div>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div> --}}
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary m-r-15" type="submit">Submit</button>
            <button class="btn btn-light" type="submit">Cancel</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection