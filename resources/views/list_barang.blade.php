@extends('includes.mainlayout')
@section('content')


<div class="card">
	<div class="card-header">List Barang</div>
    <div class="card-body">
    	<div class="row">
    	@foreach($data_barang as $barang)
    		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    			<div class="card card_list_barang">
    				<img class="img_barang" src="<?php echo asset('storage/images/' .  $barang['gambar_barang']) ?>">
    				<div class="detail_list_barang">
    					<h2>{{ $barang['nama_barang'] }}</h2>
    					<br>
    					<h4>Rp. <?php echo number_format($barang['harga_barang'], 2) ?></h4>
    					<br>
    					<div class="btn_list_barang">
    						<button class="btn btn-primary" style="display: inline;">Edit</button>
    						<button class="btn btn-danger">Delete</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	@endforeach
    	<div>
    </div>
</div>

@endsection