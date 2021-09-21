<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl flex flex-col mx-auto">

            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                First name
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                {{ $employee->firstname }}
                            </div>
                        </div>

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div
                                class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                Last name
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                {{ $employee->lastname }}
                            </div>
                        </div>

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div
                                class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                Email
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                {{ $employee->email }}
                            </div>
                        </div>

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div
                                class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                Phone
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                {{ $employee->email }}
                            </div>
                        </div>

                        <div class="px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                            <div
                                class="text-xs leading-4 font-semibold uppercase tracking-wide text-gray-900 sm:w-3/12">
                                Company
                            </div>
                            <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                                {{ optional($employee->company)->name }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
