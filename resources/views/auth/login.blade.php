<x-layout>
    <x-slot:heading>Login</x-slot:heading>
    <form method="POST" action="/login">
        @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field>
          <x-form-blade for="email">Email</x-form-blade>
          <div class="mt-2">
            <x-form-input id="email" type="email" name="email"/>
            <x-form-error name="email"/>
          </div>
        </x-form-field>

        <x-form-field>
          <x-form-blade for="password">Password</x-form-blade>
          <div class="mt-2">
            <x-form-input id="password" type="password" name="password"/>
            <x-form-error name="password"/>
          </div>
        </x-form-field>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>

</x-layout>
