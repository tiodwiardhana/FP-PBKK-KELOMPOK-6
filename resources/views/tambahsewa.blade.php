@include('partials.headertambahsewa')

@extends('layouts.operator')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Tambah Sewa</h4>
            <input id="date-picker" width="270" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                        echo date("Y-m-d"); ?>" onchange="getJSON()" />
        </div>
        <div class="content table-responsive table-full-width">
            <div class="jadwal">
                <div class="baris" v-for="studio in jadwal">
                    <div class="lapangan">
                        <p>Studio @{{ studio.studio }}</p>
                    </div>
                    <a v-for="jam in studio.urutan" class="cards credentialing tombol-pilihjadwal" onclick="getDataStudio(this.id)">
                        <div class="overlay"></div>
                        <div class="jam">@{{ jam.nomor }}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<form method="post" action="\tambahsewa\input">
    {{csrf_field()}}

    <div class="form-group">
        <input type="hidden" class="form-control" name="karyawan_nama" value="{{ $karyawan_nama }}" display="none">
    </div>

    <div class="row" style="padding-bottom: 20px; padding-top:20px;">
      <div class="col-sm-12">
        <div class="card">
          <div class="content">
            <button type="submit" class="btn btn-info btn-fill pull-right" style="margin-right: 10px; margin-top: 15px" name="button btn"><b>TAMBAH</b></button>
            <h4 id="total-uang">Ringkasan</h4>
            <div id="tampilsubtotal"></div>
          </div>
        </div>

      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="kartu"></div>
        </div>
    </div>
</form>

<script type="text/javascript">
    window.onload = function() {
        buatId();
    }
</script>

<script type="text/javascript">
$(document).ready(function () {
    $('#date-picker').datepicker({

        uiLibrary: 'bootstrap', format: 'yyyy-mm-dd'

    });
});
</script>
@endsection
