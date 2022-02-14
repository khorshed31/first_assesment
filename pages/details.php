<?php include 'header.php';?>
<style>
    body{
        background-color: #545b62;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <a href="action.php?pages=product"><i class="fa fa-arrow-circle-left text-info">Back</i></a>
            </div>
            <div class="col-md-6">
                <img src="assets/img/<?php echo $result['image'];?>" alt=""class="card-img-top w-75"/>
            </div>
            <div class="col-md-5 bg-info p-5">
                <h1><?php echo $result['name'];?></h1>
                <h4><?php echo $result['price'];?></h4>
                <p><?php echo $result['category'];?></p>
                <p><?php echo $result['brand'];?></p>
                <p><?php echo $result['description'];?></p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
