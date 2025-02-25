<div>
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="taskModal">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-gray-50 px-4 py-3">
                        <h2 class="font-bold text-gray-900">Create Task</h2>
                    </div>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:mt-0sm:text-left">
                            <div>
                                <label for="" class="block text-sm/6 font-medium text-left text-gray-900">Label</label>
                                <div>
                                    <input x-model="newTaskTitle" type="text" class="shadow-sm border-gray-300 rounded-lg w-full focus:ring-2 focus:ring-indigo-200 focus:border-indigo-400" placeholder="Enter task label"></input>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="" class="block text-sm/6 font-medium text-left text-gray-900">Status</label>
                                <div>
                                    <select x-model="newTaskStatus" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                                        <option selected>Select status</option>
                                        <option value="3">Open</option>
                                        <option value="1">In Progress</option>
                                        <option value="2">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="" class="block text-sm/6 font-medium text-left text-gray-900">Description</label>
                                <div>
                                    <textarea type="text" x-model="newTaskDescription" class="shadow-sm border-gray-300 rounded-lg w-full focus:ring-2 focus:ring-indigo-200 focus:border-indigo-400" placeholder="Enter task description"></textarea>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" class="inline-flex w-full justify-center rounded-md bg-gray-700 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-600 sm:ml-3 sm:w-auto" x-on:click="createTask()">Create</button>
                        <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50 sm:mt-0 sm:w-auto" x-on:click="hideCreateTaskModal()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
