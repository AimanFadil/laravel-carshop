import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const button_delete = document.querySelector('.btn_delete')

button_delete.forEach((button) => {
    button.addEventListener('click', function () {
        let post_id = button.getAttribute('data-postid');

        let url = `$(window.location.origin)/admin/posts/${post_id}`;
        let form_delete = document.getElementById('form_delete');
        form_delete.setAttribute('action', url);
    })
})