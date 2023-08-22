<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <form class="flex items-center">   
        <label for="voice-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input wire:model="search" type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required>
            <button type="button" class="flex absolute inset-y-0 right-0 items-center pr-3">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>Search</button>
    </form>
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Ism</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Faoliyat</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Qo'shilgan sana:</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Jamoa</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Amal</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        @foreach ($users as $user)
        <tr class="hover:bg-gray-50">
            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
              <div class="relative h-10 w-10">
                <img
                  class="h-full w-full rounded-full object-cover object-center"
                  src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt=""
                />
                <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
              </div>
              <div class="text-sm">
                <div class="font-medium text-gray-700">{{ $user->name }}</div>
                <div class="text-gray-400">{{ $user->email }}</div>
              </div>
            </th>
            <td class="px-6 py-4">
              <span
                class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600"
              >
                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                Active
              </span>
            </td>
            <td class="px-6 py-4">{{ $user->created_at->format('d-m-Y') }}</td>
            <td class="px-6 py-4">
              <div class="flex gap-2">
                <span
                  class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
                >
                  Design
                </span>
                <span
                  class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600"
                >
                  Product
                </span>
                <span
                  class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600"
                >
                  Develop
                </span>
              </div>
            </td>
            <td class="px-6 py-4">
              <div class="flex justify-end gap-4">
                <a x-data="{ tooltip: 'Delete' }" href="#">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6"
                    x-tooltip="tooltip"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                    />
                  </svg>
                </a>
                <a x-data="{ tooltip: 'Edite' }" href="#">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6"
                    x-tooltip="tooltip"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                    />
                  </svg>
                </a>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
