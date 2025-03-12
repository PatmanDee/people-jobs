<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        @csrf

        <x-forms.input label="Name" name="name" type="text" placeholder="Name Surname" />
        <x-forms.input label="Email" name="email" type="email" placeholder="Email" />
        <x-forms.input label="Password" name="password" type="password" placeholder="Password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" placeholder="Password Confirmation" />

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer_name" type="text" placeholder="Employer Name" />
        <x-forms.input label="Employer Logo" name="employer_logo" type="file" placeholder="Employer Logo" />
        <x-forms.input label="Employer Email" name="employer_email" type="email" placeholder="Employer Email" />
        <x-forms.input label="Employer Phone" name="employer_phone" type="text" placeholder="Employer Phone" />

        <x-forms.button>Register</x-forms.button>
    </x-forms.form>
</x-layout>
