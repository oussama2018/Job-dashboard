<x-layout>
    <x-slot:heading>Create a Job</x-slot:heading>
    <form method="POST" action="/jobs/{{ $jobs->id }}">
        @csrf
        @method('PATCH')
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field>
          <x-form-blade for="title">Title</x-form-blade>
          <div class="mt-2">
            <x-form-input id="title" type="text" value="{{ $jobs->title }}" name="title"/>
            <x-form-error name="title"/>
          </div>
        </x-form-field>
        <x-form-field>
          <x-form-blade for="salary">Salary</x-form-blade>
          <div class="mt-2">
            <x-form-input id="salary" type="text" value="{{ $jobs->salary }}" name="salary"/>
            <x-form-error name="salary"/>
          </div>
        </x-form-field>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-between gap-x-6">
    <div>
    <button class="text-red-500" form="form-delete">Delete</button>
    </div>
    <div class="flex items-center gap-x-2">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
  </div>
</form>
<form method="POST" action="/jobs/{{ $jobs->id }}" id="form-delete">
@csrf
@method('DELETE')
</form>
</x-layout>
