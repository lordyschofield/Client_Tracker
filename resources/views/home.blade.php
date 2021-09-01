@extends('layouts.app')



@section('content')
<div class="container ">



            <div class="w-9/12 ml-52 bg-white p-6 rounded-lg">
                <h1 style="font-weight: bold">Today's Task</h1>
                
                <br>
                    <table class="w-full whitespace-nowrap">
        
                        <thead>
                                <tr class="text-left font-bold">
                                    <td class="border px-6 py-4">Subject</td>
                                    <td class="border px-6 py-4">Status</td>
                                    <td class="border px-6 py-4">Priority</td>
                                    <td class="border px-6 py-4">Company</td>
                                    <td class="border px-6 py-4">Name</td>
                                    <td class="border px-6 py-4">Activity Owner</td>
                                </tr>                              
                        </thead>
                        <tbody>
                                    <td class="border px-6 py-4">Subject</td>
                                    <td class="border px-6 py-4">Status</td>
                                    <td class="border px-6 py-4">Priority</td>
                                    <td class="border px-6 py-4">Company</td>
                                    <td class="border px-6 py-4">Name</td>
                                    <td class="border px-6 py-4">Activity Owner</td>
                        </tbody>   
                    </table>    
                
                </div>
                
                <div class="w-screen bg-white p-6 rounded-lg mt-3">
                    <h1 style="font-weight: bold">Today's Schedule</h1>
                    
                    <br>
                        <table class="w-full whitespace-nowrap">
            
                            <thead>
                                    <tr class="text-left font-bold">
                                        <td class="border px-6 py-4">Subject</td>
                                        <td class="border px-6 py-4">Lead/Contact</td>
                                        <td class="border px-6 py-4">Name</td>
                                        <td class="border px-6 py-4">Company</td>
                                        <td class="border px-6 py-4">From</td>
                                        <td class="border px-6 py-4">To</td>
                                        <td class="border px-6 py-4">Location</td>
                                        <td class="border px-6 py-4">Status</td>

                                    </tr>                              
                            </thead>
                            <tbody>
                                        <td class="border px-6 py-4">Some Subject</td>
                                        <td class="border px-6 py-4">Some Lead</td>
                                        <td class="border px-6 py-4">Some Name</td>
                                        <td class="border px-6 py-4">Some Company</td>
                                        <td class="border px-6 py-4">Some Date From</td>
                                        <td class="border px-6 py-4">Some Date To</td>
                                        <td class="border px-6 py-4">Some Location</td>
                                        <td class="border px-6 py-4">Some Status</td>
                            </tbody>   
                        </table>    
                    
                    </div>
                
                
</div>
@endsection
