@extends('layouts.app')

@section('content')
<table class="table table-bordered table-striped" id="datatable-default">
    <thead>
        <tr>
            <th>Semester</th>
            <th>Kode MTK</th>
            <th>Nama Mata Kuliah</th>
            <th>Status TM</th>
            <th>Kode Bahan Ajar</th>
        </tr>
    </thead>
    @if(!empty($caripaketsemester))
    <tbody>
        @foreach($caripaketsemester as $key => $row)
        <tr class="gradeX">
            <td><center><?php echo $row->semester ?></center></td>
            <td><center><?php echo $row->kode_mtk ?></center></td>
            <td><center><?php echo $row->nama_mtk ?></center></td>
            <td><center><?php echo $row->status_tm ?></center></td>
            <td><center><?php echo $row->kode_bahan_ajar ?></center></td>
        </tr>
        @endforeach
    </tbody>
    @else
    <tbody>
        <tr class="gradeX">
            <td><center>&nbsp;</center></td>
            <td><center>&nbsp;</center></td>
            <td><center>&nbsp;</center></td>
            <td><center>&nbsp;</center></td>
            <td><center>&nbsp;</center></td>
        </tr>
    </tbody>
    @endif
</table>
@stop