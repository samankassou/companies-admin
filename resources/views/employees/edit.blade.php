<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="max-w-6xl flex flex-col mx-auto">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="flex flex-col items-center">
                        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">


                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('employees.update', $employee) }}">
                                @csrf
                                @method('PATCH')
                                <!-- First Name -->
                                <div>
                                    <x-label for="firstname" :value="__('First name')" />

                                    <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname"
                                        :value="old('firstname', $employee->firstname)" required autofocus />
                                </div>

                                <!-- Last name -->
                                <div class="mt-4">
                                    <x-label for="lastname" :value="__('Last name')" />

                                    <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                                        :value="old('lastname', $employee->lastname)" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email', $employee->email)" />
                                </div>

                                <!-- phone -->
                                <div class="mt-4">
                                    <x-label for="phone" :value="__('Phone')" />

                                    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                                        :value="old('phone', $employee->phone)" />
                                </div>

                                <!-- company -->
                                <div class="mt-4">
                                    <x-label for="company" :value="__('Company')" />

                                    <select name="company" id="company"
                                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option value="">---</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}" @if (old('company', $employee->company_id) == $company->id) selected @endif>
                                                {{ $company->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex items-center justify-end mt-4">

                                    <x-button class="ml-3">
                                        {{ __('Update') }}
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
