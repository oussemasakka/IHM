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
                        <li class="breadcrumb-item active" aria-current="page">Ajouter des chambres</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Ajouter des chambres</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form class="row g-3 needs-validation" novalidate 
                                  action="{{ route('chambres.store') }}" method="POST">
                                @csrf

                                <!-- Ajouter les chambres dynamiquement -->
                                <div class="col-md-12">
                                    <label class="form-label">Chambres :</label>
                                    <div id="chambres-wrapper">
                                        <!-- Champs dynamiques de chambres seront ajoutés ici -->
                                    </div>
                                    <button type="button" id="add-chambre" class="btn btn-success mt-2">Ajouter une chambre</button>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Ajouter</button>
                                    <a href="{{ route('chambres.index') }}" class="btn btn-secondary">Annuler</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script JS pour ajouter/supprimer des chambres -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const wrapper = document.getElementById('chambres-wrapper');
        const addBtn = document.getElementById('add-chambre');

        // Ajouter une chambre au formulaire
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

        // Supprimer une chambre du formulaire
        wrapper.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-chambre')) {
                e.target.closest('.chambre-item').remove();
            }
        });
    });
</script>
@endsection
