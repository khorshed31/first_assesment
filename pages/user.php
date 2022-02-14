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
                            <th>Email</th>
                            <th>Image</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user){?>
                            <tr>
                                <td><?php echo $user['id'] ;?></td>
                                <td><?php echo $user['name'] ;?></td>
                                <td><?php echo $user['email'] ;?></td>
                                <td><img src="assets/img/<?php echo $user['image'] ;?>" alt="" class="w-25"></td>
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

