@props(['job'])
<x-panel class=" flex gap-x-6 ">

    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <a href="{{ route('jobs.show', $job) }}" class="text-xl font-bold mt-3 group-hover:text-blue-600 transition-colors duration-300">
            {{ $job->title }}
        </a>

        <p class="text-sm text-gray-400 mt-auto">${{ number_format($job->salary, 0, '.', ',') }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag>
                {{ $tag->name }}
            </x-tag>
        @endforeach
    </div>
</x-panel>
