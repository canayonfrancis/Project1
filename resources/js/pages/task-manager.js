import Alpine from 'alpinejs';

Alpine.data('taskManager', () => ({
    taskModal: false,
    
    tasks: [],

    newTaskTitle: "",
    newTaskDescription: "",
    newTaskStatus: "",

    init() {
        
    },

    showCreateTaskModal() {
        this.taskModal = true;
    },

    hideCreateTaskModal() {
        this.taskModal = false;
    },

    createTask() {
        this.tasks.push({
            title: this.newTaskTitle,
            description: this.newTaskDescription,
            status: this.newTaskStatus
        });

        this.newTaskTitle = "";
        this.newTaskDescription = "";
        this.newTaskStatus = "";

        this.taskModal = false;
    }

}));