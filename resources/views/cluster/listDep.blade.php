@extends('Layouts.header')
@section('listDep')

 <div class="container mt-5 mb-5">
        <div class="table-responsive-sm ">
            <table class="table table-striped table-hover " id="myTable">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col">N°</th>
                        <th scope="col">Departement</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($departements as $departement)
                        <tr class="text-center">
                            <td>{{ $departement->id }}</td>
                            <td>{{ $departement->nom }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br> <br> <br>
    </div>
    {{-- Fin table --}}



@endsection
