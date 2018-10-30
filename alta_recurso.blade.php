@extends('administrador')
@section('admincontent')

<header> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </header>

<center><h1>Alta Recurso</h1></center>

			
			<form role="form" action="{{route('guardarecurso')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_rh'))
		        <i> {{ $errors->first('id_rh') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_rh">ID:</label>
				<input type="text" placeholder="Folio..." name="id_rh" value="{{$id_recursos}}" readonly='readonly'><br>
				</div>


				@if($errors->first('nom_rh'))
		        <i> {{ $errors->first('nom_rh') }} </i>
		        @endif <br>
		                      

	 <div class="form-group col-md-3">
      <label for="pwd">Nombre</label>
      <input type="text" class="form-control" id="nom_rh" name="nom_rh" placeholder="Nombre"  value="{{old('nom_rh')}}">
    </div>

	 
                @if($errors->first('ape_pat_rh'))
		        <i> {{ $errors->first('ape_pat_rh') }} </i>
		        @endif 
		       

 <div class="form-group col-md-3">
      <label for="pwd">Apellido Paterno</label>
      <input type="text" class="form-control" id="ape_pat_rh" name="ape_pat_rh" placeholder="Apellido Paterno"  value="{{old('ape_pat_rh')}}">
    </div>


                @if($errors->first('ape_mat_rh'))
		        <i> {{ $errors->first('ape_mat_rh') }} </i>
		        @endif 
		       
 <div class="form-group col-md-3">
      <label for="pwd">Apellido Materno</label>
      <input type="text" class="form-control" id="ape_mat_rh" name="ape_mat_rh" placeholder="Apellido Materno"  value="{{old('ape_mat_rh')}}">
    </div>

                
                @if($errors->first('telefono'))
		        <i> {{ $errors->first('telefono') }} </i>
		        @endif 
		                       

<div class="form-group col-md-3">
      <label for="pwd">Telefono</label>
      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  value="{{old('telefono')}}">
    </div>


                @if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif <br>
		       

<div class="form-group col-md-3">
      <label for="pwd">Correo</label>
      <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo"  value="{{old('correo')}}">
    </div>

               
                @if($errors->first('area'))
		        <i> {{ $errors->first('area') }} </i>
		        @endif <br>
		             

<div class="form-group col-md-3">
      <label for="pwd">Area</label>
      <input type="text" class="form-control" id="area" name="area" placeholder="Area"  value="{{old('area')}}">
    </div>



                Selecciona empresa<select name="id_empresa">
				@foreach($empresas as $emp)
				<option value= '{{$emp->id_empresa}}'>{{$emp->nom_empresa}} 
				</option>	
				@endforeach
				</select> <br>
				<br>
                
                 
                <!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<br><button value="Guardar" class='btn btn-md btn-success'> Guardar </button>
				<button value="Cancelar" class='btn btn-md btn-danger'> Cancelar </button>
				

			</form>
			</div>
  @stop