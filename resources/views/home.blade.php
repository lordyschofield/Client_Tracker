@extends('layouts.app')



@section('content')
<div class="container">





    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
            </div>
        </div>
    </div>
</div>
@endsection
