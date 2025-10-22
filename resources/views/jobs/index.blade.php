<x-layout>
<x-slot:heading>Job Listings</x-slot:heading>
<div class="space-y-2">
    @foreach ($jobs as $job)
    <a href="/jobs/{{ $job['id'] }}" class="block border border-gray-200 px-2 py-4">
    <p class="font-bold text-blue-500">{{$job->employer->name}}</p>
    <p><strong>{{$job['title']}}</strong>: pays {{$job['salary']}} per year.</p>
    </a>
    @endforeach
    {{ $jobs->links() }}
</div>
</x-layout>
