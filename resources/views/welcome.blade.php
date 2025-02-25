<x-layout>
<div class="space-y-10">
    <section class="text-center">
        <h1 class="text-4xl font-bold">Find your dream Job</h1>
        <form action="">
            <input type="text" placeholder="Search for a job" class="w-full rounded-xl bg-white/5 border border-white/10 px-5 py-4 mt-4 max-w-xl mx-auto">
        </form>
    </section>
    <section>
        <x-section-heading>Featured Jobs</x-section-heading>
        <div class="grid lg:grid-cols-3 gap-8 mt-6">
            <x-job-card />
            <x-job-card />
            <x-job-card />
        </div>
    </section>
    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="flex gap-2 mt-6">
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
    </section>
    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="mt-6 space-y-6">
            <x-wide-job-card />
            <x-wide-job-card />
            <x-wide-job-card />
        </div>
    </section>
</div>
</x-layout>
