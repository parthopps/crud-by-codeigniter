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
			<div class="col-md-8">
				<h4>Edit</h4>

        <form class="" method="post" action="<?php echo base_url('books/edit/'.$book['id']); ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control " name="name" placeholder="Enter email" value="<?php echo set_value('name',$book['name']) ?>">
            <?php
           if(isset($validation) && $validation->hasError('name')){
           echo $validation->getError('name');
         }
            ?>
            
          </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" class="form-control" name="author" placeholder="Enter email" value="<?php echo set_value('author',$book['author']) ?>">

            <?php
           if(isset($validation) && $validation->hasError('author')){
           echo $validation->getError('author');
         }
            ?>
            
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">ISBN NO</label>
            <input type="text" class="form-control" name="isbn_no" placeholder="Enter email" value="<?php echo set_value('isbn_no',$book['isbn_no']) ?>">

            <?php
           if(isset($validation) && $validation->hasError('isbn_no')){
           echo $validation->getError('isbn_no');
         }
            ?>
            
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
</form>

			
				
			</div>
		</div>
	</div>

</body>
</html>