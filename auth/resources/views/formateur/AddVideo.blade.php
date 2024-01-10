 
@extends('layouts.fpannel')
@section('content')

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      

                  <form action="/addvideo" method="POST" enctype="multipart/form-data">
                    {{{ csrf_field() }}}

               @if ($errors->any())
                 <div class="alert alert-danger">
                   <ul>
                    @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                        @endforeach
                            </ul>
                          </div>
                     @endif



                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"> Nom du video</span>
                        <input type="text" name="name" class="form-control" placeholder="Saisor nom du video" required>
                      </div>
                    </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">description</span>
                          <input type="text" name="description" class="form-control" placeholder="description & titre" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">Categorie</span>
                           <select class="form-control" id="category" name="categorie">
                      
                           
                           @foreach ($categorie as $key) 
                           
                                <option value="{{$key->name}}">{{$key->name}}</option>
                           
                            @endforeach
                        </select>
                        </div>
                      </div>

                        

                      

                      <div class="form-group">
                        <label for="image">Sélectionner une video:</label>
                        <input type="file" id="video" name="video" required> 
                        
                    </div>
                      

                   
                      


                      <div class="form-group">
                          <input type="submit" value="Add" class="btn btn-success">
                          
                         
                      </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>

@endsection

 