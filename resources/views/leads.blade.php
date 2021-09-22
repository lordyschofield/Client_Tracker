@extends('layouts.app')

@section('content')











<body class="antialiased font-sans bg-gray-200">
  <div class="container mx-auto px-4 sm:px-8">
      <div class="py-8">
          <div>
              <h2 class="text-2xl font-semibold leading-tight">Leads</h2>
          </div>
          
            
          <div class="flex items-center mt-2">
            <div class="flex border-2 rounded">
                <input type="text" class="px-4 py-2 w-80" placeholder="Search...">
                <button class="flex items-center justify-center px-4 border-l">
                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                    </svg>
                </button>
                
            </div>
            <button class="relative ml-80 bg-transparent hover:bg-gray-600 text-gray-600 font-bold hover:text-white py-2 px-4 border border-gray-600 hover:border-transparent rounded">
                Create Leads
            </button>

            <div class="p-4">
    <div class="group relative">
        <button class="bg-gray-800 text-white px-6 h-10 rounded">Action</button>
        <nav tabindex="0" class="border border-2 bg-white invisible border-gray-800 rounded w-60 absolute left-0 top-full transition-all opacity-0 group-focus-within:visible group-focus-within:opacity-100 group-focus-within:translate-y-1">
            <ul class="py-1">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                        Edit
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                        Delete
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                        Reply
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
        </div>

        


          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                  <table class="min-w-full leading-normal">
                      <thead>
                          <tr>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Lead Name
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Company
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Email
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Phone
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Lead Source
                              </th>
                              <th
                                  class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Lead Owner
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      Some Subject
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  Some Status
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Some Priority
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  Some Company
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  Some Name
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  Some Activity Owner
                              </td>
                          </tr>
                          
                      </tbody>
                  </table>
                  <div
                      class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                      <span class="text-xs xs:text-sm text-gray-900">
                          Showing 1 to 4 of 50 Entries
                      </span>
                      <div class="inline-flex mt-2 xs:mt-0">
                          <button
                              class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                              Prev
                          </button>
                          <button
                              class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                              Next
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>




                 
          </div>











@endsection