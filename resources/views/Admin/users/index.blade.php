@extends('Admin.Template')
@section('Contenu')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tables</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card radius-10 bg-primary bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Total des Utilisateurs</p>
                                <h4 class="my-1 text-white">{{$countUser}}</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-stats'></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card radius-10 bg-success bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Les Utilisateurs Actifs</p>
                                <h4 class="my-1 text-white">{{$countV}}</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-shopping-bag'></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card radius-10 bg-warning bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Les Utilisateurs Inactif</p>
                                <h4 class="my-1 text-white">{{$countP}}</h4>
                            </div>
                            <div class="text-white ms-auto font-35"><i class='bx bx-block'></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Liste des utilisateurs</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Picture</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $a)
                            <tr>
                              <td>{{ $a->name}}</td>
                              <td><img src="{{URL::asset('uploads')}}/{{$a->img}}" width="40px"></td>
                              <td>{{ $a->email}}</td>
                              <td>{{ $a->role}}</td>
                              @if($a->statut=='Verified')
                              <td><span class="badge bg-success" style="color: white">{{ $a->statut }}</span></td>
                              @elseif ($a->statut=='Pending')
                              <td> <span class="badge bg-warning"style="color: white">{{ $a->statut }}</span></td>
                              @else
                              <td> <span class="badge bg-danger"style="color: white">{{ $a->statut }}</span></td>
                              @endif
                              <td>
                                <a   class="btn btn-warning btn-sm" href="{{ route('users.edit', $a->id) }}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                                  @if (Auth::user()->id!=$a->id)
                                 <form action="{{ route('users.destroy', $a->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE') <!-- Utilisé pour envoyer une requête DELETE -->
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirmer la suppression ?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                          </svg>
                                    </button>
                                </form>
                                 @endif
                                </td>
              
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Picture</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>statut</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection