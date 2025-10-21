<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <div class="block py-4 px-4 border border-gray-200">
    <p class="text-blue-500 font-bold">{{$jobs->employer->name}}</p>
    <p><strong>{{$jobs['title']}}</strong>: pays {{$jobs['salary']}} per year.</p>
    </div>
</x-layout>
