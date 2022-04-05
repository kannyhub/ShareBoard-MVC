<?php
if (isset($_POST['add_post'])) {
	$this->add_post($_POST);
}
?>

<!-- Button trigger modal -->
<a href="#" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">add something</a>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  	<form method="POST">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Add Your Things Here</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <div class="mb-3">
			  <label for="title" class="form-label">Title</label>
			  <input type="text" class="form-control" id="title" name="title" placeholder="enter title" required>
			</div>
			<div class="mb-3">
			  <label for="body" class="form-label">Body</label>
			  <input type="text-area" class="form-control" id="body" name="body" placeholder="enter body" required>
			</div>
			<div class="mb-3">
			  <label for="link" class="form-label">Link</label>
			  <input type="text" class="form-control" id="link" name="link" placeholder="enter link" required>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" name="add_post">Add</button>
	      </div>
	    </div>
	</form>
  </div>
</div>

<div>
	<?php foreach ($viewmodel as $view) { ?>
		<div class="card text-white bg-dark m-3" style="max-width: 70rem;">
			<div class="card-header">
				<h4 class="card-title"><?php echo $view['title']; ?></h4>
			    <small><?php echo $view['create_date']; ?></small>
			</div>
		  <div class="card-body">
		    <p class="card-text"><?php echo $view['body']."..."; ?><a href="<?php echo $view['link']; ?>" target="_blank">Go to website</a></p>
		  </div>
		</div>
	<?php } ?>
</div>