<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stores List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($stores as $store)
                    <h3>$store->name</h3>
                    <br/>
                @endforeach

                <pre>{{ $stores }} </pre>
                <pre>{{ \App\Models\Store::all() }} </pre>
            </div>
        </div>
    </div>
</x-app-layout>
