require('./bootstrap');
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

let form = document.querySelector(".prevent-multiple-submit-form");
console.log(form);
let btnSubmit = document.querySelector(".prevent-multiple-submit-button")
// using null safty opertaor
form?.addEventListener("submit", () => {
  btnSubmit.setAttribute("disabled", true)
});
