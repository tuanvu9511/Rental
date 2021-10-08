@extends('layouts.master')
@section('content')
<!-- btn option -->

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

<script>
$(function() {
    // setTimeout() function will be fired after page is loaded
    // it will wait for 5 sec. and then will fire
    // $("#successMessage").hide() function
    setTimeout(function() {
        $("#alert").hide('blind', {}, 500)
    }, 1000);
});
</script>
@endsection