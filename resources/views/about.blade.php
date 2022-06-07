@extends('app')

@section('content')
<div class="container">
    <h2 class="text-primary" style="margin: 10px">About Me</h2>
    <div class="row justify-content-md-center">
        <div class="col-lg-3 col-md-5 mb-5 mb-md-0" style="margin: 10px;">
            <img src="{{ asset('foto.jpg')}}" alt="foto" width="100%">
        </div>
    </div>
    <div class="row justify-content-center" style="margin: 20px">
        <div class="col-lg-3">
            <h5 class="text-primary text-center">Mbak Adel</h5>
        </div>
    </div>
    <div class="row justify-content-center" style="margin: 20px">
        <div class="col-lg-12">
            <h2 class="text-primary" style="margin: 10px">Background</h2>
            <p style="margin: 10px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam tempore voluptatum impedit ea. Laudantium, ab, quis sapiente necessitatibus corrupti minus quam voluptatibus tenetur dolorum ut accusamus, vero repudiandae tempore eaque?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit officia perferendis soluta praesentium, nam, ea cupiditate inventore quaerat minima quisquam labore, impedit consectetur earum tempora voluptatum enim rerum. Odit, fuga.
            </p>
        </div>
        <div class="col-lg-12">
            <h2 class="text-primary" style="margin: 10px">Suka Duka Praktikum PAW</h2>
            <p style="margin: 10px">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam tempore voluptatum impedit ea. Laudantium, ab, quis sapiente necessitatibus corrupti minus quam voluptatibus tenetur dolorum ut accusamus, vero repudiandae tempore eaque?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit officia perferendis soluta praesentium, nam, ea cupiditate inventore quaerat minima quisquam labore, impedit consectetur earum tempora voluptatum enim rerum. Odit, fuga.
            </p>
        </div>
    </div>
</div>

@endsection
