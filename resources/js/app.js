import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const button_delete = document.querySelectorAll('.btn_delete')

button_delete.forEach((button) => {
    button.addEventListener('click', function () {
        let car_id = button.getAttribute('data-carid');
        let car_name = button.getAttribute('data-carname');
        let type = button.getAttribute('data-type')
        let text_delete = document.getElementById('text_delete');
        text_delete.innerText = 'sei sicuro di voler eliminare ' + car_name + '?';
        let url = `${window.location.origin}/admin/${type}/${car_id}`;
        let form_delete = document.getElementById('form_delete');
        form_delete.setAttribute('action', url);
    })
})