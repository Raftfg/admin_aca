@extends('admin/layouts.master')

@section('content')

<div class="layout-content">
  <!-- [ content ] Start -->
  <div class="container-fluid flex-grow-1 container-p-y">

    <div class="row">

      <div class="col-md-12">
        <div class="card mb-4">
          <h4 class="card-header text-white rounded p-3 text-center" style="background-color: rgb(26,47,68); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1)">
            Liste des utilisateurs
          </h4>
          
          <div class=" mt-2 ml-4">
            <a  class="btn btn-success" href="{{route('admin/register')}}"  style="background-color: rgb(26,47,68) !important;" > Ajouter </a>
          </div>

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
                @if(auth()->user()->hasRole('admin') && $item->hasRole('super_admin'))
                                <!-- Skip the super_admin user for admin -->
                            @else
                <tr>
                  <td>{{$item->lastname}}</td>
                  <td>{{$item->firstname}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->phone}}</td>
                  <td>{{$item->address}}</td>
                  <td class="text-right" width="5px">
                    <div class="btn-group btn-group-sm" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            &nbsp;
                            <i class="fas fa-tasks" aria-hidden="true"></i> &nbsp;
                        </button>
                        <div class="dropdown-menu action-button-div" aria-labelledby="btnGroupDrop1"
                             >
                            <a href="{{ url('admin/user/update/' . $item->id) }}" class="dropdown-item font-weight-bold" style="color: black;">
                                <i class="fas fa-edit" aria-hidden="true"></i>
                                Modifier
                            </a>
                            <hr class="m-1"/>
                            <a href="{{ url('admin/user/delete/' . $item->id) }}" class="dropdown-item text-danger font-weight-bold"
                              >
                                <i class="fas fa-trash-alt"></i>
                                Supprimer
                            </a>
                        </div>
                    </div>
                </td>
                </tr>
                @endif
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