<?php include 'header.php'?>

<style>
    body{
        background-color: #545b62;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card bg-info text-white">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th>Image</th>
                            <th>Category</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products as $product){?>
                            <tr>
                                <td><?php echo $product['id'] ;?></td>
                                <td><?php echo $product['name'] ;?></td>
                                <td><?php echo $product['description'] ;?></td>
                                <td><?php echo $product['price'] ;?></td>
                                <td><?php echo $product['brand'] ;?></td>
                                <td><img src="assets/img/<?php echo $product['image'] ;?>" alt="" class="w-25"></td>
                                <td><?php echo $product['category'] ;?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
