<x-layout>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Patients</h1>
            <a href="{{ route('patients.create') }}" class="py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700">Add Patient</a>
        </div>
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NHS Number</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($patients as $patient)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $patient->first_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $patient->last_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $patient->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $patient->phone_number }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $patient->nhs_number }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('patients.show', $patient) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                <a href="{{ route('patients.edit', $patient) }}" class="ml-4 text-indigo-600 hover:text-indigo-900">Edit</a>
                                <form action="{{ route('patients.destroy', $patient) }}" method="POST" class="inline-block ml-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
