@extends('Layouts.header')
@section('listCom')
  <div class="container mt-5 mb-5">
        <div class="table-responsive-sm ">
            <table class="table table-striped table-hover " id="myTable">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col">N°</th>
                        <th scope="col">Noms</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($communes as $commune)
                        <tr class="text-center">
                            <td>{{ $commune->id }}</td>
                            <td>{{ $commune->nom}}</td>
                            {{-- <td>{{$commune->departement->nom}}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br> <br> <br>
    </div>
    {{-- Fin table --}}
@endsection
