<x-app-layout >
    <div class="container mx-auto px-4 sm:px-8" x-data="taskManager">
        <div class="py-8">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold leading-tight">Invoices</h2>
                <button x-on:click="showCreateTaskModal()" class="outline-none mr-1 mb-1 border border-solid border-gray-700 rounded-full px-6 py-3 bg-transparent text-sm font-bold text-gray-700 uppercase focus:outline-none hover:bg-gray-600 hover:text-white" style="transition:all .15s ease">
                    <i class="fa-solid fa-plus"></i> Create Task
                </button>
            </div>
            @livewire('task-manager')
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div
                    class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
                >
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                                >
                                    ID
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                                >
                                    Title
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                                >
                                    Description
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                                >
                                    Status
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"
                                ></th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="task in tasks">
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" x-text="task.id"></td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" x-text="task.title"></td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" x-text="task.description"></td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="inline-flex items-center !bg-green-500 text-white text-xs font-medium px-2.5 py-0.5 rounded-full" x-show="task.status == 2">
                                            Completed
                                        </span>
                                        <span class="inline-flex items-center !bg-orange-500 text-white text-xs font-medium px-2.5 py-0.5 rounded-full" x-show="task.status == 1">
                                            In Progress
                                        </span>
                                        <span class="inline-flex items-center border border-solid border-gray-900 text-gray-900 text-xs font-medium px-2.5 py-0.5 rounded-full" x-show="task.status == 3">
                                            Open
                                        </span>
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right"
                                    >
                                        <button
                                        type="button"
                                        class="inline-block text-gray-500 hover:text-gray-700"
                                        >
                                        <svg
                                            class="inline-block h-6 w-6 fill-current"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z"
                                            />
                                        </svg>
                                        </button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>