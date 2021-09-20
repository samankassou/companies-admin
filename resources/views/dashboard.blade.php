<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- component -->
        <!-- responsive table-->
        <div class="mt-2">
            <table class="max-w-5xl mx-auto table-auto">
                <thead class="justify-between">
                    <tr class="bg-green-600">
                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">Logo</span>
                        </th>
                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">Name</span>
                        </th>

                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">Email</span>
                        </th>

                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">Website</span>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200">
                    @forelse ($companies as $company)
                        <tr class="bg-white border-b-2 border-gray-200">
                            <td class="px-16 py-2 flex flex-row items-center">
                                <img class="h-8 w-8 object-cover" src="{{ $company->logo }}" alt="company logo" />
                            </td>
                            <td>
                                <span class="text-center ml-2 font-semibold">{{ $company->name }}</span>
                            </td>

                            <td class="px-16 py-2">
                                <span>{{ $company->email }}</span>
                            </td>
                            <td class="px-16 py-2">
                                <span>{{ $company->website }}</span>
                            </td>

                            <td class="px-16 py-2">
                                <span class="text-yellow-500 flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700 mx-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-700"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b-2 border-gray-200">
                            <td colspan="5" class="text-center">@lang("No item found")</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mx-4 my-2">
                {{ $companies->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
