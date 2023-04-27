<form class="border mt-15 bg-white shadow-md rounded" wire:submit.prevent="login">
   <div class="text-center text-2xl pb-10 my-8 text-sky-500 font-bold">SIGN IN</div>

   <div class="m-5">
      @if (session()->has('danger'))
         <div wire:poll.3s="hide" class="border rounded p-5 bg-red-200 border-red-200" role="alert">
            {{ session('danger') }}
         </div>
      @endif
   </div>

   <div class="m-5">
         <label class="block text-gray-700 text-m font-bold mb-2" for="email">
            Email
         </label>
         <input class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight @error('email') border-red-600  @enderror  focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email"
         wire:model.debounce.500ms="email">
         @error('email') 
            <small class="text-red-600">{{ $message }}</small> 
         @enderror
   </div>
   <div class="m-5">
         <label class="block text-gray-700 text-m font-bold mb-2" for="password">
         Password
         </label>
         <input class="shadow appearance-none rounded-lg border sm:text-md w-full py-2 px-3 text-gray-700 leading-tight @error('password') border-red-600 @enderror focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password"
         wire:model.debounce.500ms="password">
         @error('password') 
            <small class="text-red-600">{{ $message }}</small> 
         @enderror
   </div>
   <div class="button flex items-center justify-center gap-10 px-10">
      <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
         <i class="fa-brands fa-google"></i>
         GOOGLE LOGIN
      </a>

      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-14 rounded">LOGIN</button>
   </div>

   <div class="py-5 block text-center">
      <button class="font-bold text-sm text-blue-500 hover:text-blue-800" wire:click.prevent="switchToRegister">
         REGISTER HERE
      </button>
   </div>
</form>
