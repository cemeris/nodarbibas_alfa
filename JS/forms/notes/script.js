
let form = document.querySelector(".calculator-wraper");

let handler = new Handler();

if (form) {
  form.addEventListener('submit', handler.handleNoteSubmit);
}
