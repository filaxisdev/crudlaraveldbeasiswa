<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
			<h1>Edit Data Beasiswa</h1>
			@if(session('sukses'))
			<div class="alert alert-success" role="alert">
 				{{session('sukses')}}
			</div>
			@endif
			<div class="row">
				<div class="col-lg-12">						
        		<form action="/beasiswa/{{$beasiswa->id}}/update" method="POST">
        			{{csrf_field()}}
				 <div class="form-group">
					<label for="exampleInputEmail1">ID</label>
					<input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->id}}">
				 </div>

				 <div class="form-group">
					<label for="exampleInputEmail1">Name</label>
					<input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->name}}">
				 </div>

				 <div class="form-group">
				    <label for="exampleInputEmail1">Country</label>
				    <input name="countries" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->countries}}">
				 </div>

				 <div class="form-group">
    				<label for="exampleFormControlTextarea1">Description</label>
    				<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$beasiswa->description}}</textarea>
  				 </div>

				 <div class="form-group">
				    <label for="exampleInputEmail1">Document</label>
				    <input name="document" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->document}}">
				 </div>

				 <div class="form-group">
				    <label for="exampleInputEmail1">Source</label>
				    <input name="source" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->source}}">
				 </div>

				 <div class="form-group">
				    <label for="exampleInputEmail1">Date Opening</label>
				    <input name="date_opening" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->date_opening}}">
				 </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Date Closing</label>
				    <input name="date_closing" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->date_closing}}">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">GPA</label>
				    <input name="gpa" type="float" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->gpa}}">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Toefl</label>
				    <input name="toefl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->toefl}}">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Major</label>
				    <input name="majors" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->majors}}">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Grade</label>
				    <input name="grades" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$beasiswa->grades}}">
				  </div>
									  
													
      							</div>
      							<div class="modal-footer">
        							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        							<button type="submit" class="btn btn-warning">Update</button>
        							</form>
      							</div>
    						</div>
  						</div>
					</div>
				</div>

				
		</div>

		
	


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>


