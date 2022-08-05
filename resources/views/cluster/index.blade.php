@extends('Layouts.header')
@section('create')

    <div class="container mt-5 mb-5">
        <div class="table-responsive-sm ">
            <table class="table table-striped table-hover " id="myTable">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col">N°</th>
                        <th scope="col">Noms</th>
                        <th scope="col">Filières</th>
                        <th scope="col">Departements</th>
                        <th scope="col">Communes</th>
                        <th scope="col">Arrondissements</th>
                        <th scope="col">Villages</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clusters as $cluster)
                        <tr class="text-center">
                            <td>{{ $cluster->id }}</td>
                            <td>{{ $cluster->nom }}</td>
                            <td>{{$cluster->filiere->nom}}</td>
                            <td>---------</td>
                            <td>---------</td>
                            <td>---------</td>
                            <td>{{$cluster->village->nom}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br> <br> <br>
    </div>
    {{-- Fin table --}}

@endsection
