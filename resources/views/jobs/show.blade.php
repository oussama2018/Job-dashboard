<x-layout>
    <x-slot:heading>Job</x-slot:heading>
<div class=" block border border-gray-200 p-4">
    <p class="text-blue-500 font-bold">{{$jobs->employer->name}}</p>
    <p><strong>{{$jobs->title}}</strong>:pays {{$jobs->salary}} per year.</p>
</div>
@can('edit',$jobs)
 <x-button href="/jobs/{{ $jobs->id }}/edit" class="mt-2">Edit job</x-button>
@endcan

</x-layout>
