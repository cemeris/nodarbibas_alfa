
let form = document.querySelector(".calculator-wraper");

let storage = new StorageManager("todo_list");
let all_entries = storage.getAll();
for (let id in all_entries) {
  const entry = all_entries[id];
  displayTask(entry.title, entry.description);
}

let handler = new Handler();

if (form) {
  form.addEventListener('submit', handler.handleTodoSubmit);
}

function displayTask(title, description) {
  let output = document.querySelector('.output');

  let task = document.createElement('div');
  let task_title = document.createElement('h4');
  let task_description = document.createElement('pre');
  task_title.textContent = title;
  task_description.textContent = description;
  task.append(task_title);
  task.append(task_description);

  output.append(task);
}
