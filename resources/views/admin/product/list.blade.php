@extends('layouts.admin')
@section('title', 'الخدمات')
@section('body')
<div id="app" class="mr-auto sm:w-[calc(100%-40px)] md:w-[calc(100%-250px)] bg-[white] h-fit min-h-screen px-[50px] pt-[30px]">
    <div class="w-full flex justify-between">
        <div>
            <h1 class="text-[24px] font-bold text-[#2f3334]">الخدمات</h1>
            <p class="text-[#2f3334] text-[14px] mt-1">جميع الخدمات</p>
        </div>
        <div class="flex">
            <a href="{{ url('/products') }}" class="cursor-pointer size-[35px] bg-[#f9f9f9] rounded-lg mr-4 flex justify-center items-center text-[14px]"><i class="fa-solid fa-database"></i></a>
            <a href="{{ url('/products/create') }}" class="cursor-pointer size-[35px] bg-[#f9f9f9] rounded-lg mr-4 flex justify-center items-center text-[14px]"><i class="fa-solid fa-plus"></i></a>
        </div>
    </div>
    <div class="mt-[50px] mb-[20px] w-fit cursor-pointer">
        <h1 class="text-[14px] font-[600] w-fit">لائحة الخدمات</h1>
        <div class="w-full h-[2px] bg-black rounded-lg"></div>
    </div>
    <servicelist :data="{{ $products }}" />
</div>
@endsection