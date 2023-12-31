@extends('admin/layouts.master')

@section('content')

<div class="layout-content">
  <!-- [ content ] Start -->
  <div class="container-fluid flex-grow-1 container-p-y">

    <div class="row">

      <div class="col-md-12">
        <div class="card mb-4">
          <h4 class="card-header text-white rounded p-3 text-center" style="background-color: rgb(26,47,68); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1)">
            Liste des Clients
          </h4>
          <div class="card-body">
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Email</th>
                  <th>Téléphone</th>
                  <th>Adresse</th>
                  <th class="text-center">Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($users as $item)
                <tr>
                  <td>{{$item->lastname}}</td>
                  <td>{{$item->firstname}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->phone}}</td>
                  <td>{{$item->address}}</td>

                  {{-- <td class="id"> {{ \App\Models\Annee::where(['id'=>$item->annee_id ])->first()->annee}}</td>
                  <td class="id"> {{ \App\Models\Dimension::where(['id'=>$item->dimenesion_id ])->first()->libelle}}</td>
                  <td class="id"> {{ \App\Models\Sexe::where(['id'=>$item->sexe_id ])->first()->libelle}}</td> --}}

                  <td class="text-center">
                    <a href="{{ url('admin/user/update/' . $item->id) }}" class="m-r-15 text-muted VehiculeUpdate">
                      <i class="fa fa-eye" style="color: #2196f3;"></i>
                    </a>
                    <a href="{{ url('admin/user/update/' . $item->id) }}" class="m-r-15 text-muted VehiculeUpdate">
                      <i class="fa fa-edit" style="color: #2196f3;"></i>
                    </a>
                    <a href="{{ url('admin/user/delete/' . $item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><i class="fa fa-trash" style="color: red;"></i></a>
                  </td>


                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>


          </div>
        </div>
      </div>


    </div>

    <!-- [ content ] End -->
  </div>

  <!-- [ Layout footer ] Start -->

</div>

<!-- [ Layout content ] Start -->
@endsection