<?php require_once '../template/include_pages.php';?>
<?php require_once('../template/header_pages.php');?>
<?php
$cheesecake_id = $_GET['cheesecake_id'];
$conn = connect();
$cheesecake = selectOneRow($conn, "SELECT * FROM cheesecakes WHERE id=".$cheesecake_id);
close($conn);
?>
<main id="swup" class="transition-rotate">
    <div class="container">
        <div class="row">
            <div class="col s10 offset-s1">
                <h3 class="sweet-name d-md-none center d-sm-block mb-lg-5"><?php echo $cheesecake['name']?></h3>
                <div class="sweet-one-conteiner">
                    <div class="sweet-one-block">
                        <img src="/img/cheesecakes/<?php echo $cheesecake['image_1']?>" alt="sweet">
                    </div>
                    <!-- /.sweet-one-block -->
                    <div class="sweet-one-block">
                        <div class="sweet-one-description right-align">
                             <h3 class="sweet-name  d-md-block d-sm-none d-none mb-lg-5"><?php echo $cheesecake['name']?></h3>
                             <p class="sweet-description"><?php echo $cheesecake['description']?></p>
                             <span class="order d-block mb-2">Заказ</span>
                             <p class="to-order mb-5"><?php echo $cheesecake['to_order']?></p>
                        </div>
                        <!-- /.sweet-one-description -->
                    </div>
                    <!-- /.sweet-one-block -->
                    <div class="sweet-one-block">
                        <img src="/img/cheesecakes/<?php echo $cheesecake['image_2']?>" alt="sweet">
                    </div>
                    <!-- /.sweet-one-block -->
                </div>
                <!-- /.sweet-one-conteiner -->
            </div>
            <!-- /.col s10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</main>
<?php require_once('../template/footer_pages.php');?>
