;(function(){

	document.querySelector('#new_image_1').onchange = outputFileName;
	document.querySelector('#new_image_2').onchange = outputFileName;

	function outputFileName (e){
		console.log(this);
		console.log(e);
		this.previousElementSibling.innerHTML = this.files[0].name;
		this.previousElementSibling.previousElementSibling.remove();
	};


	document.querySelector('#btn_master_data').onclick = addGallery;

	function addGallery(){
		let files_1 = document.querySelector('#new_image_1').files;
		let files_2 = document.querySelector('#new_image_2').files;

		if(files_1.length > 0 && files_2.length > 0){

			let name = document.querySelector('#name').value;
			let description = document.querySelector('#description').value;
			let to_order = document.querySelector('#to_order').value;
			let good_category = this.getAttribute('data-category');
			let cost = '';

			if(good_category === 'cakes'){
				cost = 'cakes';
			}else cost = document.querySelector('#cost').value;
			

			if(name.trim() !== '' && cost.trim() !== '' && description.trim() !== '' && to_order.trim() !== ''){

				const url = 'core/add_good.php';
				const formData = new FormData();


			    for (let i = 0; i < files_1.length; i++) {
			        let file_1 = files_1[i];

			        formData.append('files_1[]', file_1);
			    }
			    for (let i = 0; i < files_2.length; i++) {
			        let file_2 = files_2[i];

			        formData.append('files_2[]', file_2);
			    }		    

				formData.append('name', name);
				formData.append('cost', cost);
				formData.append('description', description);
				formData.append('to_order', to_order);
				formData.append('good_category', good_category);

				let valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;   

				if(files_1[0].size < 3145728){

					if(files_2[0].size < 3145728){

						if(valid_extensions.test(files_1[0].name)){

							if(valid_extensions.test(files_2[0].name)){

							    fetch(url, {
							        method: 'POST',
							        body: formData,
								}).then(function (response) {
								  return response.text();
								})
								.then(function (body) {

									if(body === '4'){
								    	M.toast({ html: 'Товар успешно добавлен' });
							            setTimeout(function () {
			           						if(good_category === 'cakes' || good_category === 'cakes_price' ) location.href = "cakes.php";
			           						if(good_category === 'pasta_price') location.href = "pasta.php";
			           						if(good_category === 'cupcakes_price') location.href = "cupcakes.php";
			           						if(good_category === 'cheesecakes_price') location.href = "cheesecakes.php";
							            }, 1000);
		            					document.querySelector('#btn_master_data').onclick = null;
								    }      
								    else if(body === '6'){
								    	M.toast({ html: 'Возможные расширения jpg, jpeg, png, gif'});
								    }  
								     else if(body === '1'){
								    	M.toast({ html: 'Поля не могу быть пустыми'});
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

							} else M.toast({ html: 'Возможные расширения jpg, jpeg, png, gif (картинка 2)'});

						} else M.toast({ html: 'Возможные расширения jpg, jpeg, png, gif (картинка 1)'});

					} else M.toast({ html: 'Картинка 2 превышает 3 МБ' });

				} else M.toast({ html: 'Картинка 1 превышает 3 МБ' });

			}else M.toast({ html: 'поля не могут быть пустыми' });

		}else M.toast({ html: 'Фаил отсутствует' });
		
	}	
	
})();



