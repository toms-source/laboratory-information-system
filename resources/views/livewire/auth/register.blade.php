<form class="border mt-15 bg-white shadow-md rounded" wire:submit.prevent="register">
    <div class="text-center text-2xl pb-2 my-8 text-sky-500 font-bold">CREATE ACCOUNT</div>

    <!-- Name -->
    <div class="m-5">
        <label class="block text-gray-700 text-m font-bold mb-2" for="name">
            Name
        </label>
        <input
            class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight @error('name') border-red-600  @enderror focus:outline-none focus:shadow-outline"
            id="name" type="text" placeholder="Name" wire:model.debounce.500ms="name" />

        @error('name') 
            <small class="text-red-600">{{ $message }}</small> 
        @enderror
    </div>

    <!-- Contact Number -->
    <div class="m-5">
        <label class="block text-gray-700 text-m font-bold mb-2" for="email">
            Contact Number
        </label>
        <input
            class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight @error('contact') border-red-600  @enderror focus:outline-none focus:shadow-outline"
            id="contact" type="text" placeholder="Contact" wire:model.debounce.500ms="contact">

        @error('contact') 
            <small class="text-red-600">{{ $message }}</small> 
        @enderror
    </div>

    <!-- Address -->
    <div class="m-5">
        <label class="block text-gray-700 text-m font-bold mb-2" for="email">
            Address
        </label>
        <input
            class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight @error('address') border-red-600  @enderror focus:outline-none focus:shadow-outline"
            id="address" type="text" placeholder="Address" wire:model.debounce.500ms="address">

        @error('address') 
            <small class="text-red-600">{{ $message }}</small> 
        @enderror
    </div>

    <!-- Email -->
    
    <div class="m-5">
        <label class="block text-gray-700 text-m font-bold mb-2" for="email">
            Email
        </label>
        <input
            class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight @error('email') border-red-600  @enderror focus:outline-none focus:shadow-outline"
            id="email" type="text" placeholder="Email" wire:model.debounce.500ms="email">

        @error('email') 
            <small class="text-red-600">{{ $message }}</small> 
        @enderror
    </div>
    
    <!-- Confirm Email -->
    <div class="m-5">
        <label class="block text-gray-700 text-m font-bold mb-2" for="email">
           Confirm Email
        </label>
        <input
            class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight @error('confirm_email') border-red-600  @enderror focus:outline-none focus:shadow-outline"
            id="email" type="text" placeholder="Confirm Email" wire:model.debounce.500ms="confirm_email">

        @error('confirm_email') 
            <small class="text-red-600">{{ $message }}</small> 
        @enderror
    </div>

    <!-- Password -->
    <div class="m-5">
        <label class="block text-gray-700 text-m font-bold mb-2" for="password">
            Password
        </label>
        <input
            class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight @error('password') border-red-600  @enderror focus:outline-none focus:shadow-outline"
            id="password" type="password" placeholder="Password" wire:model.debounce.500ms="password">
            @error('password') 
                <small class="text-red-600">{{ $message }}</small> 
            @enderror
    </div>
    

    <!-- Confirm Password -->
    <div class="m-5">
        <label class="block text-gray-700 text-m font-bold mb-2" for="password">
            Confirm Password
        </label>
        <input
            class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight @error('confirm_password') border-red-600  @enderror focus:outline-none focus:shadow-outline"
            id="password" type="password" placeholder="Confirm Password" wire:model.debounce.500ms="confirm_password">
            @error('confirm_password') 
                <small class="text-red-600">{{ $message }}</small> 
            @enderror
    </div>
    <div class="button flex items-center justify-center gap-10 px-10">
       <!-- <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><span><i class="fa-brands fa-google"></i></span> GOOGLE LOGIN
        </a> -->
        <button
            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-10 rounded">
            REGISTER
        </button>
    </div>


    <div class="py-5 block text-center">
     Already have an account?   <button class="font-semibold text-md text-blue-500 hover:text-blue-800" wire:click.prevent="switchToLogin">
            Log In
        </button>
    </div>
</form>