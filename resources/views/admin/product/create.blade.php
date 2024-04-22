@extends('layouts.admin')
@section('title', 'التصنيفات')
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
        <h1 class="text-[14px] font-[600] w-fit">انشاء خدمة جديدة</h1>
        <div class="w-full h-[2px] bg-black rounded-lg"></div>
    </div>

    <form action="{{ url('/products/create') }}" method="POST" enctype="multipart/form-data" class="w-full h-fit block rounded-md mt-[60px] px-[40px] pb-[60px]">
        @csrf
        <h1 class="text-[20px] font-[600] text-[#2f3334]">خدمة جديدة</h1>
        <p class="text-[#2f3334] text-[14px] mb-[30px]">عليك ملء جميع الحقول</p>
        <div class="mb-4">
            @if(Session::has('upload'))
                <h1 class="text-[12px] font-[600] w-fit text-[red]">{{ Session::get('upload') }}</h1>
            @endif
            @foreach($errors->all() as $error)
                <h1 class="text-[12px] font-[600] w-fit text-[red]">{{ $error }}</h1>
            @endforeach
        </div>
        <div class="flex items-center gap-x-4">
            <div class="flex items-center">
                <input id="default-radio-1" type="radio" value="منتوج" name="type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900">منتوج</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="خدمة" name="type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900">خدمة</label>
            </div>
        </div>
        <div class="my-4 w-full">
            <label for="" class="text-[14px]">الصورة</label>
            <label for="cover" class="flex items-center justify-center text-[#b1b1b1] cursor-pointer text-[40px] w-full h-52 rounded-md bg-[#f0f0f041] border mt-2">
                <i class="fa-solid fa-plus"></i>
            </label>
            <input class="hidden" type="file" name="cover" id="cover" accept=".png, .jpg, .jpeg, .gif, .svg, .avif">
        </div>
        <img class="w-[100px] h-[100px]  rounded-md object-cover" id="previewImage" style="display: none;" />

        <div class="my-4">
          <label for="" class="text-[14px]">الاسم</label>
          <input type="text" name="name" class="w-full border h-fit text-[15px] px-4 py-2 rounded-md bg-[#f0f0f041] mt-2 outline-none">
        </div>
        <div class="my-4">
            <label for="" class="text-[14px]">الثمن</label>
            <input type="text" name="price" class="w-full border h-fit text-[15px] px-4 py-2 rounded-md bg-[#f0f0f041] mt-2 outline-none">
        </div>
        <div class="my-4">
            <label for="" class="text-[14px]">اختر على الاقل صنفا</label>
            <select name="category[]" multiple class="w-full border h-fit text-[15px] px-4 py-2 rounded-md bg-[#f0f0f041] mt-2 outline-none">
                @foreach($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex mt-8 w-fit ml-auto gap-x-4">
          <a href="{{ url('/products') }}" class="block cursor-pointer w-fit text-[14px] rounded-[5px] min-w-[200px] text-center px-4 py-2 text-black border">الغاء</a>
          <button type="submit" class="cursor-pointer block w-fit text-[14px] rounded-[5px] min-w-[200px] text-center px-4 py-2 text-white bg-black">تسجيل</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')

<script>
document.addEventListener('change', function(event) {
        if (event.target && event.target.id === 'cover') {
            handleFileSelect(event);
        }
    });

    function handleFileSelect(event) {
        const file = event.target.files[0];

        if (file) {
            const blobURL = URL.createObjectURL(file);

            // Display the image or do further processing
            const imageElement = document.getElementById('previewImage');
            imageElement.src = blobURL;
            imageElement.style.display = 'block'; // Make sure the image element is visible
        }
    }
</script>

@endsection