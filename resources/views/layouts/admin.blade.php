<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Moonhigh</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/99be30e45a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    @vite(
        [
            'resources/css/app.css', 
            'resources/js/app.js',
            'resources/css/menu.css',
            'resources/js/menu.js',
        ]
    )  

    <style>
        .active{
            font-weight: 600 !important;
            background: #f3f3fb !important;
            color: black !important;
        }

        .active i{
            color: black !important;
        }
    </style>

    <script>
        $(document).ready(function(){
            $('#adminmenu').click(function(){
                $('.smmenu').removeClass('hidden').addClass('flex')
            })

            $('.closesmmenu').click(function(){
                $('.smmenu').removeClass('flex').addClass('hidden')
            })
        })
    </script>
</head>
<body class="font-readex">
    <div class="flex relative" dir="rtl">
        <div class="sm:w-0 overflow-x-hidden md:w-[250px] h-screen fixed top-0 right-0 border-l-[1px] md:px-[30px] py-[10px] flex flex-col">
            <div class="flex items-center gap-x-2 pt-4 text-[#0c0b36] justify-center">
                <h1 class="font-[600] text-[18px]">القمر العالي</h1>
            </div>
            <div class="h-full pt-[40px] flex flex-col">

                <div class="h-full">
                    <div class="mb-[10px]"></div>
                    <p class="font-[500] text-[13px] text-[#b6b6c9] flex items-center px-[14px] py-[10px] rounded-md">القائمة الرئيسية</p>
                    <!-- <a class="font-[600] bg-[#f3f3fb] text-black text-[13px] flex items-center px-[14px] py-[10px] rounded-md mb-2 mt-2" href="#"><i class="fa-solid fa-layer-group text-[17px] ml-[10px]"></i> التصنيفات</a> -->
                    <a class="{{ request()->is('categories', 'categories/*') ? 'active': '' }} font-[500] text-[#5c5c5c] text-[13px] flex items-center px-[14px] py-[10px] rounded-md mb-2 mt-2" href="{{ url('/categories') }}"><i class="fa-solid fa-layer-group text-[#b6b6c9] text-[17px] ml-[10px]"></i> التصنيفات</a>
                    <a class="{{ request()->is('products', 'products/*') ? 'active': '' }} font-[500] text-[13px] text-[#5c5c5c] flex items-center px-[14px] py-[10px] rounded-md my-2" href="{{ url('/products') }}"><i class="fa-solid fa-cube text-[#b6b6c9] text-[17px] ml-[10px]"></i> الخدمات</a>
                    <a class="{{ request()->is('sales', 'sales/*') ? 'active': '' }} font-[500] text-[13px] text-[#5c5c5c] flex items-center px-[14px] py-[10px] rounded-md my-2" href="{{ url('/sales') }}"><i class="fa-solid fa-gift text-[#b6b6c9] text-[17px] ml-[10px]"></i> التخفيضات</a>

                </div>
                <div class="h-fit">
                    <a class="font-[600] text-[13px] text-[#b6b6c9] flex items-center px-[14px] py-[10px] rounded-md my-2" href="#"><i class="fa-solid fa-gear text-[17px] ml-[10px]"></i> الإعدادات</a>
                    <a class="font-[600] text-[13px] text-[#b6b6c9] flex items-center px-[14px] py-[10px] rounded-md my-2" href="#"><i class="fa-solid fa-power-off text-[17px] ml-[10px]"></i> تسجيل الخروج</a>
                </div>
            </div>
        </div>
        <div class="smmenu hidden fixed flex-col bg-white top-0 w-full max-w-[250px] h-screen right-0 z-[1000] md:hidden px-[30px] py-[10px] border-l-[1px]">
            <div class="flex items-center justify-between gap-x-2 pt-4 text-[#0c0b36]">
                <h1 class="font-[600] text-[18px]">القمر العالي</h1>
                <i class="fa-solid fa-rectangle-xmark closesmmenu text-[red] text-[22px] cursor-pointer"></i>
            </div>
            <div class="h-full pt-[40px] flex flex-col">

                <div class="h-full">
                    <div class="mb-[10px]"></div>
                    <p class="font-[500] text-[13px] text-[#b6b6c9] flex items-center px-[14px] py-[10px] rounded-md">القائمة الرئيسية</p>
                    <!-- <a class="font-[600] bg-[#f3f3fb] text-black text-[13px] flex items-center px-[14px] py-[10px] rounded-md mb-2 mt-2" href="#"><i class="fa-solid fa-layer-group text-[17px] ml-[10px]"></i> التصنيفات</a> -->
                    <a class="{{ request()->is('categories', 'categories/*') ? 'active': '' }} font-[500] text-[#5c5c5c] text-[13px] flex items-center px-[14px] py-[10px] rounded-md mb-2 mt-2" href="{{ url('/categories') }}"><i class="fa-solid fa-layer-group text-[#b6b6c9] text-[17px] ml-[10px]"></i> التصنيفات</a>
                    <a class="{{ request()->is('products', 'products/*') ? 'active': '' }} font-[500] text-[13px] text-[#5c5c5c] flex items-center px-[14px] py-[10px] rounded-md my-2" href="{{ url('/products') }}"><i class="fa-solid fa-cube text-[#b6b6c9] text-[17px] ml-[10px]"></i> الخدمات</a>
                    <a class="{{ request()->is('sales', 'sales/*') ? 'active': '' }} font-[500] text-[13px] text-[#5c5c5c] flex items-center px-[14px] py-[10px] rounded-md my-2" href="{{ url('/sales') }}"><i class="fa-solid fa-gift text-[#b6b6c9] text-[17px] ml-[10px]"></i> التخفيضات</a>

                </div>
                <div class="h-fit">
                    <a class="font-[600] text-[13px] text-[#b6b6c9] flex items-center px-[14px] py-[10px] rounded-md my-2" href="#"><i class="fa-solid fa-gear text-[17px] ml-[10px]"></i> الإعدادات</a>
                    <a class="font-[600] text-[13px] text-[#b6b6c9] flex items-center px-[14px] py-[10px] rounded-md my-2" href="#"><i class="fa-solid fa-power-off text-[17px] ml-[10px]"></i> تسجيل الخروج</a>
                </div>
            </div>
        </div>
        <div id="adminmenu" class="pt-[30px]">
            <a href="javascript:void(0);" class="sm:flex md:hidden cursor-pointer size-[35px] bg-[#f9f9f9] rounded-lg mr-4 justify-center items-center text-[14px]"><i class="fa-solid fa-bars"></i></a>
        </div>
        @yield('body')
    </div>
    @yield('scripts')
</body>
</html>