@extends('admin/layouts.master')

@section('content')
    <!-- [ Layout content ] Start -->
    <div class="layout-content">
        <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y">

            <div class="row">

                <div class="col-md-12">
                    <div class="card mb-4">

                        <h4 class="card-header text-white rounded p-3 text-center"
                            style="background-color: rgb(26,47,68); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1)">
                            Liste des importateurs
                        </h4>

                        <div class=" mt-2 ml-4">
                            <a  class="btn btn-success" href="{{route('admin/importer')}}"  style="background-color: rgb(26,47,68) !important;" > Ajouter </a>
                          </div>

                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nom de l'entreprise</th>
                                        <th>RCCM</th>
                                        <th>N° CIP</th>
                                        <th>IFU</th>
                                        <th>N° Téléphone</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($importateurs as $item)
                                        <tr>
                                            <td>{{ $item->company_name }}</td>
                                            <td>N° RCCM</td>
                                            <td>{{ $item->identity_card_number }}</td>
                                            <td>{{ $item->ifu_number }}</td>
                                            <td>{{ $item->company_number }}</td>
                                            <td>{{ $item->status }}</td>

                                            <td class="text-center">
                                                <a href="{{ url('admin/Vehicule/update/' . $item->id) }}"
                                                    class="m-r-15 text-muted VehiculeUpdate">
                                                    <i class="fa fa-eye" style="color: #2196f3;"></i>
                                                </a>
                                                <a href="{{ url('admin/Vehicule/update/' . $item->id) }}"
                                                    class="m-r-15 text-muted VehiculeUpdate">
                                                    <i class="fa fa-edit" style="color: #2196f3;"></i>
                                                </a>
                                                <a href="{{ url('admin/Vehicule/delete/' . $item->id) }}"
                                                    onclick="return confirm('Are you sure to want to delete it?')"><i
                                                        class="fa fa-trash" style="color: red;"></i></a>
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

        <!-- [ Layout footer ] End -->
    </div>

    <!-- [ Layout content ] Start -->
@endsection
@section('script')
    <!-- library js validate -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script> --}}
    {{-- form validate --}}


    <script>
        $('#validation').validate({
            reles: {
                code: {
                    required: true,
                },
                libelle: {
                    required: true,
                }

            },
            messages: {
                code: "saisissez un code*",
                libelle: "saisissez un libelle*",

            }
        });
    </script>

    {{-- hide message js --}}
    <script>
        $('#hide-message').show();
        setTimeout(function() {
            $('#hide-message').hide();
        }, 5000);
    </script>
@endsection
