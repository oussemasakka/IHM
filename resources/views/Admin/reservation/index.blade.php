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
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Liste des Réservations</li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <h6 class="mb-0 text-uppercase">Liste des Réservations</h6>
                <hr/>
                <div>
                    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Ajouter</a>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nom Client</th>
                                        <th>Chambre</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $reservation)
                                    <tr>
                                        <td>{{ $reservation->user->name }}</td>
                                        <td>{{ $reservation->chambre->nomChambre }}</td>
                                        <td>{{ $reservation->date }}</td>
                                        <td>
                                            <!-- Modifier la couleur et le fond en fonction du statut -->
                                            @if($reservation->status == 'en attente')
                                                <span class="text-warning" style="background-color: #fff3cd; padding: 5px; border-radius: 3px;">{{ $reservation->status }}</span>
                                            @elseif($reservation->status == 'accepté')
                                                <span class="text-success" style="background-color: #d4edda; padding: 5px; border-radius: 3px;">{{ $reservation->status }}</span>
                                            @elseif($reservation->status == 'refusé')
                                                <span class="text-danger" style="background-color: #f8d7da; padding: 5px; border-radius: 3px;">{{ $reservation->status }}</span>
                                            @else
                                                <span>{{ $reservation->status }}</span>
                                            @endif
                                        </td>
                                        
                                        <td>
   

                                            <!-- Boutons Accepter et Refuser -->
                                            @if($reservation->status == 'en attente')
                                                <a href="" class="btn btn-success btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                                      </svg>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                                      </svg>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nom Client</th>
                                        <th>Chambre</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
