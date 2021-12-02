@extends('layouts.master')

@section('title', 'Detail Master STNK')

@section('content')
<br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-2">
                            <strong>No STNK</strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->no_stnk ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong>No Polisi</strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->no_polisi ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Merk</strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->merk ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Jenis Kendaraan</strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                @if ($stnk->jenis_kendaraan_id == 1)
                                    {{ $stnk->jenis_kendaraan->jenis_kendaraan ?? '' }} </span>
                                @else
                                    {{ $stnk->jenis_kendaraan->jenis_kendaraan ?? '' }} </span>
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Model</strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->model ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong>No Rangka</strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->no_rangka ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Silinder (CC)</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->silinder ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>No Mesin</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->no_mesin ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Masa Berlaku</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->masa_berlaku ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>TNKB</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->tnkb ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>SWDKLLJ</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->swdkllj ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Jasa Perpanjangan</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->jasa_perpanjangan ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>PKB</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->pkb ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Bahan Bakar</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->bahan_bakar ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Tahun Kendaraan</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->tahun_kendaraan ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Nama STNK</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->nama_stnk ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Warna</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->warna ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>No BPKB</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->no_bpkb ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Nilai Pajak STNK</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->nilai_pajak_stnk ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Pajak Jasa</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->pajak_jasa ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Pajak STNK</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->pajak_stnk ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Status</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                @if ($stnk->status_id == 1)
                                    {{ $stnk->status->status ?? '' }} </span>
                                @else
                                {{ $stnk->status->status ?? '' }} </span>
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Created At</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->created_at ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <strong><strong>Created By</strong></strong>
                        </div>
                        <div class="col-md-10">
                            <p class="text-muted">
                                {{ $stnk->created_by ?? '' }}
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection