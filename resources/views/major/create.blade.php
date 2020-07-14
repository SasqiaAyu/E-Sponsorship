@extends('layouts.admin')

@section('menu','profile')
@section('submenu','major.index')
@section('content')
<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd">
                        <h2>Tambah Jurusan</h2>
                    </div>
                    @if(session()->has('Message Success'))
                    <div class="alert alert-success">
                        {{ session()->get('Message Success') }}
                    </div>
                    @endif
                    @if(session()->has('Message Failed'))
                    <div class="alert alert-danger">
                        {{ session()->get('Message Failed') }}
                    </div>
                    @endif
                    <form action="{{route('major.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Jurusan</label>
                            <div class="nk-int-st">
                                <input type="text" class="form-control input-sm @error('nama') is-invalid @enderror"
                                    name="nama" placeholder="Masukkan Nama"
                                    value="{{ old('nama')?old('nama'):'' }}">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection