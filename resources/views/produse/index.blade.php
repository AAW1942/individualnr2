@extends('layouts.app')

@section('title', 'Produse')

@section('content')
    <div class="produse">  
        @forelse($produse as $produs)
            <div class="card">
                <img src="{{ asset('imagini/'.$produs->img) }}" alt="{{ $produs->nume }}">
                <h5>{{ $produs->nume }}</h5>
                <div class="footer">
                    <span>${{ $produs->pret }} </span>
                    <span>{{ $produs->nota }} </span>
                </div>
            </div>
        @empty
            <p>Nu avem produse in stoc</p>
        @endforelse
    </div>

@endsection
@push('styles')
<style>
   body{
    margin: 0;
}
*{
    box-sizing: border-box;
}
.container{
    /* margin: 0 auto;
    width: 60%; */
    padding: 30px 0;
    min-width: 200px;
    background-color: #fafafa;
}
.produse{
    margin: 0 auto;
    width: 60%;
    min-width: 200px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 25px;
    color: #464444;
}
.card{
    font-size: 12px;
    min-width: 200px;
    flex: 1;
    background-color: white;
    /* border: 1px solid #f7f7f7; */
    box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
}
.card img{
    width: 70%;
    height: 150px;
    object-fit: contain;
    display: block;
    margin: 20px auto;
}
.card h4{
    margin: 10px 10px;
    font-weight: 100;
}
.footer{
    display: flex;
    justify-content: space-between;
    border-top: 1px solid #f7f7f7;
} 
.footer span{
    padding: 4px;
    font-size: 12px;
    margin: 5px;
    font-weight: bold;
    color: #8e8b8b;
}
.footer span:last-child{
    background-color: #f7f7f7;
    border-radius: 4px;
    width: 30px;
    text-align: center;
}
    
</style>
@endpush