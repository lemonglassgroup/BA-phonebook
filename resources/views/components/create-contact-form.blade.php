
<x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('contacts.store') }}">
    @csrf

    <!-- Name -->
        <div>
            <x-label for="name" :value="__('Contact name')" />

            <x-input id="name" class="block mt-1 mb-4 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>

    <!-- Pone number -->
        <div>
            <x-label for="phone" :value="__('Phone number')" />

            <x-input id="phone" class="block mt-1 mb-4 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
        </div>

    <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 mb-4 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <x-button class="text-white rounded-lg shadow-lg block py-4 px-6 bg-green-400">
            {{ __('Save') }}
        </x-button>
    </form>
