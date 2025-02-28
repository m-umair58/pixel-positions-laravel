<x-layout>
    <div class="space-y-10">
        <section class="pt-6">
            <div class="text-center">
                @can('post-job')
                <h1 class="font-bold text-4xl">Find A Posted job</h1>
                @else
                <h1 class="font-bold text-4xl">Let's Find Your Next job</h1>
                @endcan
                <x-forms.form action="/search" class="mt-6">
                    <x-forms.input :label="false" name="q" placeholder="Web Developer"></x-forms.input>
                </x-forms.form>
            </div>
        </section>
        @can('post-job')
        <section>
            <x-section-heading>My Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($myJobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
        
        @else
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag /> 
                @endforeach
            </div>  
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
            
        @endcan
    </div>
</x-layout>