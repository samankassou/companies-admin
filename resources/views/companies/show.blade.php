<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl flex flex-col mx-auto">

            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                    <div class="shadow overflow-hidden bg-white border-b border-gray-200 sm:rounded-lg">

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                Logo
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                <div class="flex-shrink-0 h-20 w-20">
                                    <img src="{{ asset('storage') . '/' . $company->logo ?? asset('images/logo.jpeg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div
                                class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                Name
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                {{ $company->name }}
                            </div>
                        </div>

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div
                                class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                Email
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                {{ $company->email }}
                            </div>
                        </div>

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div
                                class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                Website
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                <a target="_blank" class="text-indigo-900 underline"
                                    href="{{ $company->website }}">{{ $company->website }}</a>
                            </div>
                        </div>

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div
                                class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                Number of employees
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                    {{ $company->employees_count }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
