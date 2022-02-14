<?php include 'header.php';?>
<style>
    body{
        background-color: #545b62;
    }
</style>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="action.php" method="post">
                    <div class="input-group p-4">
                        <input type="text" class="form-control" name="search"/>
                        <div class="input-group-append">
                            <button type="submit" name="search_btn" class="btn btn-dark">
                                <i class="fa fa-search"> Search</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php if (isset($result['id'])) {?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $result['image'];?>" alt="" class="card-img-top w-100"/>
                        <div class="card-body bg-info">
                            <h3 class="card-title"><?php echo $result['name'];?></h3>
                            <h3 class=""><?php echo $result['price'];?></h3>
                            <hr/>
                            <a href="action.php?pages=detail&&id=<?php echo $result['id'];?>" class="btn btn-dark">Details</a>
                        </div>
                    </div>
                </div>
            <?php } else {?>
                <h3 class="text-danger">Sorry...No Record Found</h3>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php';?>

