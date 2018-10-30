@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<center><h1>Alta Empresa</h1></center>

			
			<form role="form" action="{{route('guardaempresa')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_empresa'))
		        <i> {{ $errors->first('id_empresa') }} </i>
		        @endif <br>
		              
				
    	 <div class="form-group">
		        	<label for="id_empresa">ID:</label>
				<input type="text" placeholder="Folio..." name="id_empresa" value="{{$id_empresas}}" readonly='readonly'><br>
				</div>


				@if($errors->first('nom_empresa'))
		        <i> {{ $errors->first('nom_empresa') }} </i>
		        @endif 
		        
				<div class="form-group col-md-3">
      	<label for="pwd">Nombre</label>
      	<input type="text" class="form-control" id="nom_empresa" name="nom_empresa" placeholder="nom_empresa"  value="{{old('nom_empresa')}}">
    	</div>
    
                
                @if($errors->first('calle'))
		        <i> {{ $errors->first('calle') }} </i>
		        @endif 
		        
				<div class="form-group col-md-3">
      	<label for="pwd">Calle</label>
      	<input type="text" class="form-control" id="calle" name="calle" placeholder="calle"  value="{{old('calle')}}">
    	</div>
    
                
                @if($errors->first('numero'))
		        <i> {{ $errors->first('numero') }} </i>
		        @endif <br>
		        
	<div class="form-group col-md-3">
      	<label for="pwd">Numero</label>
      	<input type="text" class="form-control" id="numero" name="numero" placeholder="numero"  value="{{old('numero')}}">
    	</div>
                
                @if($errors->first('colonia'))
		        <i> {{ $errors->first('colonia') }} </i>
		        @endif <br>
		        
					<div class="form-group col-md-3">
      	<label for="pwd">Colonia</label>
      	<input type="text" class="form-control" id="colonia" name="colonia" placeholder="colonia"  value="{{old('colonia')}}">
    	</div>

              @if($errors->first('municipio'))
		        <i> {{ $errors->first('municipio') }} </i>
		        @endif 
		       
					<div class="form-group col-md-3">
      	<label for="pwd">Municipio</label>
      	<input type="text" class="form-control" id="municipio" name="municipio" placeholder="municipio"  value="{{old('municipio')}}">
    	</div>

                @if($errors->first('telefono'))
		        <i> {{ $errors->first('telefono') }} </i>
		        @endif <br>
		        
		<div class="form-group col-md-3">
      	<label for="pwd">Telefono</label>
      	<input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono"  value="{{old('telefono')}}">
    	</div>



                @if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif <br>
		                        
                
	 <div class="form-group col-md-3">
      <label for="pwd">Correo</label>
      <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo"  value="{{old('correo')}}">
    </div>
				 
				<!--<input type="submit" value="Guardar">
				<!--<input type="submit" value="Cancelar">-->
				<button value="Guardar" class='btn btn-md btn-success'> Guardar </button>
				<button value="Cancelar" class='btn btn-md btn-danger'> Cancelar </button>
			</form>
			</div>
@stop