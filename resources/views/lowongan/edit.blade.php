@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Perusahaan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('lowongan.update',$low->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_low') ? ' has-error' : '' }}">
			  			<label class="control-label">NAMA LOWONGAN</label>	
			  			<input type="text" name="nama_low" value="{{ $low->nama_low }}" class="form-control"  required>
			  			@if ($errors->has('nama_low'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_low') }}</strong>
                            </span>
                        @endif
			  		</div>

					<div class="form-group {{ $errors->has('tgl_mulai') ? ' has-error' : '' }}">
			  			<label class="control-label">TANGGAL MULAI</label>	
			  			<input type="date" name="tgl_mulai" value="{{ $low->tgl_mulai }}" class="form-control"  required>
			  			@if ($errors->has('tgl_mulai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_mulai') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('lokasi') ? ' has-error' : '' }}">
			  			<label class="control-label">LOKASI</label>	
			  			<input type="text" name="lokasi" value="{{ $low->lokasi }}" class="form-control"  required>
			  			@if ($errors->has('lokasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lokasi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('gaji') ? ' has-error' : '' }}">
			  			<label class="control-label">GAJI</label>	
			  			<input type="text" name="gaji" value="{{ $low->gaji }}" class="form-control"  required>
			  			@if ($errors->has('gaji'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('deskripsi_iklan') ? ' has-error' : '' }}">
			  			<label class="control-label">DESKRIPSI IKLAN</label>	
						<textarea name="deskripsi_iklan" class="ckeditor" rows = "10"   required>{{ $low->deskripsi_iklan }}</textarea>
			  			@if ($errors->has('deskripsi_iklan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi_iklan') }}</strong>
                            </span>
                        @endif
				  		</div>


			  			<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">KATEGORI</label>	
			  			<select name="kategori_id" class="form-control">
			  				@foreach($kat as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  			<div class="form-group {{ $errors->has('pers_id') ? ' has-error' : '' }}">
			  			<label class="control-label">PERUSAHAAN</label>	
			  			<select name="pers_id" class="form-control">
			  				@foreach($p as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_pers }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('pers_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pers_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
