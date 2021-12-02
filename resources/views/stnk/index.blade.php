@extends('layouts.master')

@push('style_custom')
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('title', 'Master STNK')

@section('content')
    <div class="row">
        <div class="col-md-12">
            
            @if (session('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    {{ session('status') }}
                </div>
            @endif

            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <a href="{{ route('stnk.create') }}" class="btn btn-primary btn-sm">Tambah Data <i class="fa fa-user-plus"></i> </a>
                    </h3>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No STNK</th>
                                <th>Nama STNK</th>
                                <th>Masa Berlaku</th>
                                <th>No BPKB</th>
                                <th>No Polisi</th>
                                <th>Merk</th>
                                <th>Status</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($stnk as $item)
                                    <tr>
                                        <td>{{ $item->no_stnk ?? '' }}</td>
                                        <td>{{ $item->nama_stnk ?? '' }}</td>
                                        <td>{{ $item->masa_berlaku ?? '' }}</td>
                                        <td>{{ $item->no_bpkb ?? '' }}</td>
                                        <td>{{ $item->no_polisi ?? '' }}</td>
                                        <td>{{ $item->merk ?? '' }}</td>
                                        <td>
                                            @if ($item->status_id == 1)
                                                <span class="badge bg-success"> {{ $item->status->status ?? '' }} </span>
                                            @else
                                                <span class="badge bg-yellow"> {{ $item->status->status ?? '' }} </span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('stnk.show', $item->id) }}" class="btn btn-sm btn-warning"> <i class="fa fa-eye"></i> </a>
                                            <a href="{{ route('stnk.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                    {{-- <a href="{{ route('logout')}}" class="btn btn-sm btn-success">Log Out</a> --}}
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script_custom')
    <script src="{{ asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endpush