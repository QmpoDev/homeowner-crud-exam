@extends('main')

@section('content')
<div class="flex flex-col items-center justify-center h-screen bg-gray-200">
    <div class="w-200 bg-gray-100 rounded-lg shadow-md p-30">
    <h2 class="text-2xl font-bold text-gray-900 mb-4 ">Edit Homeowner ID-{{ $homeowner->id}}</h2>
    <form action="/update/{{ $homeowner->id }}" method="POST" class="flex flex-col " id="editHomeownerForm">
      @csrf
      @method('PUT')
      <input placeholder="First Name" name="first_name" id="first_name" for="first_name" class="bg-gray-200 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" type="text" value="{{ $homeowner->first_name }}">
      <input placeholder="Middle Name" name="middle_name" id="middle_name" for="middle_name" class="bg-gray-200 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" type="text" value="{{ $homeowner->middle_name }}">
      <input placeholder="Last Name" name="last_name" id="last_name" for="last_name" class="bg-gray-200 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" type="text" value="{{ $homeowner->last_name }}">
      <input placeholder="Email" name="email" id="email" for="email" class="bg-gray-200 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" type="email" value="{{ $homeowner->email }}">
      <input placeholder="Phone Number" name="phone" id="phone" for="phone" class="bg-gray-200 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" type="number" value="{{ $homeowner->phone }}">
      <input placeholder="Address" name="address" id="address" for="address" class="bg-gray-200 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" type="text" value="{{ $homeowner->address }}">
      <input placeholder="Occupation" name="occupation" id="occupation" for="occupation" class="bg-gray-200 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" type="text" value="{{ $homeowner->occupation }}">
      <button class="bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-blue-700 hover:to-blue-800 transition ease-in-out duration-150" type="submit" id="submitButton">Update</button>
      <p class="text-gray-900 mt-4"><a class="text-sm text-blue-500 -200 hover:underline mt-4" href="/">Back to Home</a></p>
    </form>
  </div>
</div>

@endsection