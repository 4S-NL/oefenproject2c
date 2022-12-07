<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Employees</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($buildings as $building)
                            <tr style="border: 1px solid black">
                                <td>{{ $building->name }}</td>
                                <td>
                                    <ul>
                                    @foreach( $building->employees as $employee  )
                                        <li>{{ $employee->name }} - {{ $employee->role->name }} </li>
                                    @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
