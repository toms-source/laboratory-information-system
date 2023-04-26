<div>
   <!-- <div class="home text-xl">this is home</div> -->

   <nav>
      <ul class="h-14 font-sans text-xl font-bold text-sky-500 flex justify-center items-center gap-20">
         <li class="cursor-pointer">PRODUCTS</li>
         <li class="cursor-pointer">SERVICES</li>
         <li class="cursor-pointer">ABOUT</li>
         <li class="cursor-pointer">CONTACT</li>
      </ul>
   </nav>

   <section id="login" class="w-full h-screen px-10 grid grid-cols-2">
      <div class="place-self-center">
         <h2 class="font-sans text-5xl font-bold">
            <div class="text-sky-500">B&D</div>
            Laboratories
         </h2>
      </div>
      
     <div class='p-20'>
      <div class='my-10'>
         <form class="border mt-15 bg-white shadow-md rounded" wire:submit.prevent="login">
            <div class="text-center text-2xl pb-10 my-8 text-sky-500 font-bold">SIGN IN</div>

            @if (session()->has('success'))
               <div class="border rounded p-5 border-green-400" role="alert">
                  {{ session('success') }}
               </div>
            @endif

            @if (session()->has('danger'))
               <div class="border rounded p-5 border-red-400" role="alert">
                  {{ session('danger') }}
               </div>
            @endif

            <div class="m-5">
                  <label class="block text-gray-700 text-m font-bold mb-2" for="email">
                     Email
                  </label>
                  <input class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email"
                  wire:model.debounce.500ms="email">
            </div>
            <div class="m-5">
                  <label class="block text-gray-700 text-m font-bold mb-2" for="password">
                  Password
                  </label>
                  <input class="shadow appearance-none rounded-lg border sm:text-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="password"
                  wire:model.debounce.500ms="password">
            </div>
            <div class="button flex items-center justify-center gap-10 px-10">
               <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">GOOGLE LOGIN</button>
               <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-14 rounded">LOGIN</button>
            </div>
            <a class="py-5 block font-bold text-sm text-blue-500 hover:text-blue-800 text-center" href="/register" wire:click="register()">
               REGISTER HERE
            </a>
         </form>
      </div>
     </div>
      <!-- <div>
         
         <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div>SIGN IN</div>
            <div class="mb-4">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
               Username
               </label>
               <input class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
            </div>

            <div class="mb-6">
               <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
               Password
               </label>
               <input class="shadow appearance-none rounded-lg border  w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password">
            </div>
            <div class="flex items-center justify-between">
               <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
               Google Sign In
               </button>
               <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
               Sign In
               </button>
            
            </div> 
            <a class="inline-block align-baseline font-bold text-sm text-black-500 hover:text-black-800" href="#">
            REGISTER HERE
            </a>
  </form>
      </div> -->
   </section>
</div>
