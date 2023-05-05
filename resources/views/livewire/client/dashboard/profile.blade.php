<form wire:submit="uploadImage">
<div class="h-screen w-fit flex lg:flex-row md:flex-col sm:flex-col xs ms-10 mt-3">
    <div id="profile" class="border-r-zinc-100">
        @if (session()->has('success'))
            <div class="w-full px-10">
                <div wire:poll="hide" class="border rounded p-5 bg-sky-500 border-blue-200" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="my-10">
            @if ($image)
                <img class="rounded" src="{{ $image->temporaryUrl() }}" width="250" alt="">
            @elseif(auth()->user()->image)
                <img class="rounded" src="{{ asset('storage/' . auth()->user()->image) }}" width="250" alt="">
                {{-- Preview Default Picture --}}
                @if (auth()->user()->image)
                    <img class="rounded" src="{{ asset('storage/images/' . auth()->user()->image) }}" width="250"
                        alt="">
                @endif 
                {{-- Preview Default Picture --}}
            @endif
            <div class="m-5">
                <input type="file" id="image" wire:model="image" accept="image/*" />
            </div>
            <button 
                class="bg-sky-400 hover:bg-sky-500 py-1 text-sm px-1 rounded-md">Upload</button>
        </div>
    </div>

    <div id="information" class="w-full">
        <div>
            <div class=" m-5 p-5 bg-white w-full rounded-md">
                <div id="basic_information">
                    <div class="text-lg font-bold my-5">Basic Information</div>

                    <!-- Name -->
                    <div class="px-10">
                        <div>
                            <label for="name" class="font-medium">Name: </label>
                            <span>{{ $name }}</span>
                        </div>
                        <!-- Date of birth -->
                        <div>
                            <label for="birthday" class="font-medium">Date of Birth: </label>
                            <span>{{ $birthday }}</span>
                        </div>
                        <!-- Address -->
                        <div>
                            <label for="address" class="font-medium">Address: </label>
                            <span>{{ $address }}</span>
                        </div>
                        <!-- Age -->
                        <div>
                            <label for="age" class="font-medium">Age: </label>
                            <span>{{ $age }}</span>
                        </div>
                        <!-- Gender -->
                        <div>
                            <label for="gender" class="font-medium">Gender: </label>
                            <span>{{ $gender }}</span>
                        </div>
                        <!-- Contact -->
                        <div>
                            <label for="contact" class="font-medium">Contact: </label>
                            <span>{{ $contact }}</span>
                        </div>
                    </div>
                </div>

                <div id="emergency_information">
                    <div class="text-lg font-bold my-5">Emergency Contact</div>

                    <!-- Name -->
                    <div class="px-10">
                        <div>
                            <label for="name" class="font-medium">Name: </label>
                            <span>Maria Dela Cruz</span>
                        </div>

                        <!-- Name -->
                        <div>
                            <label for="name" class="font-medium">Relationship: </label>
                            <span>Mother</span>
                        </div>

                        <!-- Contact -->
                        <div>
                            <label for="contact" class="font-medium">Contact: </label>
                            <span>+63 9331 798 221</span>
                        </div>
                    </div>
                </div>

                <div id="medical_background">
                    <div class="text-lg font-bold my-5">Medical Background</div>

                    <!-- Name -->
                    <div class="px-10">
                        <div>
                            <label for="name" class="font-medium">Name: </label>
                            <span>Maria Dela Cruz</span>
                        </div>

                        <!-- Name -->
                        <div>
                            <label for="name" class="font-medium">Relationship: </label>
                            <span>Mother</span>
                        </div>

                        <!-- Contact -->
                        <div>
                            <label for="contact" class="font-medium">Contact: </label>
                            <span>+63 9331 798 221</span>
                        </div>
                    </div>
                </div>
                <div class="btn pt-5 flex w-full justify-end gap-2">
                    {{-- <button class="bg-red-400 hover:bg-red-500 py-2 px-5 rounded-md font-medium">Cancel</button> --}}
                    <a href="{{ route('client.settings') }}" type="button"
                        class="bg-sky-500 hover:bg-sky-300 py-2 px-4 rounded-md text-white font-semibold">Edit</a>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</form>