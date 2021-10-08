@extends('layouts.master')
@section('content')
<!-- btn option -->
 <div class="text-right m-2">
 	<button class="btn btn-info" data-toggle="modal" data-target="#buynew_modal">Buy New</button>
 	<button class="btn btn-info">Rerental</button>
 </div>
<!-- table content -->
<div class="card">
	<div class="card-header row">
		<h4 class="col"><i class="fas fa-list"> WareHouse</i></h4>
		<div class="col text-right "></div>
		<label class="bg-warning text-info rounded px-5 " id="alert">!{{$result->message}}</label>
	</div>
	<div class="card-body">
		<table class="table table-bordered table-hover">
			<thead class="thead-light">
				<tr>
					<th>#</th>
					<th>Categories</th>
					<th>Brands</th>
					<th>Specifications</th>
					<th>Suppliers</th>
					<th>Quantity</th>
				</tr>
			</thead>
			<tbody>
				@if($result->result)
				@foreach($result->result as $data)
				<tr>
					<td>{{$data->id}}</td>
					<td>{{$data->connect_idproducts->namecategory->nameCategory}}</td>
					<td>{{$data->connect_idproducts->namebrand->namebrand}}</td>
					<td>{{$data->connect_idproducts->nameSpecification->specification}}</td>
					<td>{{$data->connect_suppliers->name}}</td>
					<td>{{$data->quantity}}</td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="buynew_modal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Buy New</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card">
					<div class="card-body">
						<form method="POST" action="{{route('product.store')}}">@csrf
							@method('POST')
							<fieldset class="form-group">
								<label for="select_productcategory">
									Category 
									( <input onclick="newcategoryfunction()" id="new_category" type="checkbox"> new)
								</label>
								<select  class="form-control" id="select_productcategory" name="select_productcategory" onchange="addoptionbrand()">
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
								<select  class="form-control"  name="select_productbrand" id="select_productbrand" onchange="addoptionspecification()">
									<option value="">Select One</option>
									
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
							<fieldset class="form-group " hidden>
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
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->












<script>
$(function() {
    // setTimeout() function will be fired after page is loaded
    // it will wait for 5 sec. and then will fire
    // $("#successMessage").hide() function
    setTimeout(function() {
        $("#alert").hide('blind', {}, 500)
    }, 1000);
});
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
	function addoptionbrand(){
		$.ajax({
      url:"{{route('product.getListCatagory')}}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
      method:"POST", // phương thức gửi dữ liệu.
      data:{query:query, _token:_token},
      success:function(data){ //dữ liệu nhận về
       $('#countryList').fadeIn();  
       $('#countryList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
     }
   });
	}
</script>
@endsection