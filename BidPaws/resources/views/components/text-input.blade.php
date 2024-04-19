@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' p-2 border-gray-300 border-indigo-500  rounded-md shadow-sm']) !!}>