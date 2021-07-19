<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $us)
                            <tr>
                                <td>{{$us->avatar}}</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->email}}-</td>
                                <td><a class="btn btn-danger" href="{{URL::to('delete/user/'.$us->id)}}" onclick="return confirm('Are you sure')">Delete</a></td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>



