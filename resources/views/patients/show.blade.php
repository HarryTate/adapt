<x-layout>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-md rounded-md my-8">
        <h1 class="text-2xl font-bold mb-6 text-center">Patient Details</h1>
        <div class="space-y-6">
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700">First Name:</label>
                <div class="mt-1">{{ $patient->first_name }}</div>
            </div>
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700">Last Name:</label>
                <div class="mt-1">{{ $patient->last_name }}</div>
            </div>
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700">Email:</label>
                <div class="mt-1">{{ $patient->email }}</div>
            </div>
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700">Phone Number:</label>
                <div class="mt-1">{{ $patient->phone_number }}</div>
            </div>
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700">NHS Number:</label>
                <div class="mt-1">{{ $patient->nhs_number }}</div>
            </div>
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700">Address:</label>
                <div class="mt-1">{{ $patient->address }}</div>
            </div>
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700">Date of Birth:</label>
                <div class="mt-1">{{ $patient->date_of_birth }}</div>
            </div>
            <div class="form-group">
                <label class="block text-sm font-medium text-gray-700">Sex:</label>
                <div class="mt-1">{{ $patient->sex }}</div>
            </div>
            <div class="flex justify-between mt-6">
                <a href="{{ route('patients.edit', $patient) }}" class="py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700">Edit</a>
                <form action="{{ route('patients.destroy', $patient) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 bg-red-600 text-white font-semibold rounded-md shadow-sm hover:bg-red-700">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
