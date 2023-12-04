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
            Ajouter un importateur
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

              <div class="col-md-12">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label class="col-form-label">Nom de l'entreprise</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Entrer le nom de l'entreprise" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="col-form-label">N° RCCM</label>
                    <input type="text" class="form-control" id="rccm" name="rccm" placeholder="Numéro du régistre de commerce" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label class="col-form-label">N° Carte d'identité / N° CIP</label>
                    <input type="text" class="form-control" id="cip" name="cip" placeholder="Numéro de la carte d'identité ou N° CIP " required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="col-form-label">Photo de la carte d'dentité</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="identity_photo" name="identity_photo" accept="document/*" required>
                      <label class="custom-file-label" for="customDocument">
                        Télécharger
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label class="col-form-label">N° IFU</label>
                    <input type="text" class="form-control" id="ifu" name="ifu" placeholder="Entrer un numéro IFU" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="col-form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="Entrer un status" required>
                  </div>
                </div>

                <div class="row">

                  <div class="form-group  col-md-6">
                    <label class="col-form-label">Adresse</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Entrer l'adresse de la compagnie" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label class="col-form-label">N° Téléphone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Entrer un numéro téléphone" required>
                  </div>
                </div>

                <div class="row">

                  <div class="form-group col-md-6">
                    <label class="col-form-label">Numéro Whatsapp</label>
                    <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number" placeholder="Entrer un numéro whatsapp" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label class="col-form-label">Site web</label>
                    <input type="text" class="form-control" id="site_web" name="site_web" placeholder="Entrer l'url du site web de l'entreprise" required>
                  </div>

                </div>

                <div class="form-group col-md-12 mt-2 d-flex justify-content-between">

                  <button type="reset" class="btn btn-danger">Annuler</button>
                  <button type="submit" class="btn btn-primary ml-2" style="background-color: rgb(26,47,68) !important;">Enregistrer</button>

                </div>
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
    background-color: #F2F2F2;
    /* ou la couleur que vous souhaitez utiliser */
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