@extends('layouts.admin')
@section('title', 'التخفيضات')
@section('body')
<div id="app" class="mr-auto sm:w-[calc(100%-40px)] md:w-[calc(100%-250px)] bg-[white] h-fit min-h-screen px-[50px] pt-[30px]">
    <div class="w-full flex justify-between">
        <div>
            <h1 class="text-[24px] font-bold text-[#2f3334]">التخفيضات</h1>
            <p class="text-[#2f3334] text-[14px] mt-1">جميع التخفيضات</p>
        </div>
        <div class="flex">
            <a href="{{ url('/sales') }}" class="cursor-pointer size-[35px] bg-[#f9f9f9] rounded-lg mr-4 flex justify-center items-center text-[14px]"><i class="fa-solid fa-database"></i></a>
        </div>
    </div>
    <div class="mt-[50px] mb-[20px] w-fit cursor-pointer">
        <h1 class="text-[14px] font-[600] w-fit">انشاء فئة جديدة</h1>
        <div class="w-full h-[2px] bg-black rounded-lg"></div>
    </div>

    <form action="{{ url('/sales/create/'.$product->id) }}" method="POST" class="w-full h-fit block rounded-md mt-[60px] px-[40px] pb-[60px]">
        @csrf
        <h1 class="text-[20px] font-[600] text-[#2f3334]">إضافة تخفيض</h1>
        <p class="text-[#2f3334] text-[14px] mb-[30px]">عليك ملء جميع الحقول</p>
        
        @foreach($errors->all() as $error)
            <h1 class="text-[12px] font-[600] w-fit text-[red]">{{ $error }}</h1>
        @endforeach
        <input type="hidden" name="id" value="{{ $product->id }}">
        <div class="my-4">
          <label for="" class="text-[14px]">الخدمة</label>
          <input type="text" name="name" disabled value="{{ $product->name }}" class="w-full border h-fit text-[15px] px-4 py-2 rounded-md bg-[#f0f0f041] mt-2 outline-none">
        </div>
        <div class="my-4">
          <label for="" class="text-[14px]">السعر الجديد</label>
          <input type="text" name="price" value="" class="w-full border h-fit text-[15px] px-4 py-2 rounded-md bg-[#f0f0f041] mt-2 outline-none">
        </div>
        <div class="flex mt-8 w-fit ml-auto gap-x-4">
          <a href="{{ url('/sales') }}" class="block cursor-pointer w-fit text-[14px] rounded-[5px] min-w-[200px] text-center px-4 py-2 text-black border">الغاء</a>
          <button type="submit" class="cursor-pointer block w-fit text-[14px] rounded-[5px] min-w-[200px] text-center px-4 py-2 text-white bg-black">تسجيل</button>
        </div>
    </form>
</div>
@endsection