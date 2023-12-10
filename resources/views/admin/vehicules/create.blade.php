@extends('admin/layouts.master')
@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
  <!-- [ content ] Start -->
  <div class="container-fluid flex-grow-1 container-p-y">

    <div class="row">
      <div class="col-sm-12">
        <div class="card ">

          <h4 class="card-header text-white rounded p-3 text-center" style="background-color: rgb(26,47,68); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1)">
            Ajouter un véhicule
          </h4>

          <div class="card-body">

            <div class="form-group row">
              <div class="col-sm-12">
                @if (\Session::has('insert'))
                <div id="hide-message" class="alert alert-success alert-dismissible fade show">
                  <i class="feather icon-check-circle" style="font-size:1em"></i>
                  {!! \Session::get('insert') !!}
                </div>
                @endif

                @if (\Session::has('error'))
                <div id="hide-message" class="alert alert-danger alert-dismissible fade show">
                  <i class="feather icon-check-circle" style="font-size:1em"></i>
                  {!! \Session::get('error') !!}
                </div>
                @endif
                <div class="clearfix"></div>
              </div>
            </div>
            <form id="validation" action="{{ route('admin/register') }}" method="POST">
              {{ csrf_field() }}

              <div class=" col-md-12">

                <div class="row">
                  <!-- Première colonne -->
                  <div class="form-group col-md-4">
                    <label class="col-form-label">Importateur</label>
                    <select class="form-control" name="importateur" id="importateur" required>
                      <option value="">Sélectionner</option>
                      <option value="ACA">ACA</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label class="col-form-label">Marques</label>
                    <select class="form-control" name="marque_vehicule" id="type_vehicule" required>
                      <option value="">Sélectionner</option>
                      <option value="Peugeot">Peugeot</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label class="col-form-label">Model</label>
                    <select class="form-control" name="model_vehicule" id="model_vehicule" required>
                      <option value="">Sélectionner</option>
                      <option value="Peugeot">Peugeot</option>
                    </select>
                  </div>
                </div>


                <div class="row">


                  <div class="form-group  col-md-6">
                    <label class="col-form-label">Vin / N° Châssis </label>
                    <input type="text" class="form-control" id="annee" name="annee" placeholder="Entrer Vin" required>
                  </div>

                  

                  <div class="form-group col-md-6">
                    <label class="col-form-label">Document</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customDocument" name="customDocument" accept="document/*" required>
                      <label class="custom-file-label" for="customDocument">
                        Télécharger
                      </label>
                    </div>
                  </div>


                </div>

                <div class="row">

                  <div class="form-group col-md-6">
                    <label class="col-form-label">Couleur</label>
                    <input type="text" class="form-control" id="color" name="color" placeholder="Entrer une couleur" required>
                  </div>

                  {{-- <div class="form-group col-md-4">
                    <label class="col-form-label">Marque</label>
                    <select class="form-control" name="marque" id="marque" required>
                      <option value="">Sélectionner</option>
                      <option value="1">Range Over</option>
                    </select>
                  </div> --}}


                  <div class="form-group col-md-6">
                    <label class="col-form-label">Image de couverture</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="customFile" accept="document/*" required>
                      <label class="custom-file-label" for="customFile">
                        Télécharger
                      </label>
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="form-group  col-md-8">
                    <label class="col-form-label">Transmission</label>
                    <input type="text" class="form-control" id="transmission" name="transmission" placeholder="Entrer une transmission" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="col-form-label">Pays d'origine</label>
                    <select class="form-control" name="origin_country" id="origin_country" required>
                      <option value="">Sélectionner</option>
                      <option value="Bénin">Bénin</option>
                    </select>
                  </div>
                </div>



                <div class="row">


                  <div class="form-group col-md-4">
                    <label class="col-form-label">Année</label>
                    <input type="date" class="form-control" id="annee" name="annee" placeholder="Entrer une année" required>
                  </div>

                  
                  <div class="form-group col-md-4">
                    <label class="col-form-label">Prix</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Entrer une Prix" required>
                  </div>



                  <div class="form-group col-md-4">
                    <label class="col-form-label">Vidéo</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customVideo" name="customVideo" accept="document/*" required>
                      <label class="custom-file-label" for="customVideo">
                        Télécharger
                      </label>
                    </div>
                  </div>




             

                </div>


                <div class="row">
                  <div class="form-group col-md-6">
                    <label class="col-form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Entrer une description" style="resize: none;" required></textarea>
                  </div>

                  <div class="form-group col-md-6">
                    <label class="col-form-label">Condition du véhicule</label>
                    <textarea class="form-control" id="condition" name="condition" placeholder="Entrer Condition du véhicule" style="resize: none;" required></textarea>
                  </div>
                </div>


              </div>



              <div class="form-group col-md-12 mt-2 d-flex justify-content-between">

                <button type="reset" class="btn btn-danger" >Annuler</button>
                <button type="submit" class="btn btn-primary ml-2" style="background-color: rgb(26,47,68) !important;">Enregistrer</button>

              </div>

            </form>

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


@section('style')

<style>

.form-group label {
    font-size: 16px;
    /* Taille de police personnalisée pour les libellés */
  }

  .form-control {
    font-size: 16px;
    /* Taille de police personnalisée pour les champs de formulaire */
  }

.form-group select,
.form-group input,
.form-group textarea {
    background-color: #F2F2F2; /* ou la couleur que vous souhaitez utiliser */
}

  .custom-file-input~.custom-file-label::after {
    content: "Télécharger";
  }

  .custom-file-label-purple {
    color: #000000;
    background: linear-gradient(to bottom, #606264, #606264);
  }

  .custom-file-label::after {
    content: ' Télécharger';
    color: white !important;
    cursor: pointer;
    background: linear-gradient(to bottom, #606264, #606264);
    padding: 0.375rem 0.75rem;
    border-radius: 0.25rem;
  }

  .custom-file-label:hover::after {
    background: linear-gradient(to bottom, #6ca597, #7ba89d);
  }
</style>

@endsection