<x-layout>
<x-slot:heading>Job</x-slot:heading>
    <div class="border border-gray-200 p-4">
    <p class="text-blue-500 font-bold">{{$jobs->employer->name}}</p>
    <p><strong>{{$jobs->title}}</strong>: pays {{$jobs->salary}} pery year. </p>
    </div>
    <x-button href="/jobs/{{ $jobs->id }}/edit" class="mt-4">Edit Job</x-button>


</x-layout>
