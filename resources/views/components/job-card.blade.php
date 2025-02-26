@props(['job'])

<x-panel class="flex flex-col text-center">
    <div>
        <div class="self-start text-sm ">{{$job->employer->name}}</div>
        <div class="py-8 ">
            <h3 class="group-hover:text-blue-800 text-xl font-bold transitions-colors duration-300">{{$job->title}}</h3>
            <p class="text-sm mt-4">{{$job->title}}</p>
        </div>
        <div class="flex justify-between items-center mt-auto">
            <div>
                @foreach ($job->tags as $tag)
                    <x-tag :$tag size="small"></x-tag>
                @endforeach
            </div>

            <x-employer-logo :width="42"></x-employer-logo>
        </div>
    </div>
</x-panel>