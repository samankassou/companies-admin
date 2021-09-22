<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl flex flex-col mx-auto">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="flex flex-col items-center">
                        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">


                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('companies.update', $company) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <!-- Name -->
                                <div>
                                    <x-label for="email" :value="__('Name')" />

                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name', $company->name)" required autofocus />
                                </div>
                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email', $company->email)" />
                                </div>

                                <!-- Website -->
                                <div class="mt-4">
                                    <x-label for="website" :value="__('Website')" />

                                    <x-input id="website" class="block mt-1 w-full" type="text" name="website"
                                        :value="old('website', $company->website)" />
                                </div>

                                <!-- Logo -->

                                <div class="mt-4">
                                    <x-label for="logo" :value="__('Logo')" />
                                    {{-- Show the logo if it exists --}}
                                    @if ($company->logo)
                                        <div class="h-20 w-20">
                                            <img src="{{ asset('storage') . '/' . $company->logo }}" alt="">
                                        </div>
                                    @endif

                                    <x-input id="logo" class="block mt-1 w-full" type="file" name="logo"
                                        :value="old('logo')" />
                                </div>


                                <div class="flex items-center justify-end mt-4">

                                    <x-button class="ml-3">
                                        {{ __('Save') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
