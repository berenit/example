<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary']}}.
    </p>
</x-layout>