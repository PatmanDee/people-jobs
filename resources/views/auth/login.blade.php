<x-layout>
    <x-page-heading>Login</x-page-heading>

    <x-forms.form method="POST" action="/login">
        @csrf

        <x-forms.input label="Email" name="email" type="email" placeholder="Email" />
        <x-forms.input label="Password" name="password" type="password" placeholder="Password" />

        <x-forms.divider />

        <x-forms.button>Login</x-forms.button>

        <x-forms.button-link href="/register">Don't have an account? Register</x-forms.button-link>
    </x-forms.form>
</x-layout>
