import axios from 'axios';
import { Controller } from 'stimulus';
import { useDebounce } from "stimulus-use";

export default class extends Controller {
    static debounces = ['handle']

    connect() {
        useDebounce(this, { wait: 500 })
    }
    handle(event) {
        const input = event.target.innerText
        const outputElement = document.getElementById('output');

        if (0 === input.length) {
            outputElement.style.display='none';
        } else {
            axios.post('/sort', { input: input })
            .then(function (response) {
                outputElement.querySelector('.form-control').innerHTML = response.data.output;
                outputElement.style.display='block';
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    }
}
