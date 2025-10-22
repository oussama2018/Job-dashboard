<x-layout>
<x-slot:heading>Job Listings</x-slot:heading>
    <p class="block border border-gray-200 px-2 py-4"><strong>{{$jobs->title}}</strong>: pays {{$jobs->salary}} per year.</p>
    <p>
        <x-button href="/jobs/{{ $jobs->id }}/edit" class="mt-6">Edit Job</x-button>
    </p>
</x-layout>
