@extends('layouts.fbootstrap');

@section('content')

<h1 class="text-center text-success" style="margin-top: 25px">Zaposleni</h1>

<table class="table table-bordered table-striped border-success mt-3">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ime</th>
            <th scope="col">Prezime</th>
            <th scope="col">Adresa</th>
            <th scope="col">Plata</th>
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
        </tr>
        @endforeach
    </tbody>
</table>



@endsection