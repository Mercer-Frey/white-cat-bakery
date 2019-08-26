;(function(){

document.querySelector('#for_order').oninput = change_for_order;
document.querySelector('#cost_deliver').oninput = change_cost_deliver;
document.querySelector('#self_deliver').oninput = change_self_deliver;
document.querySelector('#number_c').oninput = change_number_c;
document.querySelector('#adress').oninput = change_adress;


    for_order = document.querySelector('#for_order').value;
    cost_deliver = document.querySelector('#cost_deliver').value;
    self_deliver = document.querySelector('#self_deliver').value;
    number_c = document.querySelector('#number_c').value;
    adress = document.querySelector('#adress').value;

function change_for_order (){
    for_order = this.value;
}
function change_cost_deliver (){
    cost_deliver = this.value;
}
function change_self_deliver (){
    self_deliver = this.value;
}
function change_number_c (){
    number_c = this.value;
}
function change_adress (){
    adress = this.value;
}

document.querySelector('#btn_contacts').onclick = function (e) {

    let data = {
        "for_order": for_order,
        "cost_deliver": cost_deliver,
        "self_deliver": self_deliver,
        "number_c": number_c,
        "adress": adress
    }
    ajax('core/contacts_update.php', 'POST', data, contacts_update);

    function contacts_update(result) {

        if (result == 4) {
            M.toast({ html: 'Контакты успещно обновлены' });
            setTimeout(function () {
                location.href = "contacts.php";
            }, 1000);
            document.querySelector('#btn_contacts').onclick = null;
        }
        else if (result == 1) {
            M.toast({ html: 'Поля не могу быть пустыми' });
        }                   
        else {
            M.toast({ html: 'Неизвестаня ошибка' });
            M.toast({ html: 'обновите страницу и' });
            M.toast({ html: 'попробуйте еще раз' });
        }
    }
}
})();
