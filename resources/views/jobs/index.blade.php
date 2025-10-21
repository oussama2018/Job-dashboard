<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    <div class="space-y-2">
    @foreach ($jobs as $job)
    <a href="/jobs/{{ $job['id']}}">
    <div class="block py-4 px-4 border border-gray-200">
    <p class="text-blue-500 font-bold">{{$job->employer->name}}</p>
    <p><strong>{{$job['title']}}</strong>: pays {{$job['salary']}} per year.</p>
    </div>
    </a>
    @endforeach
    <div>
        {{ $jobs->links() }}
    </div>
    </div>
</x-layout>
