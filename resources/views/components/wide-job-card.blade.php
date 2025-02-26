@props(['job'])
<x-panel class=" flex gap-x-6 ">

    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">Company Name</a>

        <h3 class="text-xl font-bold mt-3 group-hover:text-blue-600 transition-colors duration-300">Position Name</h3>

        <p class="text-sm text-gray-400 mt-auto">Position Description</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag>
                {{ $tag->name }}
            </x-tag>
        @endforeach
    </div>
</x-panel>
