<?php

include_once("./functions.php");
deleteUser();

?>

<?php include_once("./includes/header.php") ?>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="login_delete.php" method="post">
                            <div class="form-group">
                                <select name="id" id="">
                                    <?php 
                                        showAllData();
                                    ?>
                                    <!-- <option value="">1</option> -->
                                </select>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Delete" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once("./includes/footer.php") ?>