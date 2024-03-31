@php
    $userId = session('id'); 
@endphp

<x-app-layout>
    @if($userId == 1)
        <p>User is an admin</p>
    @else
        <p>User is not an admin</p>
    @endif
</x-app-layout>
