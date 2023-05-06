<div wire:ignore>
    @if (session()->has('success'))
    <div class="w-full px-10">
        <div wire:poll="hide" class="border rounded p-5 bg-sky-500 border-blue-200" role="alert">
            {{ session('success') }}
        </div>
    </div>
@endif
    <h1 class="text-2xl">Emergency Contacts</h1>
    <div class="flex justify-end">
        {{-- <div class="inline-flex py-5 me-3">
            <button wire:click.prevent="addContact"
                class="bg-slate-200 text-gray-800 hover:bg-slate-500 hover:text-white py-2 px-4 rounded-md text-sm font-semibold">Add
                Contact</button>
            </button>
        </div> --}}
        <div class="inline-flex py-5">
            <!-- Modal toggle -->

            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                New Contact Modal
            </button>

            <!-- Main modal -->
            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Add New Emergency Contact
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="defaultModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form wire:submit.prevent="addContact">
                            <div class="p-6 space-y-6">
                                <div class="mb-2">
                                    <label for="em_name"
                                        class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Full
                                        Name</label>
                                    {{-- @error('em_name')
                                        <span class="badge badge-dot badge-danger"
                                            style="margin-top: 12px; margin-bottom: 12px;">{{ $message }}</span>
                                    @enderror --}}
                                    <input type="text" id="em_name" wire:model="em_name"
                                        class="focus:outline-none focus:shadow-outline bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                    <label for="em_address"
                                        class="block mt-5  text-md font-medium text-gray-900 dark:text-white">
                                        Complete Address</label>
                                    <input type="text" id="em_address" wire:model="em_address"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                </div>

                                <div class="grid gap-6 mb-6 md:grid-cols-3">
                                    <div class="mb-2">
                                        <label for="em_age"
                                            class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Age</label>
                                        <input type="number" id="em_age" wire:model="em_age"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="mb-2">
                                        <label for="em_birthday"
                                            class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Birthdate</label>
                                        <input type="date" id="em_birthday" wire:model="em_birthday"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="mb-2">
                                        <label for="em_relationship"
                                            class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Relationship
                                            to Contact</label>
                                        <select id="em_relationship" wire:model="em_relationship"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Select Option</option>
                                            <option value="Parent">Parent</option>
                                            <option value="Spouse">Spouse</option>
                                            <option value="Child">Child</option>
                                            <option value="Grandparent">Grandparent</option>
                                            <option value="Grandchild">Grandchild</option>
                                            <option value="Sibling">Sibling</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div class="mb-2">
                                        <label for="em_email"
                                            class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Email
                                            Address</label>
                                        <input type="email" id="em_email" wire:model="em_email"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="mb-2">
                                        <label for="em_contact"
                                            class="block mb-2  text-md font-medium text-gray-900 dark:text-white">Contact
                                            Number</label>
                                        <input type="number" id="em_contact" wire:model="em_contact"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="defaultModal" type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Add</button>
                                <button data-modal-hide="defaultModal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
