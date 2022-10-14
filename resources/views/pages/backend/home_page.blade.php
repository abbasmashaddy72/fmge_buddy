<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Home Page') }}
        </x-slot>

        @livewire('form.backend.home')

    </x-backend.card>
</x-app-layout>
