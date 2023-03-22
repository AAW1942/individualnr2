@extends('layouts.home')

@section('title', 'Adauga produs')

@section('content')
    <div class="container">
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form action="{{ route('admin.store') }}" 
              method="post" 
              enctype="multipart/form-data">
            @csrf
            <label for="nume">Nume</label>
            <input type="text" name="nume" id="nume">
            <label for="img">Imagine</label>
            <input type="file" name="img" id="img">
            <label for="pret">Pret</label>
            <input type="text" name="pret" id="pret">
            <label for="nota">Nota</label>
            <input type="text" name="nota" id="nota">
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
@push('styles')
<style>
    form{
        width:600px;
        margin:30px auto;
        display:flex;
        flex-direction:column;
        gap: 10px;
    }
    form>*{
        padding:5px 3px;
    }
    form label{
        font-weight:bold;

    }
</style>
@endpush