<?php require_once ('template/include.php');?>
<?php require_once('template/header.php');?>
<?php
$conn = connect();
$cakes_price = selectRows($conn, "SELECT * FROM cakes_price");
$cakes = selectRows($conn, "SELECT * FROM cakes LIMIT 18");
$goods_count = selectOneRow($conn, "SELECT COUNT(*) FROM cakes");
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
                        for ($i=0; $i < count($cakes_price); $i++) { 
                            $rand_image = 1;
                            $out .= '       
                                <div class="item-sweet-price">
                                    <a href="/sweet-pages/sweet_cake_price.php?cake_price_id='.$cakes_price[$i]['id'].'" class="d-block"><img src="/img/cakes/'.$cakes_price[$i]['image_'.$rand_image.''].'" class="noselect" alt="sweet">
                                        <div class="d-flex justify-content-between style="margin: 0;">
                                            <span class="name">'.$cakes_price[$i]['name'].'</span>
                                            <span class="price">'.$cakes_price[$i]['cost'].'</span>            
                                        </div>
                                    </a>
                                </div>
                            ';
                        }
                        echo $out;
                    ?>                    
                </div>
                <!-- /.sweet-price-container -->
                <p class="order-foto mt-4 pt-2">Все оформление тортов мы создаем под заказ с индивидуальным подходом</p>
                <div id="sweet-container" class="sweet-container">
                    <?php
                        $out = '';
                        for ($i=0; $i < count($cakes); $i++) { 
                            $rand_image = 1;
                            $out .= '       
                                <div class="item-sweet">
                                    <a href="/sweet-pages/sweet_cake.php?cake_id='.$cakes[$i]['id'].'" class="d-block"><img src="/img/cakes/'.$cakes[$i]['image_'.$rand_image.''].'" class="noselect" alt="sweet"></a>
                                </div>
                            ';
                        }
                        echo $out;
                    ?>                    
                </div>
                <!-- /.sweet-container -->
                <?php
                    if($goods_count['COUNT(*)'] > 18){
                ?> 
                    <div id="more-cakes" class="more-sweets d-flex justify-content-center align-items-center mt-3" data-type-sweet="cakes" data-link-sweet="cake">
                        <span>Показать еще</span>
                        <img src="/img/reload-symbol.gif" alt="more sweets">
                    </div>
                    <!-- /.more-cakes -->                
                <?php       
                    }
                ?>
            </div>
            <!-- /.col s10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</main>
<?php require_once('template/footer.php');?>
