<div>
    <header>
        <nav class="shadow">
            <ul class="h-14 font-sans text-xl font-normal text-sky-500 flex justify-center items-center gap-20">
                <li class="cursor-pointer">
                    {{-- same as --}}
                    {{-- <a href="/">HOME</a> --}}
                    <a href="{{ route('index') }}" class="hover:text-slate-900">Home</a>
                </li>
                <li class="cursor-pointer hover:text-slate-900">Products</li>
                <li class="cursor-pointer hover:text-slate-900">Services</li>
                <li class="cursor-pointer hover:text-slate-900">About</li>
                <li class="cursor-pointer hover:text-slate-900">Contact</li>
                @auth
                    @if(Auth::user()->role == 'client')
                    <li class="cursor-pointer hover:text-slate-900">
                        <a href="{{ route('client.dashboard') }}">
                            Client
                        </a>
                    </li>
                    @endif
                    <li class="cursor-pointer hover:text-slate-900">
                        <button wire:click="logout">
                            Logout
                        </button>
                    </li>
                @endauth
            </ul>
         </nav>
    </header>
    
    <main>
        @guest
            @if (session()->has('info'))
                <div class="w-full px-10">
                    <div wire:poll="hide" class="border rounded p-5 bg-blue-200 border-blue-200" role="alert">
                        {{ session('info') }}
                    </div>
                </div> 
            @endif
            <section id="auth" class="w-full h-screen px-10 grid grid-cols-2">
                <div class="place-self-center">
                    <h2 class="font-sans text-5xl font-bold">
                    <div class="text-sky-500 ">B&D</div>
                    Laboratories
                    </h2>
                </div>
                
                @if($switch)
                    <div id="register" class='p-20'>
                        <div class='my-10'>
                            {{-- same as @livewire('auth.register') --}}
                            <livewire:auth.register/>
                        </div>
                    </div>
                @else
                    <div id="login" class='p-20'>
                        <div class='my-10'>
                            <livewire:auth.login/> 
                        </div>
                    </div>
                @endif
            </section>
        @endguest
    </main>
</div>


