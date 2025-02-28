<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data" x-data="{ role: '' }">
        <x-forms.input label="Name" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

        <x-forms.select label="Role" name="role" x-model="role">
            <option value="">Select Role</option>
            <option value="employer">Employer</option>
            <option value="job_seeker">Job Seeker</option>
        </x-forms.select>

        <x-forms.divider />

        <!-- Show these fields only if role is 'employer' -->
        <div x-show="role === 'employer'" x-cloak>
            <x-forms.input label="Employer Name" name="employer" />
            <x-forms.input label="Employer Description" name="description" />
            <x-forms.input label="Employer Logo" name="logo" type="file" />
        </div>

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
