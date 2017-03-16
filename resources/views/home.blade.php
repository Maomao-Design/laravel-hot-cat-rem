@extends('layouts.app') 

@section('title', 'Index Title') 

@section('content')

@include('index.banner')
@include('index.future')
@include('index.product')

<section class="section-50 section-sm-60 section-md-75 bg-gray-lighter">
    <div class="shell">
        <div class="range range-sm-center range-sm-middle range-sm-reverse">
            <div class="cell-sm-6 cell-lg-6 text-sm-center">
                <div class="box-container-small text-right">

                    <p class="offset-top-22 text-secondary font-n24">
                        Choose from our wide range of predefined Homepage layouts and demos to create your Own Amazing Experience.</p>
                    <a href="" class="btn btn-xl btn-blue-ma offset-top-35 offset-md-top-60">SEE MORE  &nbsp;></a>
                </div>
            </div>
            <div class="cell-sm-6 cell-lg-6 offset-top-40 offset-sm-top-0">
                <div class="image-wrap-1"><img src="/jcb/imgs/thumb-big.png" alt="" width="550" height="480">
                </div>
            </div>
        </div>
    </div>
</section>

@include('index.blog')

@endsection