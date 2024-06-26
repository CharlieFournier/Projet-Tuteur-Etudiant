@extends('layouts.app')

@section('title','Page Accueil')

@section('contenu')
<div class="container-fluid h-100">
    <div class="row text-center h-100 AntiFlashWhite">

        <div class="col-10 h-100">
            <div class="row h-100">     <!-- Colonne des heures -->

            <div class="row justify-content-center align-items-center h-4"></div>

                <div class="col-2 h-100">

                    <div class="row justify-content-center align-items-center h-4"></div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">8h00 - 8h50</p>
                            </div>   
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">8h55 - 9h45</p>
                            </div>   
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">9h50 - 10h40</p>
                            </div>     
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">10h45 - 11h35</p>
                            </div>     
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-4">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                            <p class="m-0">Midi</p>
                            </div>    
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">12h10 - 13h00</p>
                            </div>  
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">13h05 - 13h55</p>
                            </div>  
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">14h00 - 14h50</p>
                            </div>    
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-4 ">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                            
                            </div>  
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">15h05 - 15h55</p>
                            </div>    
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">16h00 - 16h50</p>
                            </div>    
                        </div> 
                    </div>

                    <div class="row justify-content-end align-items-end h-8">
                        <div class="col-6 h-100 p-0">
                            <div class="card h-100 justify-content-center align-text-center text-center">
                                <p class="m-0">16h55 - 17h45</p>
                            </div>    
                        </div> 
                    </div>

                </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


                <div class="col-10">        <!-- Colonne jour l'horaire -->
                    <div class="row align-items-center h-4">

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">Lundi</div>   
                        </div>    

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">Mardi</div> 
                        </div>    

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">Mercredi</div> 
                        </div>    

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">Jeudi</div> 
                        </div>    

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">Vendredi</div> 
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 8h00 a 8h50 de l'horaire -->

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP1}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP1}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP1}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP1}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP1}} </p>
                            </div>
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 8h55 a 9h45 de l'horaire -->

                    <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP2}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP2}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP2}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP2}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP2}} </p>
                            </div>
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 9h50 a 10h40 de l'horaire -->

                    <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP3}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP3}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP3}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP3}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP3}} </p>
                            </div>
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 10h45 a 11h35 de l'horaire -->

                    <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP4}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP4}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP4}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP4}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP4}} </p>
                            </div>
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-4 Blanc"> <!-- Colonne du midi de l'horaire -->

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div>
                        </div>

                        <div class="col-2 h-100 p-0 AntiFlashWhite">
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 12h10 a 13h00 de l'horaire -->

                    <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP5}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP5}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP5}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP5}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP5}} </p>
                            </div>
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 13h05 a 13h55 de l'horaire -->

                    <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP6}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP6}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP6}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP6}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP6}} </p>
                            </div>
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 14h00 a 14h50 de l'horaire -->
                    <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP7}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP7}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP7}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP7}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP7}} </p>
                            </div>
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                    <div class="row align-items-center Blanc h-4"> <!-- Colonne Pause 14h50 a 15h05 de l'horaire -->

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card-header h-100 justify-content-center"></div>
                        </div>

                        <div class="col-2 h-100 p-0 AntiFlashWhite">
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 15h05 a 15h55 de l'horaire -->

                    <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP8}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP8}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP8}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP8}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP8}} </p>
                            </div>
                        </div>
            
                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 16h00 a 16h50 de l'horaire -->

                    <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP9}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP9}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP9}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP9}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP9}} </p>
                            </div>
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

                    <div class="row align-items-center h-8"> <!-- Colonne 16h55 a 17h45 de l'horaire -->

                    <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                                <p> {{$CalNote->LundiP10}} </p>
                            </div>   
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MardiP10}} </p>
                                </div> 
                        </div>

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->MercrediP10}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->JeudiP10}} </p>
                            </div>
                        </div> 

                        <div class="col-2 h-100 p-0">
                            <div class="card h-100 justify-content-center">
                            <p> {{$CalNote->VendrediP10}} </p>
                            </div>
                        </div>

                    </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


                </div>
            </div>
        </div>


        <div class="col-2">
            <div class="row h-50">
                <div class="col-12 text-start card card-conteneur text-center p-0">

                    <div class="col-12 card card-event-design text-center">
                        <h1 id="text-event"> Tuteurs </h1>
                    </div>
                        
                    <ul>
                        @foreach($tuteurs as $tuteur)
        
                            <a href="{{route('Tuteurs.show', [$tuteur->matricule])}}"><p>{{$tuteur->prenom}} {{$tuteur->nom}}</p></a>
                                
                        @endforeach
                    </ul> 

                </div>
            </div>
            <div class="row h-50">

                <div class="col-12 text-start card card-conteneur text-center p-0">

                    <div class="col-12 card card-event-design text-center">
                        <h1 id="text-event "> Étudiants </h1>
                    </div>

                        <ul>
                        @foreach($etudiants as $etudiant)
        
                            <a href="{{route('Etudiants.show', [$etudiant->matricule])}}"><p>{{$etudiant->prenom}} {{$etudiant->nom}}</p></a>
                                
                        @endforeach
                        </ul>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>

 
@endsection
