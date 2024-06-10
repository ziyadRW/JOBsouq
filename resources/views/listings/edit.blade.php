@extends('layout')

@section('content')
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Your Job
            </h2>
            <p class="mb-4">{{$listing->title}} </p>
        </header>

        <form action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data">
            @csrf {{-- prevents cross site scripting  --}}
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input value="{{$listing->company}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="company" />
                @error('company')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input value="{{$listing->title}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Example: Software Developer" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input value="{{$listing->location}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Example: Remote, Riyadh SA, etc" />
                @error('location')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input value="{{$listing->email}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="email" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">Website URL</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" value="{{$listing->website}}" />
                @error('website')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
                </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Tags/Skills/Tools (Comma Separated)</label>
                <input value="{{$listing->tags}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Example: AutoCAD, Backend, Teaching, etc" />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">Company Logo</label>
                <input  type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                <img
                    class="w-48 mr-6 mb-6"
                    src={{$listing->logo ? asset("storage/" .$listing->logo) : asset("images/no-image.png")}}
                    alt=""
                />
                {{-- <form method="POST" action="/listings/{{$listing->id}}/remove-logo">
                    @csrf
                    @method('PUT')
                    <button class="text-red-500 mt-2">
                        <i class="fa-solid fa-trash"></i> Remove Logo
                    </button>
                </form> --}}
                @error('logo')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror 
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Job Description</label>
                <textarea  class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}
                </textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    EDIT
                </button>
                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
@endsection