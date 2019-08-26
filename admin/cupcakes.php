<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<?php
$conn = connect();
$good_data = selectRows($conn, "SELECT * FROM cupcakes_price");
$good_count = selectOneRow($conn, "SELECT COUNT(*) FROM cupcakes_price");
close($conn);
?>
<div class="admin-wrapper">
	<div class="title-department">Капкейки</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department edit-main nr">
			<div class="block-title d-flex justify-content-between"><p class="ml-4" >Список товаров</p><p class="count-good mr-5"><?php echo $good_count['COUNT(*)']?> шт.</p></div>
			<div class="block-content d-flex justify-content-between pt-2">
				<div class="main-container">
					
                    <?php
                        $out = '';
                        for ($i=0; $i < count($good_data); $i++) { 
                            $out .= '       

								<div class="item-good d-flex align-items-center">
									<a href="#" data-good-id="'.$good_data[$i]['id'].'" data-category="cupcakes_price" data-image1="'.$good_data[$i]['image_1'].'" data-image2="'.$good_data[$i]['image_2'].'" id="delete_good">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M4.00016 12.6667C4.00016 13.4 4.60016 14 5.3335 14H10.6668C11.4002 14 12.0002 13.4 12.0002 12.6667V4.66667H4.00016V12.6667ZM12.6668 2.66667H10.3335L9.66683 2H6.3335L5.66683 2.66667H3.3335V4H12.6668V2.66667Z" fill="#C2CFE0"/>
										</svg>
									</a>

									<img src="../img/cupcakes/'.$good_data[$i]['image_1'].'" alt="">
									<p class="m-0 p-0">'.$good_data[$i]['name'].'</p>
									<div class="d-flex price-block">
										<span>'.$good_data[$i]['cost'].'</span>
										<a href="edit_good.php?good_id='.$good_data[$i]['id'].'&good_category=cupcakes_price&folder=cupcakes" class="edit-good-btn center">Edit</a>									
									</div>
								</div>

                            ';
                        }
                        echo $out;
                    ?>  
					<a href="add_good.php?category=cupcakes_price" class="btn-video mt-2 d-block add-good-btn" data-category="cupcakes_price">Add good</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once 'template/footer_goods.php';?>