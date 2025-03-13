<x-layout>
    <x-page-heading>Login</x-page-heading>

    <x-forms.form method="POST" action="/login">
        @csrf

        <x-forms.input label="Email" name="email" type="email" placeholder="Email" />
        <x-forms.input label="Password" name="password" type="password" placeholder="Password" />

        <x-forms.divider />

        <x-forms.button>Login</x-forms.button>

    </x-forms.form>
</x-layout>
