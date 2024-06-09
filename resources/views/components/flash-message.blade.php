@if(session()->has('message'))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4500)" x-show="show" class="fixed top-6 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3 bg-opacity-80 rounded-lg">
    <p>
            {{session('message')}}
        </p>
    </div>
@endif