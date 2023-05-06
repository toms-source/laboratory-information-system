<div class="m-10">
    @if (session()->has('success'))
        <div class="w-full px-10">
            <div wire:poll="hide" class="border rounded p-5 bg-sky-500 border-blue-200" role="alert">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <form wire:submit.prevent="updateSettings">
        <h1 class="text-2xl mb-5">Personal Information</h1>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="base-input" wire:model.debounce.500ms="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('name')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-2">
                <label for="base-input" class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Date of
                    Birth</label>
                <input type="date" id="base-input" wire:model.debounce.500ms="birthday"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Address</label>
                <input type="text" id="base-input" wire:model.debounce.500ms="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                @error('address')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Age</label>
                <input type="number" id="base-input" wire:model.debounce.500ms="age"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Gender</label>
                <input type="text" id="base-input" wire:model.debounce.500ms="gender"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Contact</label>
                <input type="number" id="base-input" wire:model.debounce.500ms="contact"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('contact')
                    <small class="text-red-600">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div>
            <button type="submit"
                class="bg-sky-500 hover:bg-sky-300 py-2 px-4 rounded-md text-white font-semibold">Update
                Changes</button>
        </div>
    </form>
        <br>
        <hr>
        <br>

       <livewire:client.dashboard.add-contact />

        {{-- <div class="grid gap-6 mb-6 md:grid-cols-2">
            @foreach (array_reverse($em_contacts, true) as $index => $em_contact)
                <div class="mb-2">
                    <label for="base-input"
                        class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="base-input"
                        wire:model.debounce.500ms="em_contacts.{{ $index }}.name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-2">
                    <label for="base-input"
                        class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Relationship</label>
                    <input type="text" id="base-input"
                        wire:model.debounce.500ms="em_contacts.{{ $index }}.relationship"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-2">
                    <label for="base-input"
                        class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="text" id="base-input"
                        wire:model.debounce.500ms="em_contacts.{{ $index }}.address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-2">
                    <label for="base-input"
                        class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Contact</label>
                    <input type="number" id="base-input"
                        wire:model.debounce.500ms="em_contacts.{{ $index }}.contact"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            @endforeach
        </div> --}}
        <br>
        <hr>
        <br>
        {{-- <h1 class="text-2xl mb-5">Medical Background</h1>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="base-input" wire:model.debounce.500ms="mbName"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Date</label>
                <input type="text" id="base-input" wire:model.debounce.500ms="mbRelationship"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Address</label>
                <input type="text" id="base-input" wire:model.debounce.500ms="mbAddress"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Contact</label>
                <input type="number" id="base-input" wire:model.debounce.500ms="mbContact"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input" class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Email
                    Address</label>
                <input type="number" id="base-input" wire:model.debounce.500ms="mbContact"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Illness</label>
                <input type="number" id="base-input" wire:model.debounce.500ms="mbContact"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Allergies</label>
                <input type="number" id="base-input" wire:model.debounce.500ms="mbContact"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Treatment</label>
                <input type="number" id="base-input" wire:model.debounce.500ms="mbContact"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-2">
                <label for="base-input"
                    class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Physician</label>
                <input type="number" id="base-input" wire:model.debounce.500ms="mbContact"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
         --}}
</div>
