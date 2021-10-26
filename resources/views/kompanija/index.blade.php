@extends('layouts.fbootstrap');

@section('content')

<h1 class="text-center text-primary" style="margin-top: 10px; margin-bottom: 25px">Kompanije</h1>

<table class="table table-bordered table-striped border-primary mt-3">
    <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Naziv</th>
            <th scope="col">Sediste</th>
            <th scope="col">Grad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kompanije as $kompanija)
        <tr class="text-center">
            <td>{{$kompanija->id}}</td>
            <td>{{$kompanija->naziv}}</td>
            <td>{{$kompanija->sediste}}</td>
            <td>{{$kompanija->grad}}</td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection