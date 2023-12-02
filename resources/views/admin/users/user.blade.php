@extends('admin/layouts.master')

@section('content')

<!-- [ Layout content ] Start -->
<div class="layout-content">
  <!-- [ content ] Start -->
  <div class="container-fluid flex-grow-1 container-p-y">

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h4 class="card-header text-white rounded p-3 text-center" style="background-color: rgb(26,47,68); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1)">
            Ajouter un utilisateur
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
                    <label class="col-form-label ">Nom</label>
                    <div class="">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('firstname') }}" autocomplete="name" autofocus placeholder="Nom">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="col-form-label ">Prénom</label>
                    <div class="">
                      <input id="prename" type="text" class="form-control @error('prename') is-invalid @enderror" name="prename" value="{{ old('firstname') }}" autocomplete="prename" autofocus placeholder="Prénom">
                      @error('prename')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label class="col-form-label ">Email</label>
                    <div class="">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Entrer votre email">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label class="col-form-label ">Téléphone</label>
                    <div class="">
                      <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" autocomplete="tel" placeholder="Votre nuémro de téléphone">
                      @error('tel')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label class="col-form-label ">Adresse</label>
                    <div class="">
                      <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" autocomplete="address" placeholder="Entrer votre adresse complète">
                      @error('address')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <div class="clearfix"></div>
                    </div>
                  </div>


                </div>
              </div>



              <div class="col-md-12">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label class="col-form-label ">Password</label>
                    <div class="">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Enter password">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label class="col-form-label ">Password Confirmation</label>
                    <div class="">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Password confirmation">
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="form-group col-md-12 mt-2 d-flex justify-content-between">

                <button type="reset" class="btn btn-danger">Annuler</button>
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

  <style>
    .form-group select,
    .form-group input,
    .form-group textarea {
      background-color: #F2F2F2;
      /* ou la couleur que vous souhaitez utiliser */
    }
  </style>
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
</style>

@section('style')