@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<center><h1>Alta Asesor Industrial</h1></center>			<form role="form" action="{{route('guardaasesorind')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_asesor_in'))
		        <i> {{ $errors->first('id_asesor_in') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_asesor_in">ID:</label>
				<input type="text" placeholder="Folio..." name="id_asesor_in" value="{{$id_asesores}}" readonly='readonly'><br>
				</div>

    
				@if($errors->first('nom_asesor_in'))
		        <i> {{ $errors->first('nom_asesor_in') }} </i>
		        @endif <br>
    
    
	 <div class="form-group col-md-3">
      <label for="pwd">Nombre</label>
      <input type="text" class="form-control" id="nom_asesor_in" name="nom_asesor_in" placeholder="Nombre del asesor"  value="{{old('nom_asesor_in')}}">
    </div>
   
                
                @if($errors->first('ape_pat_in'))
		        <i> {{ $errors->first('ape_pat_in') }} </i>
		        @endif 
		                        
    <div class="form-group col-md-3">
      <label for="pwd">Apellido Paterno</label>
      <input type="text" class="form-control" id="ape_pat_in" name="ape_pat_in" placeholder="Apellido Paterno del asesor"  value="{{old('ape_pat_in')}}">
    </div>
   
    
                @if($errors->first('ape_mat_in'))
		        <i> {{ $errors->first('ape_mat_in') }} </i>
		        @endif 
	
 <div class="form-group col-md-3">
      <label for="pwd"> Apellido Materno</label>
      <input type="text" class="form-control" id="ape_mat_in" name="ape_mat_in" placeholder="Apellido Paterno del asesor"  value="{{old('ape_mat_in')}}">
    </div>
   
        
                @if($errors->first('telefono'))
		        <i> {{ $errors->first('telefono') }} </i>
		        @endif 
		        
 <div class="form-group col-md-3">
      <label for="pwd"> Telefono</label>
      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  value="{{old('telefono')}}">
    </div>
    
    <br>
    
    <center>
            @if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif <br>
		          	        
 <div class="form-group col-md-3">
      <label for="pwd"> Correo</label>
      <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo"  value="{{old('correo')}}">
    </div>
    
    
    
                
                @if($errors->first('area'))
		        <i> {{ $errors->first('area') }} </i>
		        @endif<br>             
        	        
 <div class="form-group col-md-3">
      <label for="pwd"> Area</label>
      <input type="text" class="form-control" id="area" name="area" placeholder="Area"  value="{{old('area')}}">
    </div><br>
    <br>
    </center>
    

                <br>Selecciona empresa<select name="id_empresa">
				@foreach($empresas as $emp)
				<br><option value= '{{$emp->id_empresa}}'>{{$emp->nom_empresa}} 
				</option>	
				@endforeach
				</select>
				<br>
                
                
                @if($errors->first('archivo'))
                <i>{{$errors->first('archivo')}}</i>
                @endif <br>
                
    <br><center>selecciona foto: <input type="file" name="archivo"> </center><br>
                
                
				<!--<input type="submit" value="Guardar">
				<!--<input type="submit" value="Cancelar">-->
				<button value="Guardar" class='btn btn-md btn-success'> Guardar </button>
				<button value="Cancelar" class='btn btn-md btn-danger'> Cancelar </button>

			</form>
@stop