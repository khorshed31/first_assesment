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
            <?php foreach ($products as $product){?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image'];?>" alt="" class="card-img-top w-100"/>
                        <div class="card-body bg-info">
                            <h3 class="card-title"><?php echo $product['name'];?></h3>
                            <h3 class=""><?php echo $product['price'];?></h3>
                            <hr/>
                            <a href="action.php?pages=detail&&id=<?php echo $product['id'];?>" class="btn btn-dark">Details</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
