@extends('includes.mainlayout')
@section('content')

<div class="card">
    <div class="card-header">Tambah Barang</div>
    <div class="card-body">
        <div class="card-title">
            <h3 class="text-center title-2">Tambah Barang</h3>
        </div>
        <hr>
        @include('includes.messages')
        <form action="/tambah_barang" method="post" enctype="multipart/form-data" novalidate="novalidate">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Nama Barang</label>
                <input id="cc-pament" name="nama_barang" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Masukkan Nama Barang">
            </div>
            <div class="form-group has-success">
                <label for="cc-name" class="control-label mb-1">Harga Barang</label>
                <input id="cc-name" name="harga_barang" type="number" class="form-control cc-name valid" data-val="true" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="Masukkan Harga Barang">
                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
                <label for="cc-number" class="control-label mb-1">Jumlah Barang</label>
                <input id="cc-number" name="kuantitas_barang" type="number" class="form-control cc-number" value="" data-val="true"
                    data-val-required="Please enter the card number" autocomplete="cc-number" placeholder="Masukkan Jumlah Barang">
                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
                <label for="textarea-input" class=" form-control-label">Gambar Barang</label><br>
                <img src="<?php echo('storage/images/default_image.jpg') ?>" class="display_image" alt="default image">
                <input id="photo_data" name="gambar_barang" type="file" class="form-control" aria-required="true" aria-invalid="false">
            </div>
            <div class="form-group">
                <label for="textarea-input" class=" form-control-label">Keterangan Barang</label>
                <textarea name="keterangan_barang" id="textarea-input" rows="9" placeholder="Masukkan Keterangan Barang" class="form-control"></textarea>
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-lock fa-plus"></i>&nbsp;
                    <span id="payment-button-amount">Tambah Barang</span>
                    <span id="payment-button-sending" style="display:none;">Adding…</span>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection