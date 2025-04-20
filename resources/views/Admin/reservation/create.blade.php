@extends('Admin.Template')

@section('Contenu')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin-bottom: 0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter un hôtel</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Ajouter un hôtel</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form class="row g-3 needs-validation" novalidate 
                                  action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-6">
                                    <label for="NomHotel" class="form-label">Nom de l'hôtel :</label>
                                    <input type="text" class="form-control" name="NomHotel" id="NomHotel"
                                           value="{{ old('NomHotel') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="nombreEtoile" class="form-label">Nombre d’étoiles :</label>
                                    <input type="number" class="form-control" name="nombreEtoile" id="nombreEtoile"
                                           value="{{ old('nombreEtoile') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="adress" class="form-label">Adresse :</label>
                                    <input type="text" class="form-control" name="adress" id="adress"
                                           value="{{ old('adress') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="prixmoyen" class="form-label">Prix moyen (TND) :</label>
                                    <input type="number" step="0.01" class="form-control" name="prixmoyen" id="prixmoyen"
                                           value="{{ old('prixmoyen') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>

                                <div class="col-md-12">
                                    <label for="agence_id" class="form-label">Agence :</label>
                                    <select class="form-select" name="agence_id" id="agence_id" required>
                                        <option disabled value="">Choisir une agence...</option>
                                        @foreach($agences as $agence)
                                            <option value="{{ $agence->id }}" 
                                                {{ old('agence_id') == $agence->id ? 'selected' : '' }}>
                                                {{ $agence->NomAgence }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Veuillez sélectionner une agence.</div>
                                </div>

                                <div class="col-md-12">
                                    <label for="image" class="form-label">Image de l'hôtel :</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                    <div class="invalid-feedback">Veuillez télécharger une image.</div>
                                </div>

                                <!-- Champs dynamiques : chambres -->
                                <div class="col-md-12">
                                    <label class="form-label">Chambres :</label>
                                    <div id="chambres-wrapper">
                                        <div class="row chambre-item mb-2">
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="numeroChambre[]" placeholder="Numéro de chambre" required>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" class="form-control" name="nbLit[]" placeholder="Nombre de lits" required>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="vue[]" placeholder="Vue" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger remove-chambre">X</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" id="add-chambre" class="btn btn-success mt-2">Ajouter une chambre</button>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Ajouter</button>
                                    <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Annuler</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script JS pour ajout/suppression dynamique -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const wrapper = document.getElementById('chambres-wrapper');
        const addBtn = document.getElementById('add-chambre');

        addBtn.addEventListener('click', function () {
            const html = `
                <div class="row chambre-item mb-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="numeroChambre[]" placeholder="Numéro de chambre" required>
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control" name="nbLit[]" placeholder="Nombre de lits" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="vue[]" placeholder="Vue" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger remove-chambre">X</button>
                    </div>
                </div>
            `;
            wrapper.insertAdjacentHTML('beforeend', html);
        });

        wrapper.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-chambre')) {
                e.target.closest('.chambre-item').remove();
            }
        });
    });
</script>
@endsection
