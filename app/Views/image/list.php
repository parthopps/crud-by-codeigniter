<!DOCTYPE html>
<html>
<head>
	<title>crud operation</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<a class="btn btn-primary" href="<?php echo base_url('/books/create') ?>">Add</a>

		</div>
		<div class="row">
			<div class="col-md-8">
				<h4>crud</h4>

				<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">ISBN NO</th>
 
    </tr>
  </thead>
  <tbody>
<?php if(!empty($books)){ 

foreach($books as $book){

	?>

    <tr>
      <th scope="row"><?php echo $book['id'];?></th>
      <td><?php echo $book['des'];?></td>
      <td><?php echo $book['image'];?></td>
      <td><img src="<?php echo base_url('public/upload/'. $book['image']);?>" height='100' width='100'></td>
      
  </tr>
<?php 

}

} else{?>
 <td colspan="5"><a href="" class="btn btn-primary">Edit</a></td>
<?php }?>

  </tbody>
</table>
				
			</div>
		</div>
	</div>

</body>
</html>

