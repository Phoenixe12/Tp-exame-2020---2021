@extends('Layouts.header')
@section('commune')
    <div class="container ">
        <section class="section register  d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="">
                        <!--Debut titre-->
                        <div class="d-flex justify-content-center py-4">
                            <span class="d-none d-lg-block align-items-center h3">Enregistrement communes</span>
                        </div>
                        <!--Fin titre-->

                        <!---->
                        <div class="card mb-5">
                            <div class="card-body">

                                <div class="container">
                                    <form action="{{ route('communes.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Nom Communes</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text"
                                                        class="form-control"aria-label="Sizing example input"
                                                        name="commune" aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col">
                                                <label for="" class="form-label">Departement</label>
                                                <select class="form-select form-select-lg mb-3" name="departement"
                                                    aria-label=".form-select-lg example">
                                                    <option selected>Selectionner une departement</option>
                                                    @foreach ($departements as $departement)
                                                        <option value="{{$departement->id}}">{{$departement->nom}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row row-cols-auto mt-4">
                                            <div class="col">
                                                <input class="btn btn-primary" type="submit"></input>
                                            </div>
                                            <div class="col">
                                                <input class="btn btn-warning" value="Annuler" type="reset"></input>
                                            </div>

                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
