;(function(){

	document.querySelector('#new_image').onchange = outputFileName;

	function outputFileName (e){
		console.log(this);
		console.log(e);
		this.previousElementSibling.innerHTML = this.files[0].name;
		this.previousElementSibling.previousElementSibling.remove();
	};

	document.querySelectorAll('.delete-gallery').forEach(function(e){
		e.addEventListener('click', deleteGallery);
	});

	function deleteGallery(){
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

				let gallery_id = this.getAttribute('data-gallery-edit');
				let gallery_image = this.getAttribute('data-gallery-image');

				const url = 'core/master_gallery_delete.php';
				const formData = new FormData();

				formData.append('gallery_id', gallery_id);
				formData.append('gallery_image', gallery_image);

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
			                location.href = "master_gallery.php";
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


	document.querySelector('#btn_master_data').onclick = addGallery;

	function addGallery(){
		let files = document.querySelector('#new_image').files;
		if(files.length > 0){

			const url = 'core/master_gallery_add.php';
			const formData = new FormData();

		    for (let i = 0; i < files.length; i++) {
		        let file = files[i];

		        formData.append('files[]', file);
		    }

			let valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;   

			if(files[0].size < 3145728){

				if(valid_extensions.test(files[0].name)){

				    fetch(url, {
				        method: 'POST',
				        body: formData,
					}).then(function (response) {
					  return response.text();
					})
					.then(function (body) {

						if(body === '4'){
					    	M.toast({ html: 'Галлерея успешно обновлена' });
				            setTimeout(function () {
				                location.href = "master_gallery.php";
				            }, 1000);
		            		document.querySelector('#btn_master_data').onclick = null;
					    }      
					    else if(body === '6'){
					    	M.toast({ html: 'Возможные расширения jpg, jpeg, png, gif'});
					    }  
					    else if(body === '8'){
					    	M.toast({ html: 'файла не существует'});
					    }  			    
					    else if(body === '7'){
					    	M.toast({ html: 'Размер файла не может превышать больше 3 МБ' });
					    }  			    			             
				        else {
				            M.toast({ html: 'Неизвестаня ошибка' });
				            M.toast({ html: 'обновите страницу и' });
				            M.toast({ html: 'попробуйте еще раз' });
				        }
				        console.log(body);

				    });

				} else M.toast({ html: 'Возможные расширения jpg, jpeg, png, gif'});

			} else M.toast({ html: 'Размер файла не может превышать больше 3 МБ' });

		}else M.toast({ html: 'Фаил отсутствует' });
		
	}	
	
})();



