@extends('layouts.master')

@push('style_custom')
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/select2/dist/css/select2.min.css') }}">  
@endpush

@section('title', 'Edit Master STNK')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>

        <form action="{{ route('stnk.update', $edit->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_stnk">No STNK</label>
                            <input type="text" class="form-control" id="no_stnk" name="no_stnk" value="{{ $edit->no_stnk ?? '' }}">
                            <p class="text-danger">{{ $errors->first('no_stnk') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kendaraan_id">Jenis Kendaraan</label>
                            <select class="form-control select2" name="jenis_kendaraan_id" id="jenis_kendaraan_id" style="width: 100%;" required>
                                <option></option>
                                @foreach ($jenisKendaraan as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $edit->jenis_kendaraan_id) selected @endif>{{ $item->jenis_kendaraan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="silinder">Silinder (CC)</label>
                            <input type="text" class="form-control" id="silinder" name="silinder" value="{{ $edit->silinder ?? '' }}">
                            <p class="text-danger">{{ $errors->first('silinder') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="tnkb">TNKB</label>
                            <textarea type="text" name="tnkb" id="tnkb" rows="1" class="form-control">{{ $edit->tnkb ?? '' }}</textarea>
                            <p class="text-danger">{{ $errors->first('tnkb') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="pkb">PKB</label>
                            <input type="text" class="form-control" id="pkb" name="pkb" value="{{ $edit->pkb ?? '' }}" placeholder="Rp">
                            <p class="text-danger">{{ $errors->first('pkb') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="nama_stnk">Nama STNK</label>
                            <input type="text" class="form-control" id="nama_stnk" name="nama_stnk" value="{{ $edit->nama_stnk ?? '' }}">
                            <p class="text-danger">{{ $errors->first('nama_stnk') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="nilai_pajak_stnk">Nilai Pajak STNK</label>
                            <input type="text" class="form-control" id="nilai_pajak_stnk" name="nilai_pajak_stnk" value="{{ $edit->nilai_pajak_stnk ?? '' }}" placeholder="Rp">
                            <p class="text-danger">{{ $errors->first('nilai_pajak_stnk') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="status_id">Status</label>
                            <select class="form-control select2" name="status_id" id="status_id" style="width: 100%;" required>
                                <option></option>
                                @foreach ($status as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $edit->status_id) selected @endif>{{ $item->status }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_polisi">No Polisi</label>
                            <input type="text" class="form-control" id="no_polisi" name="no_polisi" value="{{ $edit->no_polisi ?? '' }}">
                            <p class="text-danger">{{ $errors->first('no_polisi') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" id="model" name="model" value="{{ $edit->model ?? '' }}">
                            <p class="text-danger">{{ $errors->first('model') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="no_mesin">No Mesin</label>
                            <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="{{ $edit->no_mesin ?? '' }}">
                            <p class="text-danger">{{ $errors->first('no_mesin') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="swdkllj">SWDKLLJ</label>
                            <input type="text" class="form-control" id="swdkllj" name="swdkllj" value="{{ $edit->swdkllj ?? '' }}" placeholder="Rp">
                            <p class="text-danger">{{ $errors->first('swdkllj') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="bahan_bakar">Bahan Bakar</label>
                            <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" value="{{ $edit->bahan_bakar ?? '' }}">
                            <p class="text-danger">{{ $errors->first('bahan_bakar') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <input type="text" class="form-control" id="warna" name="warna" value="{{ $edit->warna ?? '' }}">
                            <p class="text-danger">{{ $errors->first('warna') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="pajak_jasa">Pajak Jasa</label>
                            <input type="text" class="form-control" id="pajak_jasa" name="pajak_jasa" value="{{ $edit->pajak_jasa ?? '' }}" placeholder="Rp">
                            <p class="text-danger">{{ $errors->first('pajak_jasa') }}</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" value="{{ $edit->merk ?? '' }}">
                            <p class="text-danger">{{ $errors->first('merk') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="no_rangka">No Rangka</label>
                            <input type="text" class="form-control" id="no_rangka" name="no_rangka" value="{{ $edit->no_rangka ?? '' }}">
                            <p class="text-danger">{{ $errors->first('no_rangka') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="masa_berlaku">Masa Berlaku</label>
                            <input type="text" class="form-control" id="masa_berlaku" name="masa_berlaku" value="{{ $edit->masa_berlaku ?? '' }}">
                            <p class="text-danger">{{ $errors->first('masa_berlaku') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="jasa_perpanjangan">Jasa Perpanjangan</label>
                            <input type="text" class="form-control" id="jasa_perpanjangan" name="jasa_perpanjangan" value="{{ $edit->jasa_perpanjangan ?? '' }}">
                            <p class="text-danger">{{ $errors->first('jasa_perpanjangan') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="tahun_kendaraan">Tahun Kendaraan</label>
                            <input type="text" class="form-control" id="tahun_kendaraan" name="tahun_kendaraan" value="{{ $edit->tahun_kendaraan ?? '' }}">
                            <p class="text-danger">{{ $errors->first('tahun_kendaraan') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="no_bpkb">No BPKB</label>
                            <input type="text" class="form-control" id="no_bpkb" name="no_bpkb" value="{{ $edit->no_bpkb ?? '' }}">
                            <p class="text-danger">{{ $errors->first('no_bpkb') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="pajak_stnk">Pajak STNK</label>
                            <input type="text" class="form-control" id="pajak_stnk" name="pajak_stnk" value="{{ $edit->pajak_stnk ?? '' }}" placeholder="Rp">
                            <p class="text-danger">{{ $errors->first('pajak_stnk') }}</p>
                        </div>
                    </div> 
                </div>
            </div>
                
            <div class="box-footer">
                <div class="text-center">
                    <a href="{{ route('stnk.index') }}" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-info" onclick="return confirm ('Apakah Benar Anda Ingin Mengubah Data?')">Simpan</button>
                </div>
            </div>
        </form>

    </div>

@endsection

@push('script_custom')
    <script src="{{ asset('AdminLTE/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            $('.select2').select2()
        })
      </script>
@endpush