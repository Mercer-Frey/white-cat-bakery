<?php require_once ('template/include.php');?>
<?php require_once('template/header.php');?>
<?php
$conn = connect();
$pasta_price = selectRows($conn, "SELECT * FROM pasta_price");
close($conn);
?>
<main id="swup" class="transition-rotate">
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1">
                <p class="push-foto"><b>Нажмите</b> на фото для получения подробной информации</p>
                <div class="sweet-price-container">
                    <?php
                        $out = '';
                        for ($i=0; $i < count($pasta_price); $i++) { 
                            $rand_image = 1;
                            $out .= '       
                                <div class="item-sweet-price">
                                    <a href="/sweet-pages/sweet_pasta_price.php?pasta_price_id='.$pasta_price[$i]['id'].'" class="d-block"><img src="/img/pasta/'.$pasta_price[$i]['image_'.$rand_image.''].'" class="noselect" alt="sweet">
                                        <div class="d-flex justify-content-between style="margin: 0;">
                                            <span class="name">'.$pasta_price[$i]['name'].'</span>
                                            <span class="price">'.$pasta_price[$i]['cost'].'</span>            
                                        </div>
                                    </a>
                                </div>
                            ';
                        }
                        echo $out;
                    ?>                    
                </div>
            </div>
            <!-- /.col s10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</main>
<?php require_once('template/footer.php');?>
