<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Share Contact With...') }}
        </h2>
        <div class="inline-block">

            <div class="py-3 px-6 text-white rounded-lg bg-red-400 shadow-lg inline-block text-sm">
                <a href="{{ route('contacts.index') }}">Cancel</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
            <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    @include('components.contact-form-share')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
