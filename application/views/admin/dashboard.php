<?php
$this->load->view('admin/include/header');
?>

<div class="container">
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="filepdf" class="form-control">
        <input type="text" name="headline" class="form-control mt-3">
        <input type="text" name="details" class="form-control mt-3">
        <button type="submit" class="btn btn-primary btn-lg btn-block mt-2">SUBMIT</button>

    </form>
    
</div>