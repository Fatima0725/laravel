@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulaire d\'enregistrement des medecins') }}</div>
                  @if (isset($confirmation))
                   @if ($confirmation==1)
                   <div class="alert alert-success">Medecin ajoute</div>
                   @else
                   <div class="alert laert-danger">Medecin non ajoute</div>

                  {{$confirmation}}
                  @endif

                  @endif
                <div class="card-body">
                    
                           <form action="{{route('persistmedecin')}}"  method="POST">
                                  @csrf
                                   <div class="form-group">
                                        <label class="control-label" for="nom">Nom du medecin</label>
                                        <input type="text" name ="nom" id="nom" class="form-control">
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="control-label" for="prenom">Prenom du medecin</label>
                                        <input type="text" name ="prenom" id="prenom" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label" for="tel">Telephone du medecin</label>
                                        <input type="text" name ="telephone" id="telephone" class="form-control">
                                    </div>
                                    

                                    <div class="form-group">
                                        <input type="submit" name ="envoyer" id="envoyer" value="Envoyer" class="btn btn-success"/>
                                        <input type="reset" name ="reset" id="annuler" value="Annuler " class="btn btn-danger"/>

                                    </div>
              
                            </form>
                
                </div>   
                                          
                            
            </div>
        </div>
    </div>
</div>
@endsection
