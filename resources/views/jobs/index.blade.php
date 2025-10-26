<x-layout>
<x-slot:heading>Job Listings</x-slot:heading>
<div class="space-y-2">
@foreach ($jobs as $job)
<a href="/jobs/{{ $job->id }}" class="block border border-gray-200 p-4">
    <p class="text-blue-500 font-bold">{{$job->employer->name}}</p>
    <p><strong>{{$job->title}}</strong>: pays {{$job->salary}} pery year. </p>
</a>
@endforeach
{{ $jobs->links() }}
</div>

</x-layout>
