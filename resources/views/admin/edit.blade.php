@extends('layouts.home')

@section('title', 'Editeaza produs')

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
        <form action="{{ route('admin.update',
            ['admin'=>$admin->id]) }}" 
              method="post" 
              enctype="multipart/form-data">
            @csrf
            @method('put')
            <label for="nume">Nume</label>
            <input type="text" name="nume" id="nume" value="{{ $admin->nume }}">
            <label for="img">Imagine</label>
            <input type="file" name="img" id="img" >
            <label for="pret">Pret</label>
            <input type="text" name="pret" id="pret" value="{{ $admin->pret }}">
            <label for="nota">Nota</label>
            <input type="text" name="nota" id="nota" value="{{ $admin->nota }}">
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