@extends('layouts/main')

@section('title', 'Supplier')

@section('title_pages', 'Supplier')

@section('content')

  <div class="content">
    <div class="container-fluid">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Tambah Supplier</h4>
            </div>
            
            <div class="card-body">
              <form method="post" action="/suppliers" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama *</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror"" name="name" value="{{ old('name') }}">
                      @error('name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror"" name="email" value="{{ old('email') }}">
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                    </div>
									</div>
									<div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">No Telepon</label>
                      <input type="text" class="form-control @error('phone') is-invalid @enderror"" name="phone" value="{{ old('phone') }}">
                      @error('phone')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                    </div>
                  </div>
									<div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Alamat</label>
                      <input type="text" class="form-control @error('address') is-invalid @enderror"" name="address" value="{{ old('address') }}">
                      @error('address')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Tambah Supplier</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Data Supplier</h4>              
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered" id="example" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Phone</th>
                    <th scope="col">Alamat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($suppliers as $item)
											<tr>
												<td scope="row">{{ $loop->iteration }}</td>
												<td><a href="/suppliers/{{ $item->id }}" class="btn btn-outline-primary btn-sm">{{ $item->name }}</a></td>
												<td>{{ $item->email }}</td>
												<td>{{ $item->phone }}</td>
												<td>{{ $item->address }}</td>
											</tr>
									@endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection