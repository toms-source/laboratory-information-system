<button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
    class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white focus:outline-none focus:ring-offset-2 focus:ring-offset-sky-600"
    type="button">
    <span class="sr-only">Open user menu</span>
    @if (auth()->user()->image == 'default.jpg')
    {{-- Preview Default Picture --}}
        <img class="w-8 h-8 mr-2 rounded-full" src="{{ asset('storage/images/' . auth()->user()->image) }}" width="250"
            alt="">
    {{-- Preview Default Picture --}}
    @elseif(auth()->user()->image)
        <img class="w-8 h-8 mr-2 rounded-full" src="{{ asset('storage/' . auth()->user()->image) }}" width="250"
        alt="">
    @endif

    {{ $name }}
    <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
    </svg>
</button>
