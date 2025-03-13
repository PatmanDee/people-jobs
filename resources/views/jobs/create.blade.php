<x-layout>
    <x-page-heading>
        Create a New Job
    </x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        @csrf
        <x-forms.input name="title" label="Title" placeholder="e.g. Software Engineer" />
        <x-forms.input name="salary" label="Salary" placeholder="e.g. $100,000 - $120,000" />
        <x-forms.input name="location" label="Location" placeholder="e.g. Remote, San Francisco, USA" />

        <x-forms.select name="description" label="Schedule">
            <option value="full-time">Full-Time</option>
            <option value="part-time">Part-Time</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://example.com" />
        <x-forms.checkbox name="featured" label="Featured (Costs Extra)" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (comma separated)" placeholder="laravel, nextjs, django" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>