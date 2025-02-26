class Handler
{
  handleNoteSubmit (ev) {
    ev.preventDefault();
    let note_message_el = form.querySelector('[name=note_message]')
    let note_message = note_message_el.value;
  
    let output = document.querySelector('.output');

    let note_el = document.createElement('p');
    note_el.textContent = note_message;
    output.append(note_el);

    note_message_el.value = "";
  }
  
}