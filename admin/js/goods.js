;(function(){

	document.querySelectorAll('#delete_good').forEach(function (e) {
		e.addEventListener('click', deleteGood);
	})

	function deleteGood(){
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  type: 'question',
		  showCancelButton: true,
		  confirmButtonColor: '#109CF1',
		  cancelButtonColor: '#C2CFE0',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.value){

				let good_id = this.getAttribute('data-good-id');
				let good_category = this.getAttribute('data-category');
				let old_image_1 = this.getAttribute('data-image1');
				let old_image_2 = this.getAttribute('data-image2');


				console.log(good_id);
				console.log(good_category);

				
				const url = 'core/delete_good.php';
				const formData = new FormData();

				formData.append('good_id', good_id);
				formData.append('good_category', good_category);
				formData.append('old_image_1', old_image_1);
				formData.append('old_image_2', old_image_2);

				fetch(url, {
				    method: 'POST',
				    body: formData,
				})
				.then(function (response) {
				  return response.text();
				})
				.then(function (body) {
					if(body === '4'){
						 Swal.fire(
					      'Deleted!',
					      'Your file has been deleted.',
					      'success'
					    )
			            setTimeout(function () {
			            	if(good_category === 'cakes' || good_category === 'cakes_price' ) location.href = "cakes.php";
			            	if(good_category === 'pasta_price') location.href = "pasta.php";
			            	if(good_category === 'cupcakes_price') location.href = "cupcakes.php";
			            	if(good_category === 'cheesecakes_price') location.href = "cheesecakes.php";
			            }, 1000);
				    }              
			        else {
			            M.toast({ html: 'Неизвестаня ошибка' });
			            M.toast({ html: 'обновите страницу и' });
			            M.toast({ html: 'попробуйте еще раз' });
			        }
			        console.log(body);
				});
			}
		})
	}


})();



