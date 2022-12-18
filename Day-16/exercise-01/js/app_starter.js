const COMPLETE = true;
const NOT_COMPLETE = false;
let tasks =[
    {'task': "Learn Basic of JS", 'status': COMPLETE},
    {'task': "Learn Array", 'status': COMPLETE},
    {'task': "Learn Php", 'status': NOT_COMPLETE},
    {'task': "Learn Python", 'status': COMPLETE},
    {'task': "Learn DSA", 'status': NOT_COMPLETE},
]



const taskInput = document.getElementById('addTask')
const addBtn = document.getElementById('btnAdd')
const allTasks = document.getElementById('allTasks')
const completedTasks = document.getElementById('completedTasks')
addBtn.addEventListener('click', function (e) {
    var taskName = taskInput.value;
    taskInput.value = '';
    tasks.push ({'task': taskName,'status': NOT_COMPLETE});
    console.log(tasks)
});


const initTasks = function () {
   

    tasks.forEach((task) =>{
        var taskHtml = `  <li data-task-id="${task.task}" class="item" >
        <input type="checkbox" name="tick">
            <span>
                ${task.task}
            </span>
        </li>`;

        var completeHtml = `<li data-task-id="${task.task}" class="item" >
                <span>
                    ${task.task}
                </span>
                <a href="#!"  class="close">
                <i class="fas fa-close"></i>
                </a>
            </li>`;

        if (task.status == NOT_COMPLETE){
            allTasks.innerHTML += (taskHtml)
            taskEl = allTasks.querySelectorAll(`[data-task-id="${task.task}"]`)[0];
            taskEl.addEventListener('click', function () {

            });

        } else {
            completedTasks.innerHTML += (completeHtml)
            taskEl = completedTasks.querySelectorAll(`[data-task-id="${task.task}"]`)[0];
            taskEl.addEventListener('click', function () {
                
            });
        }

        console.log(taskEl);
    });
};

initTasks();