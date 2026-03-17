<x-install-layout>
    <p class="mb-24">Welcome to the {{config('app.name')}}. </p>
    <ol class="mb-24 list-decimal list-inside">
        <li>Database host</li>
        <li>Database name</li>
        <li>Database username</li>
        <li>Database password</li>
    </ol>
    <x-install-button :href="url('install/requirements')">Continue</x-install-button>
</x-install-layout>
