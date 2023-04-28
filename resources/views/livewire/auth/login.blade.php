<form class="border mt-15 bg-white shadow-md rounded" wire:submit.prevent="login">
   <div class="text-center text-2xl pb-2 my-8 text-sky-500 font-bold">SIGN IN</div>

   <div class="m-5">
      @if (session()->has('danger'))
         <div wire:poll.3s="hide" class="border rounded p-5 bg-red-200 border-red-200" role="alert">
            {{ session('danger')}}
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
      <!--<a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
         <i class="fa-brands fa-google"></i>
         GOOGLE LOGIN
      </a>--> 
      <!--may bayad google auth-->
      <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mb-1 px-14 rounded">LOGIN</button>
   </div>

   <div class="flex items-center justify-center w-full">
      <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-500">
  </div>

   <div class="button flex items-center justify-center gap-1 px-10 mt-1">
      <a href="http://127.0.0.1:8000/auth/github/redirect" class=" text-xs text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2">
         <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
         Sign in with Github
      </a>
      <a href="http://localhost:8000/auth/facebook/redirect" class=" text-xs text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
         <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path></svg>
         Sign in with Facebook
      </a>
   </div>

   <div class="py-5 block text-center">
     Don't have an account? <button class="font-semibold text-md text-blue-500 hover:text-blue-800" wire:click.prevent="switchToRegister">
         Sign Up
      </button>
   </div>
</form>
