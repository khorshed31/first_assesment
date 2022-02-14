<?php include 'header.php'?>

<style>
    body{
        background-color: #545b62;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card bg-info text-white">
                    <div class="card-header text-center bg-dark">
                        <h4> Upload Image</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="text-warning text-center"><?php echo isset($message) ? $message : '' ;?></h5>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-dark" name="img_btn" value="Upload"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
