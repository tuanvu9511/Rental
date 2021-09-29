@extends('layouts.master')
@section('content')
<div class="card col-8 offset-2">
	<div class="card-header text-center">
		ADD PRODUCT
	</div>
	<div class="card-body">
		<form method="POST" action="api/product/addproduct">@csrf
			@method('POST')
			<fieldset class="form-group">
				<label for="exampleSelect1">
					Category 
					( <input onclick="newcategoryfunction(this)" id="new_category" type="checkbox"> new)
				</label>
				<select  class="form-control" id="select_productcategory">
					<option>Select One</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
				</select>
				<input type="text" class="form-control" name="newcategory" id="input_newcategory" placeholder="Please type new category ..." hidden>

			</fieldset>
			<fieldset class="form-group brand">
				<label for="exampleSelect1">
					Brand 
					( <input onclick="newbrandfunction()" id="new_brand" type="checkbox"> new)
				</label>
				<select  class="form-control"  name="id_productbrand" id="select_productbrand" >
					<option>Select One</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
				</select>
				<input type="text" class="form-control" name="newbrand" id="input_newbrand" placeholder="Please type new brand ..." hidden>
				
			</fieldset>
			<fieldset class="form-group">
				<label for="exampleSelect1">
					Specification
					( <input onclick="newspecificationfunction()" id="new_specification" type="checkbox"> new)

				</label>
				<select  class="form-control" name="id_productspecification" id="select_productspecification">
					<option>Select One</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
					<option>1</option>
				</select>
				<input type="text" class="form-control" name="newspecification" id="input_newspecification" placeholder="Please type new specification ..." hidden>

			</fieldset>
			<fieldset class="form-group">
				<label class="">Serial Number</label>
				<input class="form-control" name="serialnumber" id="serialnumber">
			</fieldset>
			<fieldset class="form-group">
				<label class="mr-4">Information</label>
				<textarea class="form-control" name="information" id="informationproduct"></textarea> 
			</fieldset>
			<fieldset class="form-group" hidden>
				<label class="mr-4">Stockable</label>
				<input class="form-control" name="stockable" id="stockable">
			</fieldset>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<script>

	function newbrandfunction(){
		if($("#new_brand").is(':checked'))
		{
			$("#input_newbrand").prop('hidden',false);
			$("#select_productbrand").prop('hidden', true);
		}
		else
		{
			$("#select_productbrand").attr('hidden', false);
			$("#input_newbrand").prop('hidden',true);
		}
	}
	function newspecificationfunction(){
		if($("#new_specification").is(':checked'))
		{
			$("#input_newspecification").prop('hidden',false);
			$("#select_productspecification").prop('hidden', true);
		}
		else
		{
			$("#select_productspecification").attr('hidden', false);
			$("#input_newspecification").prop('hidden',true);
		}
	}
	function newcategoryfunction(){
		if($("#new_category").is(':checked'))
		{
			$("#input_newcategory").prop('hidden',false);
			$("#select_productcategory").prop('hidden', true);
		}
		else
		{
			$("#select_productcategory").attr('hidden', false);
			$("#input_newcategory").prop('hidden',true);
		}
	}
</script>
@endsection