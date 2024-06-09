@include('header')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Détail du hopital</h5>
                    <a class="dropdown-item text-info" href="{{route('adminhopitaux')}}" > Retour <i class="fas fa-add"></i> </a>
                    <a class="dropdown-item text-warning" href="{{route('adminEDIThopital',$hopital->id)}}" > Editer <i class="fas fa-add"></i> </a>
                    <a class="dropdown-item text-danger" href="{{route('adminDELETEhopital',$hopital->id)}}" > Supprimer <i class="fas fa-add"></i> </a>
                    <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                            <tr>
                                <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Nom</h6>
                                </th>
                                <td class="border-bottom-0">  {{$hopital->nom}} </td>  
                            </tr>
                               <tr>
                                <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">ville</h6>
                                </th>
                                <td class="border-bottom-0">  {{$hopital->ville->nom}} </td>  
                            </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')