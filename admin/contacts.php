<?php require_once 'template/include.php';?>
<?php require_once 'core/check_admin.php';?>
<?php require_once 'template/header.php';?>
<?php
$conn = connect();
$contacts = selectOneRow($conn, "SELECT * FROM contacts");
close($conn);
?>
<div class="admin-wrapper">
	<div class="title-department">Контакты</div>
	<div class="wrapper-blocks d-flex">
		<div class="block-department settings nr">
			<div class="block-title"><p class="pl-4">Панель редактирования</p></div>
			<div class="block-content pt-5">
				<div class="wrap-contacts d-flex">
					<div class="contact-left d-flex flex-column mr-3">
						<textarea name="for_order" id="for_order" class="contact-area " style="resize: none;"><?php echo $contacts['for_order'];?></textarea>
						<textarea name="cost_deliver" id="cost_deliver" class="contact-area " style="resize: none;"><?php echo $contacts['cost_deliver'];?></textarea>
						<textarea name="self_deliver" id="self_deliver" class="contact-area " style="resize: none;"><?php echo $contacts['self_deliver'];?></textarea>

					</div>
					<div class="contact-right d-flex flex-column">
						<textarea name="number_c" id="number_c" class="contact-area contact-number" style="resize: none;"><?php echo $contacts['number_c'];?></textarea>
						<textarea name="adress" id="adress" class="contact-area " style="resize: none;"><?php echo $contacts['adress'];?></textarea>
					</div>
				</div>
				<div class="btn-contacts" id="btn_contacts"> Update</div>
			</div>
		</div>
	</div>
</div>

<?php require_once 'template/footer_contacts.php';?>