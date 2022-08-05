@extends('Layouts.header')
@section('listF')
 <div class="container mt-5 mb-5">
        <div class="table-responsive-sm ">
            <table class="table table-striped table-hover " id="myTable">
                <thead class="table-primary">
                    <tr class="text-center">
                        <th scope="col">N°</th>
                        <th scope="col">Filières</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($filieres as $filiere)
                        <tr class="text-center">
                            <td>{{ $filiere->id }}</td>
                            <td>{{ $filiere->nom }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br> <br> <br>
    </div>
    {{-- Fin table --}}

@endsection
