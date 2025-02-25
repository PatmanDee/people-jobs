<x-panel class="flex flex-col">
    <div class="self-start text-sm">
        <h2>Company Name</h2>
    </div>
    <div class="py-8 font-bold">
        <h3 class="group-hover:text-blue-600 transition-colors duration-300 text-xl">Position Name</h3>
        <p class="text-sm text-gray-400 mt-4">Position Description</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex gap-2">
            <x-tag size="sm">Backend</x-tag>
            <x-tag size="sm">Frontend</x-tag>
            <x-tag size="sm">Full Stack</x-tag>
        </div>

        <x-employer-logo :width="42" />
    </div>
</x-panel>
