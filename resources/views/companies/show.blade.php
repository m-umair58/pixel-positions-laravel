<x-layout>
    <x-page-heading>{{ $company->name }}</x-page-heading>

    <div class="grid grid-cols-1 gap-6 p-6">
        {{-- @foreach($companies as $company) --}}
            <div class="border rounded-lg shadow p-4 bg-gray-900 ">
                <div class="flex items-center space-x-4 gap-4 ">
                    <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}" class="w-16 h-16 object-cover rounded-full ">
                    <h2 class="text-xl font-bold">{{ $company->name }}</h2>
                </div>
                <p class="mt-4 ">{{ $company->description }}</p>
            </div>
        {{-- @endforeach --}}
    </div>
    <section>
        <x-section-heading>Jobs by {{$company->name}}</x-section-heading>
        <div class="mt-6 space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :$job/>
            @endforeach
        </div>
    </section>
</x-layout>
