<x-layout>
<x-slot:heading>Login</x-slot:heading>
<form method="POST" action="/login">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
       <x-form-field>
        <x-form-label for="email">Email</x-form-label>
          <div class="mt-2">
            <x-form-input id="email" type="text" name="email" :value="old('email')" type="email"/>
            <x-form-error name="email"/>
          </div>
       </x-form-field>

       <x-form-field>
        <x-form-label for="password">Password</x-form-label>
          <div class="mt-2">
            <x-form-input id="password" type="text" name="password" type="password"/>
            <x-form-error name="password"/>
          </div>
       </x-form-field>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/"><button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button></a>
    <x-form-button>Login</x-form-button>
  </div>
</form>

</x-layout>
