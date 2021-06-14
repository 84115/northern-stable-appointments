<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Here are a list of clients:</p>
                    @forelse($clients as $client)
                        <div class="py-3 text-gray-900">
                            <h3 class="text-lg text-gray-500">{{ $client->name }}</h3>
                            <code>{{ $client->id }}</code>
                            <p>{{ $client->redirect }}</p>
                            <code>{{ $client->secret }}</code>
                        </div>
                    @empty
                        <p>N/A</p>
                    @endforelse
                </div>
                <div class="mt-3 p-6 bg-white border-b border-gray-200">
                    <form action="/oauth/clients" method="POST">
                        <div>
                            <x-label for="name">Name</x-label>
                            <x-input type="text" name="name" placeholder="Client Name"></x-input>
                        </div>
                        <div class="mt-2">
                            <x-label for="redirect">Redirect</x-label>
                            <x-input type="text" name="redirect" placeholder="{{ url('callback') }}"></x-input>
                        </div>
                        <div class="mt-2">
                            @csrf
                            <x-button type="submit">Create Client</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
