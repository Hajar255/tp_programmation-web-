const form = document.getElementById("taskForm");
const input = document.getElementById("taskInput");
const taskList = document.getElementById("taskList");

form.addEventListener("submit", function(event) {
  event.preventDefault();

  const taskText = input.value.trim();
  if (taskText === "") return;

  const li = document.createElement("li");
  li.textContent = taskText;

  const completeBtn = document.createElement("button");
  completeBtn.textContent = "✔️";
  completeBtn.addEventListener("click", () => {
    li.classList.toggle("completed");
  });

  const deleteBtn = document.createElement("button");
  deleteBtn.textContent = "❌";
  deleteBtn.addEventListener("click", () => {
    taskList.removeChild(li);
  });

  li.appendChild(completeBtn);
  li.appendChild(deleteBtn);
  taskList.appendChild(li);

  input.value = "";
});
