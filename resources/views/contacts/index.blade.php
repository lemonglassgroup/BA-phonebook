<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Main Contacts List') }}
        </h2>
        <div class="py-3 px-6 text-white rounded-lg bg-blue-400 shadow-lg inline-block">
            <a href="{{ route('contacts.create') }}">Add New Contact</a>
        </div>
{{--        <div class="py-3 px-6 text-white rounded-lg bg-blue-400 shadow-lg inline-block">--}}
{{--            <a href="{{ route('contacts.create') }}">Import From File</a>--}}
{{--        </div>--}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
                    @include('components.contacts-table')
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</x-app-layout>
