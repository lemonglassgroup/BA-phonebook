<x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500"></x-application-logo>
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>

    <form method="POST" action="{{ route('contact.share', $contact) }}">
    @csrf
    <!-- Share Field -->
        <div>
            <x-label for="email" :value="__('Shared With...')"></x-label>

            <x-input id="email" class="block mt-1 mb-4 w-full" type="email" name="email" :value="old('email')"
                     placeholder="Leave blank for private record or enter valid email" autofocus></x-input>
        </div>

        <x-button class="text-white rounded-lg shadow-lg block py-4 px-6 bg-green-400">
            {{ __('Save') }}
        </x-button>
    </form>
