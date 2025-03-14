@props(['job'])
<x-panel class="flex flex-col">
    <div class="self-start text-sm">
        <h2>{{ $job->employer->name }}</h2>
    </div>
    <div class="py-8 font-bold">
        <h3 class="group-hover:text-blue-600 transition-colors duration-300 text-xl">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-4">${{ number_format($job->salary, 0, '.', ',') }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex gap-2">
            @foreach ($job->tags as $tag)
                <x-tag class="text-xs" :$tag>
                    {{ $tag->name }}
                </x-tag>
            @endforeach
        </div>


        <x-employer-logo :width="42" :employer="$job->employer" />
    </div>
</x-panel>
