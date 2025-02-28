@props(['employer'])

<x-panel class="flex justify-center">
    <a href="/companies/{{$employer->id}}">
        <div>
            <x-employer-logo :employer="$employer" :width="82"></x-employer-logo>
        </div>
        <div class="self-start text-lg mt-6">{{$employer->name}}</div>
    </a>
</x-panel>