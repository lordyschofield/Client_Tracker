@extends('layouts.app')

@section('content')
    
        <div class="container flex justify-evenly">
            <div>
                <div class="bg-white flex items-center rounded-full shadow-xl">
                  <input class="rounded-l-full w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search">
                  
                  <div class="p-1">
                    <button class="bg-blue-600 text- white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-10 h-10 flex items-center justify-center">
                            🔍
                    </button>
                    </div>
                  </div>
                </div>
              
                <div class="w-8/12 rounded-lg  bg-white p-6 ml-2">
                    <h1 style="font-weight: bold">Leads</h1>
                    
                    
                </div>
                
                    <div class="inline-flex" role="group" aria-label="Button group">
                        <button class="h-12 ml-2 px-5 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-l-lg focus:shadow-outline hover:bg-indigo-800">Create Lead</button>
                        <button class="h-12 px-5 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-r-lg focus:shadow-outline hover:bg-indigo-800">Import Lead</button>
                    </div> 
                
                
                
            
            
            </div>












            
        </div>











@endsection