@extends('layouts.master')
@section('content')
<div class="card col-8 offset-2">
	<div class="card-header text-center">
		<h3>ADD PRODUCT</h3>
	</div>
	<div class="card-body">
		<form method="POST" action="{{route('product.store')}}">@csrf
			@method('POST')
			<fieldset class="form-group">
				<label for="select_productcategory">
					Category 
					( <input onclick="newcategoryfunction()" id="new_category" type="checkbox"> new)
				</label>
				<select  class="form-control" id="select_productcategory" name="select_productcategory">
					<option value="">Select One</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
				</select>
				<input type="text" class="form-control" name="input_newcategory" id="input_newcategory" placeholder="Please type new category ..." hidden disabled>
			</fieldset>
			@error('newcategory')
				    <p class="text-danger">{{ $message }}</p>
			@enderror
			<fieldset class="form-group brand">
				<label for="exampleSelect1">
					Brand 
					( <input onclick="newbrandfunction()" id="new_brand" type="checkbox"> new)
				</label>
				<select  class="form-control"  name="select_productbrand" id="select_productbrand" >
					<option value="">Select One</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
				</select>
				<input type="text" class="form-control" name="input_newbrand" id="input_newbrand" placeholder="Please type new brand ..." hidden disabled>
				@error('newbrand')
				    <p class="text-danger">{{ $message }}</p>
				@enderror
			</fieldset>
			<fieldset class="form-group">
				<label for="exampleSelect1">
					Specification
					( <input onclick="newspecificationfunction()" id="new_specification" type="checkbox"> new)

				</label>
				<select  class="form-control" name="select_productspecification" id="select_productspecification">
					<option value="">Select One</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
				</select>
				<input type="text" class="form-control" name="input_newspecification" id="input_newspecification" placeholder="Please type new specification ..." hidden disabled>
				@error('newspecification')
				    <p class="text-danger">{{ $message }}</p>
				@enderror
			</fieldset>
			<fieldset class="form-group">
				<label for="exampleSelect1">
					Supplier
					( <input onclick="newsupplierfunction()" id="new_supplier" type="checkbox"> new)

				</label>
				<select  class="form-control" name="select_supplier" id="select_supplier">
					<option value="">Select One</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
				</select>
				<input type="text" class="form-control" name="input_supplier" id="input_supplier" placeholder="Please type new Supplier" hidden disabled>
				@error('input_supplier')
				    <p class="text-danger">{{ $message }}</p>
				@enderror
			</fieldset>
			<fieldset class="form-group">
				<label class="mr-4">Quantity</label>
				<input type="number" class="form-control" name="quantity" id="quantity">
			</fieldset>
			<fieldset class="form-group text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
			</fieldset>
		</form>
	</div>
</div>
<script>
	function newbrandfunction(){
		if($("#new_brand").is(':checked'))
		{
			$("#input_newbrand").prop({'hidden':false,'disabled':false});
			$("#select_productbrand").prop({'hidden':true,'disabled':true});
		}
		else
		{
			$("#select_productbrand").prop({'hidden':false,'disabled':false});
			$("#input_newbrand").prop({'hidden':true,'disabled':true});
		}
	}
	function newspecificationfunction(){
		if($("#new_specification").is(':checked'))
		{
			$("#input_newspecification").prop({'hidden':false,'disabled':false});
			$("#select_productspecification").prop({'hidden':true,'disabled':true});
		}
		else
		{
			$("#select_productspecification").prop({'hidden':false,'disabled':false});
			$("#input_newspecification").prop('hidden',true);
		}
	}
	function newcategoryfunction(){
		if($("#new_category").is(':checked'))
		{
			$("#input_newcategory").prop({'hidden':false,'disabled':false});
			$("#select_productcategory").prop({'hidden':true,'disabled':true});
		}
		else
		{
			$("#select_productcategory").prop({'hidden':false,'disabled':false});
			$("#input_newcategory").prop({'hidden':true,'disabled':true});
		}
	}
</script>
@endsection