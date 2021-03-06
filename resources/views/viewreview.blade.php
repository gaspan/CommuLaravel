@extends('welcome')

@section('title','View Review Proposal')

@section('content')

    <table class="table table-hover">
    @if (count($pengajuans) > 0)
        <tr class="info">
            <td>no</td>
            <td>Proposal</td>
            <td>event</td>         
            <td>kategori</td>          
            <td>status validasi</td>
            <td>status Review</td>
        </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($pengajuans as $pengajuans)
             <tr class="">
                <td>{{ $no }}</td>
                <td>{{ $pengajuans->proposal }}</td>
                <td>{{ $pengajuans->event }}</td>
                <td>{{ $pengajuans->kategori }}</td>

                @if (($pengajuans->status_valid) == 'belum' )
                <td><span class="label label-warning"> {{ $pengajuans->status_valid }}</span></td>
                @elseif (($pengajuans->status_valid) == 'terima')
                <td><span class="label label-success"> {{ $pengajuans->status_valid }}</span></td>                
                @else
                <td><span class="label label-danger"> {{ 'di'. $pengajuans->status_valid }}</span></td>                
                @endif
                
                @if (($pengajuans->status_rev) == 'belum' )
                <td><span class="label label-warning"> {{ $pengajuans->status_rev }}</span></td>
                @elseif (($pengajuans->status_rev) == 'terima')
                <td><span class="label label-success"> {{ $pengajuans->status_rev }}</span></td>                
                @else
                <td><span class="label label-danger"> {{ 'di'. $pengajuans->status_rev }}</span></td>                
                @endif
                
             </tr>
             @php
                $no ++;
             @endphp
            @endforeach
    @else
        <tr>
            <td colspan="3">Tidak ada pengajuan</td>
        </tr>
    @endif        
    </table>

@stop