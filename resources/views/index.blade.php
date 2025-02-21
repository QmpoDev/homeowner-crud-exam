@extends('main')

@section('content')
    <div class="container mx-auto my-auto">
        <br>
        <h1 class="text-3xl font-bold text-black">Homeowner Manager</h1>
        <br>

        @if ($homeowners->isEmpty())
            <div class="flex flex-col items-center justify-center my-20 p-10 bg-gray-50 rounded-lg shadow-lg">

                <div class="text-center text-gray-600 py-6 font-semibold text-3xl">
                    No homeowners found.
                </div>

                    <button id="btn" style="margin-top:10px" onclick="window.location.href='/add'" class="noselect">
                        <span class="text">Add</span>
                        <span class="icon">
                            <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"></svg>
                            <span class="buttonSpan">+</span>
                        </span>
                    </button>
                </div>
            @else
                <table class="table-auto w-full rounded-tl-lg">
                    <thead>
                        <tr class="bg-black text-white">
                            <th class="px-4 py-2 rounded-tl-lg">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Phone</th>
                            <th class="px-4 py-2">Address</th>
                            <th class="px-4 py-2">Occupation</th>
                            <th class="px-4 py-2">Created At</th>
                            <th class="px-4 py-2">Updated At</th>
                            <th class="px-4 py-2 rounded-tr-lg w-50">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homeowners as $homeowner)
                            <tr class="odd:bg-white even:bg-gray-300">
                                <td class="border border-gray-300 px-4 py-2">{{ $homeowner->id }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $homeowner->first_name }} {{ $homeowner->middle_name }} {{ $homeowner->last_name }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">{{ $homeowner->email }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $homeowner->phone }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $homeowner->address }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $homeowner->occupation }}</td>
                                <td class="border border-gray-300 px-4 py-2 w-50">{{ $homeowner->created_at }}</td>
                                <td class="border border-gray-300 px-4 py-2 w-50">{{ $homeowner->updated_at }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <div class="flex flex-row justify-evenly">
                                        <button onclick="window.location.href='/edit/{{ $homeowner->id }}'"
                                            class="edit-button">
                                            <svg class="edit-svgIcon" viewBox="0 0 512 512">
                                                <path
                                                    d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button onclick="window.location.href='/delete_confirm/{{ $homeowner->id }}'"
                                            class="delete-button">
                                            <svg class="delete-svgIcon" viewBox="0 0 448 512">
                                                <path
                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <button id="btn" onclick="window.location.href='/add'" class="noselect">
                    <span class="text">Add</span>
                    <span class="icon">
                        <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"></svg>
                        <span class="buttonSpan">+</span>
                    </span>
                </button>

                <div class="mt-4">
                    {{ $homeowners->links() }}
                    <br>
                </div>
        @endif
    </div>
@endsection
