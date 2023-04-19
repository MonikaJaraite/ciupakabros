import 'bootstrap';
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

document.querySelectorAll('.--random--color')
    .forEach(div => div.style.backgroundColor = randColor());

if (document.querySelector('.--colors--counter')) {
    const range = document.querySelector('input.--colors--counter');
    const print = document.querySelector('span.--colors--counter');
    range.addEventListener('change', _ => print.innerText = range.value);
}