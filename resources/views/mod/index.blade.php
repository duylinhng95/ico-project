@extends('mod.layout', ['user' => $user, 'brand' => $brand])
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">List User</h1>
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th> Name </th>
								<th> Email </th>
								<th> KYC Step </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $u)
								
									<tr>
										<td> {{$u->name}} </td>
										<td> {{$u->email}} </td>
										@if($u->is_kyc !=  1)
											<td> NO KYC</td>
											<td><button class="btn btn-default" onclick="popitup('mod/{{$u->id}}')">Verify KYC</button></td>
										@else
											<td>DONE KYC</td>
											<td><button class="btn btn-default" onclick="popitup('mod/{{$u->id}}')" disabled>Verify KYC</button></td>
										@endif	
									</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function popitup(url) {
    newwindow=window.open(url,'name','width=600');
    if (window.focus) {newwindow.focus()}
	return false;
}

</script>
@endsection