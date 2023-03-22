@extends('layouts.home')

@section('title', 'Lista produse')

@section('content')
    <div class="produse">
        <table>
            @if($produse->count() > 0)
                <tr>
                    <th>Id</th>
                    <th>Nume</th>
                    <th>Imagine</th>
                    <th>Pret</th>
                    <th>Nota</th>
                    <th>Optiuni</th>
                </tr>
            @endif
            @forelse( $produse as $produs )
                <tr>
                    <td>
                        {{ $produs->id }}
                    </td>
                    <td>
                        {{ $produs->nume }}
                    </td>
                    <td>
                        <img src="imagini/{{ $produs->img }}" alt="">
                    </td>
                    <td>
                        {{ $produs->pret }}
                    </td>
                    <td>
                        {{ $produs->nota }}
                    </td>
                    <td>
                        <a href="{{ route('admin.edit',['admin'=>$produs->id]) }}">Edit</a>
                        <form action="{{ route('admin.destroy',['admin'=>$produs->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>Nu avem produse in stoc</p>
            @endforelse
        </table>
    </div>
@endsection
@push('styles')
<style>
    .produse{
        width:1000px;
        margin: 0px auto;
    }
    .produse img{
        width: 100px;
        height:100px;
        object-fit:cover;
    }
    .produse table{
        width:100%;
        border-collapse:collapse;
    }
    .produse td, .produse th{
        border:1px solid black;
        
    }
</style>
@endpush