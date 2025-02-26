class Handler
{
  handleTodoSubmit (ev) {
    ev.preventDefault();
    let title_el = form.querySelector('[name=task_title]')
    let title = title_el.value;

    let description_el = form.querySelector('[name=task_description]')
    let description = description_el.value;

    storage.add({
      title: title,
      description: description
    });
  
    displayTask(title, description);

    form.reset();
  }
  
}