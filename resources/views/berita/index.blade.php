@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Berita</div>

                <div class="card-body">
                	<a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>
                   <table border="1">
		<tr>
			<td><center> ID </center></td>
			<td><center> Nama </center></td>
			<td><center> Users Id </center></td>
			<td><center>Create</center></td>
			<td><center>Update</center></td>
			<td><center>Aksi</center></td>
		</tr>

		@foreach($listBerita as $item)

		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td> 
			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
			<td>
			<a href="{!! route('berita.show',[$item->id]) !!}" class="btn btn-primary">Lihat</a>
		</td>
		</tr>

		@endforeach
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

