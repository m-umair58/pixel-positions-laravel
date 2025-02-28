<x-layout>
    <div class="space-y-10">
        <section class="pt-6">
            <div class="text-center">
                <h1 class="font-bold text-4xl">Let's Find Your Next job</h1>

                <x-forms.form action="/search" class="mt-6">
                    <x-forms.input :label="false" name="q" placeholder="Web Developer"></x-forms.input>
                </x-forms.form>
            </div>
        </section>
        
        <section class="pt-10">
            <x-section-heading>Companies</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($employers as $employer)
                    <x-company-card :$employer/>
                @endforeach
            </div>
        </section>
        
            
    </div>
</x-layout>