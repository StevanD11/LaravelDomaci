@extends('layouts.fbootstrap');

@section('content')


<h1 class="text-center text-success" style="margin-top: 10px; margin-bottom: 25px"">Zaposleni</h1>

<table class=" table table-bordered table-striped border-success mt-3">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ime</th>
            <th scope="col">Prezime</th>
            <th scope="col">Adresa</th>
            <th scope="col">Plata</th>
            <th scope="col">Kompanija</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($zaposleni as $zap)

        <tr class="text-center">
            <td>{{$zap->id}}</td>
            <td>{{$zap->ime}}</td>
            <td>{{$zap->prezime}}</td>
            <td>{{$zap->adresa}}</td>
            <td>{{$zap->plata}}</td>
            @foreach ($kompanije as $kom)
            @if($kom->id == $zap->kompanija_id)
            <td>{{$kom->naziv}}</td>
            @endif
            @endforeach
        </tr>
        @endforeach
    </tbody>
    </table>



    @endsection