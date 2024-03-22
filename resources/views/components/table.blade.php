<!-- New Table -->
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <div class="mb-4 flex items-center">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Category</span>
                <select id="categoryFilter"
                    @disabled(true) class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-select" >
                    <option value="">All</option>
                    <option value="board">Board Members</option>
                    <option value="student">Students</option>
                </select>
            </label>
        
            <label class="block text-sm ml-4">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input id="search"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Jane Doe">
            </label>
        </div>
        

        <table id="studentTable" class="w-full whitespace-no-wrap">
            <thead>

                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">View</th>
                </tr>
            </thead>


            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                @foreach ($student as $item)
                
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full"
                                        src="{{ $item->gravatar_url }}"
                                        alt="{{ $item->full_name }}" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $item->full_name }}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                        {{ $item->course }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                           Student
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                {{ $item->status ?? 'Pending' }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $item->created_at->format('Y-m-d') }}
                        </td>

                        <td class="px-4 py-3 text-sm">
                            <div>
                                <button data-user-id="{{ $item->id }}" @click="openModal"
                                    class="view-btn px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                    view
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3" id="page-info">
            {{-- Showing 21-30 of 100 --}}
        </span>
        <span class="col-span-2"></span>

        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end pagination"></span>

    </div>
</div>
