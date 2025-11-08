document.addEventListener("DOMContentLoaded", () => {
    const taskList = document.getElementById("task-list");
    const taskInput = document.getElementById("task-input");
    const addTaskBtn = document.getElementById("add-task");

    function validarFormulario() {
        const input = document.getElementById('task-input').value.trim();
        if (input === "") {
            alert("Por favor, escribe una tarea antes de agregarla.");
            return false;
        }
        return true;
    }

    function validarFormularioLogin() {
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();
        if (username === "" || password === "" ) {
            alert("Campos de usuario y clave son requeridos.");
            return false;
        }
        return true;
    }
    /*
    function loadTasks() {
        
    }

    function sendRequest(action, data) {

    }

    addTaskBtn.addEventListener("click", () => {

    });

    taskList.addEventListener("click", event => {
        
    });

    loadTasks();
    */
});
