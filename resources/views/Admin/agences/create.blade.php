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

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter une agence</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Ajouter une agence</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form class="row g-3 needs-validation" novalidate action="{{ route('agences.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Nom de l'agence :</label>
                                    <input type="text" class="form-control" name="NomAgence" id="validationCustom01" value="{{ old('NomAgence') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Adresse :</label>
                                    <input type="text" class="form-control" name="adress" id="validationCustom02" value="{{ old('adress') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Email :</label>
                                    <input type="email" class="form-control" name="email" id="validationCustom03" value="{{ old('email') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">Site Web :</label>
                                    <input type="text" class="form-control" name="siteweb" id="validationCustom04" value="{{ old('siteweb') }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="user_id" class="form-label">Utilisateur :</label>
                                    <select class="form-select" name="user_id" id="user_id" required>
                                        <option selected disabled value="">Choisir l'utilisateur...</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a valid user.</div>
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Ajouter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
@endsection
