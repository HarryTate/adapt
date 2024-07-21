<x-layout>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-md rounded-md my-8">
        <h1 class="text-2xl font-bold mb-6 text-center">Edit Patient</h1>
        <form method="POST" action="{{ route('patients.update', $patient) }}" class="space-y-6">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $patient->first_name) }}" required autofocus
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('first_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name:</label>
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $patient->last_name) }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('last_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $patient->email) }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $patient->phone_number) }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('phone_number')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nhs_number" class="block text-sm font-medium text-gray-700">NHS Number:</label>
                <input type="text" id="nhs_number" name="nhs_number" value="{{ old('nhs_number', $patient->nhs_number) }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('nhs_number')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
                <textarea id="address" name="address" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('address', $patient->address) }}</textarea>
                @error('address')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $patient->date_of_birth) }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('date_of_birth')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="sex" class="block text-sm font-medium text-gray-700">Sex:</label>
                <select id="sex" name="sex" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Select...</option>
                    <option value="male" {{ old('sex', $patient->sex) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('sex', $patient->sex) == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ old('sex', $patient->sex) == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('sex')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update Patient</button>
            </div>
        </form>
    </div>
</x-layout>
