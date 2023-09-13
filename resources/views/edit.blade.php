@extends ('layouts.app')

<!-- @section('title', 'Edit Task')
@section('styles')
<style>
    .error-message {
        color:red;
        font-size:0.8rm;
    }
    </style>

@endsection -->


@section('content')
@include ('form', ['task' => $task])
@endsection

<!-- {{-- Metod spoofing (engl. "method spoofing") je tehnika koja omogućava programerima da promene HTTP metod koji se koristi u zahtevima upućenim web serverima. Ovo je posebno korisno kada želite da izvršite određene akcije na web serveru (na primer, kreiranje, ažuriranje ili brisanje resursa) i želite da koristite HTTP metode kao što su POST, PUT, DELETE, iako vaša aplikacija podržava samo osnovne HTTP metode GET i POST. --}}
{{-- Ovo vazi za ovo POST i @method PUT--}}
<form method ="POST" action="{{route('tasks.update', ['task' => $task->id])}}">
    @csrf
    @method('PUT')
    <div>
        <label for="title>
</label>
<div>
    <label for ="title">
        Title
</label>
    <input text="text" name="title" id="title" value="{{ $task->title }}" />
    @error('title')
    <p class="error-message">{{ $message }} </p>

    @enderror
</div>

</div>
<div>
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="5">{{ $task->description }}</textarea>
    
    @error('description')
    <p class="error-message">{{ $message }} </p>

    @enderror
</div>

<div>
    <label for="long_description"> Long Description</label>
    <textarea name="long_description" id="long_description" rows="10">{{ $task->long_description }}</textarea>
    @error('long_description')
    <p class="error-message">{{ $message }} </p>

    @enderror
</div>
<div>
    <button type="submit">Edit Task</button>

</form> -->