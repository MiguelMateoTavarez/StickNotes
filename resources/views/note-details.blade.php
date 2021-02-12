@extends('layouts.app')

@section('title', 'Detalles de nota')

@section('content')

<div class="col">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $note->id }}) {{ $note->title }}</h5>
            <p class="card-text">{!! $note->content !!} {{-- @todoL Purify HTML or use Markdown instead --}}</p>
        </div>
        <form method="POST" action="{{url('note/'.$note->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
</div>

@endsection