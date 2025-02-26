@props(['jobs', 'tags'])
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
                @foreach ($jobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-1 mt-6">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-wide-job-card :$job />
                @endforeach
            </div>
        </section>
    </div>
    </x-layout>
