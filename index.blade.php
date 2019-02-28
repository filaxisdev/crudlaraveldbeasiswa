<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
			@if(session('sukses'))
			<div class="alert alert-success" role="alert">
 				{{session('sukses')}}
			</div>
			@endif
			<div class="row">
				<div class="col-6">
				<h1>Data Beasiswa</h1>
				</div>
				<div class="col-6">
		<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
  						Tambah Data Beasiswa
					</button>

		<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  					<div class="modal-dialog" role="document">
    					<div class="modal-content">
      						<div class="modal-header">
        						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
      						</div>
      							<div class="modal-body">
        							<form action="/beasiswa/create" method="POST">
        								{{csrf_field()}}
									  <div class="form-group">
									    <label for="exampleInputEmail1">ID</label>
									    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Name</label>
									    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Country</label>
									    <input name="countries" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
    									<label for="exampleFormControlTextarea1">Description</label>
    									<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Document</label>
									    <input name="document" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Source</label>
									    <input name="source" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Date Opening</label>
									    <input name="date_opening" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Date Closing</label>
									    <input name="date_closing" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">GPA</label>
									    <input name="gpa" type="float" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Toefl</label>
									    <input name="toefl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Major</label>
									    <input name="majors" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>

									   <div class="form-group">
									    <label for="exampleInputEmail1">Grade</label>
									    <input name="grades" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
									   </div>
									  
									  
									
      							</div>
      							<div class="modal-footer">
        							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        							<button type="submit" class="btn btn-primary">Submit</button>
        							</form>
      							</div>
    						</div>
  						</div>
					</div>
				</div>

				<table class="table">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Country</th>
						<th>Description</th>
						<th>Document</th>
						<th>Source</th>
						<th>Date Opening</th>
						<th>Date Closing</th>
						<th>GPA</th>
						<th>Toefl</th>
						<th>Major</th>
						<th>Grade</th>
						<th>Aksi</th>
					</tr>
					@foreach($data_beasiswa as $beasiswa)
					<tr>
					<td>{{$beasiswa->id}}</td>
					<td>{{$beasiswa->name}}</td>
					<td>{{$beasiswa->countries}}</td>
					<td>{{$beasiswa->description}}</td>
					<td>{{$beasiswa->document}}</td>
					<td>{{$beasiswa->source}}</td>
					<td>{{$beasiswa->date_opening}}</td>
					<td>{{$beasiswa->date_closing}}</td>
					<td>{{$beasiswa->gpa}}</td>
					<td>{{$beasiswa->toefl}}</td>
					<td>{{$beasiswa->majors}}</td>
					<td>{{$beasiswa->grades}}</td>
					<td>
						<a href="/beasiswa/{{$beasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
						<a href="/beasiswa/{{$beasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure for delete this?')">Delete</a>
					</td>
					</tr>
					@endforeach
				</table>	
			</div>
		</div>

		
	


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>


