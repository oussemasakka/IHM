
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
                                <li class="breadcrumb-item active" aria-current="page">Modification d'un utilisateur</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Modification de <span style="color: blue">{{$user->name}}</span></h6>
                        <hr/>
                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 border rounded">
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('users.update', $user->id) }}" method="POST"  enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-md-6">
                                            <label for="validationCustom01" class="form-label">Nom & Prénom :</label>
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                            <input type="hidden" name="Role" value="{{$user->role}}">
                                            <input type="text" class="form-control" name="name" id="validationCustom01" value="{{$user->name}}" required>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom02" class="form-label">Email :</label>
                                            <input type="text" class="form-control" name="email" id="validationCustom02" value="{{$user->email}}" required>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom02" class="form-label">Image :</label>
                                            <input type="file" class="form-control" name="img" id="validationCustom02" >
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Statut :</label>
                                            <select class="form-select" name="statut" id="validationCustom04" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if ($user->statut=='Pending') selected @endif value="Pending">Pending</option>
                                                <option @if ($user->statut=='Verified') selected @endif value="Verified">Verified</option>
                                            </select>
                                            <div class="invalid-feedback">Please select a valid state.</div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">Role :</label>
                                            <select class="form-select" name="role" id="validationCustom04" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if ($user->role=='client') selected @endif value="client">client</option>
                                                <option @if ($user->role=='Admin') selected @endif value="Admin">Admin</option>
                                                <option @if ($user->role=='Agent') selected @endif value="Agent">Agent</option>

                                            </select>
                                            <div class="invalid-feedback">Please select a valid state.</div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Modifer</button>
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