@extends('layouts.master')
@section('title', 'صالون القمر العالي')
@section('body')
    <header class="h-fit bgimage flex sm:w-full md:w-[95%] lg:w-[95%] xl:w-[90%] mx-auto relative">
        <div class="absolute h-fit top-0 left-0 sm:w-[100px] md:w-[120px]">
            <h1 class="absolute sm:right-[21px] md:right-[22px] text-white font-bold sm:top-[32px] md:top-[35px] sm:text-[14px] md:text-[18px]">-30%</h1>
            <img class="block w-full" src="{{ url('/images/alert.png') }}" alt="">
        </div>
        <div class="sm:w-[100%] md:w-[100%] lg:w-[50%] pt-[60px] pl-[50px] relative sm:hidden md:block">
            {{-- <img class="block absolute left-[-140px] bottom-[-150px] object-cover" src="{{ url('/images/asset.png') }}" alt=""> --}}
            <img class="block absolute top-0 bottom-0 left-0 object-cover" src="{{ url('/images/asset.png') }}" alt="">
            <img class="transform scale-x-[-1] sm:h-[380px] md:h-[350px] lg:h-[400px] xl:h-[450px] object-cover" src="{{ url('/images/header.png') }}" alt="">
        </div>
        <div class="sm:w-[85%] mx-auto md:w-[100%] lg:w-[50%] sm:pb-[30px] md:pb-[50px] sm:pt-[100px] md:pt-[50px]" dir="rtl">
            <h1 class="font-bold sm:text-[26px] md:text-[26px] lg:text-[35px] xl:text-[40px] mt-4 sm:text-center md:text-right">عروض خاصة على خدماتنا</h1>
            <p class=" sm:w-[90%] md:w-full mx-auto sm:text-[26px] md:text-[26px] lg:text-[35px] xl:text-[40px] mt-2 sm:text-center md:text-right">
                استمتعي بتجربة فريدة ومميزة في صالون القمر العالي للجمال والعناية الشخصية
            </p>
            <div class="flex flex-wrap sm:gap-x-2 md:gap-x-4 gap-y-4 sm:mt-6 md:mt-6 lg:mt-6 xl:mt-4 w-fit mx-auto sm:justify-center md:justify-normal">
                <div class="bg-gradient-to-br from-purple-400 to-gray-300 cursor-pointer text-white sm:text-[10px] md:text-[11px] lg:text-[11px] xl:text-[12px] py-1 rounded-full px-3"><i class="fa-solid fa-xmark"></i> خدمات العروس</div>
                <div class="bg-gradient-to-br from-purple-400 to-gray-300 cursor-pointer text-white sm:text-[10px] md:text-[11px] lg:text-[11px] xl:text-[12px] py-1 rounded-full px-3"><i class="fa-solid fa-xmark"></i> المكياج</div>
                <div class="bg-gradient-to-br from-purple-400 to-gray-300 cursor-pointer text-white sm:text-[10px] md:text-[11px] lg:text-[11px] xl:text-[12px] py-1 rounded-full px-3"><i class="fa-solid fa-xmark"></i> المعالجات</div>
                <div class="bg-gradient-to-br from-purple-400 to-gray-300 cursor-pointer text-white sm:text-[10px] md:text-[11px] lg:text-[11px] xl:text-[12px] py-1 rounded-full px-3"><i class="fa-solid fa-xmark"></i> العناية بالجسم</div>
            </div>
            <div class="flex sm:w-fit md:w-auto mx-auto sm:gap-x-[20px] md:gap-x-[30px] lg:gap-x-[60px] xl:gap-x-[100px] mt-[50px] md:pr-6">
                <a href="#" class="block w-fit h-fit px-4 sm:min-w-[120px] md:min-w-[120px] lg:min-w-[160px] sm:text-[14px] md:text-[13px] lg:text-[15px] text-center py-1 font-bold sm:bg-[#8B6192] md:bg-[#a288a6] text-white">احجز الان</a>
                <a href="#" class="block w-fit h-fit px-4 sm:min-w-[120px] md:min-w-[120px] lg:min-w-[160px] sm:text-[14px] md:text-[13px] lg:text-[15px] text-center py-[2px] font-bold bg-transparent text-black border-t-[2px] border-black border-b-[2px]">تصفح الخدمات</a>
            </div>
        </div>
    </header>
    <main id="app">
        <!--ابرز الخدمات-->
        <section class="w-full sm:py-[40px] md:py-[70px]">
            <h1 class="text-center text-black font-bold md:text-[20px] lg:text-[22px] xl:text-[25px]">أبرز الخدمات</h1>
            <p class="text-center md:text-[14px] lg:text-[16px] xl:text-[18px] text-[#852294] font-[500] mt-[14px]">تجربة استثنائية مع خدماتنا الاستثنائية للعناية بك وبجمالك</p>
            <div class="sm:hidden md:grid md:w-[90%] lg:w-[90%] xl:w-[80%] mt-[40px] mx-auto grid-cols-2 sm:gap-y-[15px] sm:gap-x-[10px] md:gap-x-[20px] lg:gap-x-[50px]">
                <div class="w-full sm:h-[300px] md:h-[400px] lg:h-[430px] xl:h-[450px] relative">
                    <a class="bg-gradient-to-br from-purple-400 to-gray-300 block absolute left-0 right-0 w-fit mx-auto bottom-4 sm:px-[10px] sm:py-[4px] md:px-4 md:py-2 font-bold lg:min-w-[150px] sm:text-[11px] md:text-[12px] lg:text-[15px] text-center" href="#">صبغات الشعر</a>
                    <img class="block rounded-[20px] object-cover object-right-top w-full h-full" src="{{ url('images/color.jpg') }}" alt="">
                </div>
                <div class="w-full sm:h-[290px] md:h-[400px] lg:h-[430px] xl:h-[450px] grid grid-cols-2 grid-rows-2 sm:gap-2 md:gap-4">
                    <div class="w-full h-full relative">
                        <a class="bg-gradient-to-br from-purple-400 to-gray-300 block absolute left-0 right-0 w-fit mx-auto bottom-4 sm:px-[10px] sm:py-[4px] md:px-4 md:py-2 font-bold lg:min-w-[150px] sm:text-[11px] md:text-[12px] lg:text-[15px] text-center" href="#">مكياج</a>
                        <img class="w-full h-full object-cover rounded-[20px] block" src="{{ url('images/makeup.png') }}" alt="">
                    </div>
                    <div class="w-full h-full relative">
                        <a class="bg-gradient-to-br from-purple-400 to-gray-300 block absolute left-0 right-0 sm:w-[90%] md:w-fit mx-auto bottom-4 sm:px-[10px] sm:py-[4px] md:px-4 md:py-2 font-bold lg:min-w-[150px] sm:text-[11px] md:text-[12px] lg:text-[15px] text-center" href="#">معالجات الشعر</a>
                        <img class="w-full h-full object-top object-cover rounded-[20px] block" src="{{ url('images/hair.png') }}" alt="">
                    </div>
                    <div class="w-full h-full relative col-span-2">
                        <a class="bg-gradient-to-br from-purple-400 to-gray-300 block absolute left-0 right-0 w-fit mx-auto bottom-4 sm:px-[10px] sm:py-[4px] md:px-4 md:py-2 font-bold lg:min-w-[150px] sm:text-[11px] md:text-[12px] lg:text-[15px] text-center" href="#">حمام مغربي</a>
                        <img class="w-full h-full object-cover rounded-[20px] block" src="{{ url('images/hamam.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            {{-- <div class="flex">
                <div class="w-[200px] h-[200px] relative">
                    <a class="bg-gradient-to-br from-purple-400 to-gray-300 block absolute left-0 right-0 w-fit mx-auto bottom-4 sm:px-[10px] sm:py-[4px] md:px-4 md:py-2 font-bold lg:min-w-[150px] sm:text-[11px] md:text-[12px] lg:text-[15px] text-center" href="#">صبغات الشعر</a>
                    <img class="block rounded-[20px] object-cover object-right-top w-full h-full" src="{{ url('images/color.jpg') }}" alt="">
                </div>

            </div> --}}
            <div class="w-[95%] mx-auto pt-[30px] sm:block md:hidden">
                <proservices />
            </div>
        </section>
    
        <section class="w-full sm:py-[40px] md:py-[70px]">
            <div class="w-full flex gap-x-6 items-center justify-between">
                <div class="w-full h-[10px] bg-[#a288a6]"></div>
                <h1 class="sm:min-w-[160px] md:min-w-[200px] text-center text-black font-bold sm:text-[18px] md:text-[22px] xl:text-[25px]">العناية بالشعر</h1>
                <div class="w-full h-[10px] bg-[#a288a6]"></div>
            </div>
            <p class="text-center sm:text-[14px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-[#852294] font-[500] sm:mt-[13px] md:mt-[15px] lg:mt-[20px] xl:mt-[25px]">تألقي بشعر صحي</p>
            <div class="mt-[60px]">
                <haircare />
            </div>
        </section>

        <section class="w-full sm:py-[40px] md:py-[70px]">
            <div class="w-full flex gap-x-6 items-center justify-between">
                <div class="w-full h-[10px] bg-[#a288a6]"></div>
                <h1 class="sm:min-w-[160px] md:min-w-[200px] text-center text-black font-bold lg:text-[22px] xl:text-[25px]">خدماتنا المميزة</h1>
                <div class="w-full h-[10px] bg-[#a288a6]"></div>
            </div>
            <p class="text-center md:text-[14px] lg:text-[16px] xl:text-[18px] text-[#852294] font-[500] md:mt-[15px] lg:mt-[20px] xl:mt-[25px]">تألقي بشعر صحي</p>
            <div class="mt-[60px]">
                <haircare />
            </div>
        </section>

        <section class="w-full sm:py-[40px] md:py-[70px]">
            <div class="w-full flex gap-x-6 items-center justify-between">
                <div class="w-full h-[10px] bg-[#a288a6]"></div>
                <h1 class="sm:min-w-[160px] md:min-w-[200px] text-center text-black font-bold lg:text-[22px] xl:text-[25px]">التصميم الداخلي</h1>
                <div class="w-full h-[10px] bg-[#a288a6]"></div>
            </div>
            <p class="text-center lg:text-[16px] xl:text-[18px] text-[#852294] font-[500] lg:mt-[20px] xl:mt-[25px]">تألقي بشعر صحي</p>
            <div class="mt-[60px]">
                <interiordesign />
            </div>
        </section>

        <section class="w-full sm:py-[40px] md:py-[70px] md:flex items-center">
            <div class="w-full sm:px-[20px] md:px-[60px]">
                <h1 class="text-right font-[600] sm:text-[20px] md:text-[25px]">من نحن ؟</h1>
                <p class="mt-4 sm:text-[14px] md:text-[16px] md:ml-auto md:max-w-[600px]" dir="rtl">
                    مرحبًا بكم في Moon High، حيث يلتقي ما هو استثنائي. ملاذ الجمال لدينا يدعوك إلى عالم من السحر والهدوء. دع الحرفيين المهرة لدينا ينحتون أسلوبك، ويعززون جاذبيتك الطبيعية. انغمس في سحر Moon High، حيث تمثل كل زيارة احتفالًا كونيًا بإشراقك الفريد. اكتشفي جمالك وأضيئي روحك - في Moon High، نتجاوز العاديين إلى غير العاديين.
                </p>
            </div>
            <div class="w-fit mx-auto flex items-center sm:mt-6 md:mt-0">
                <div class="sm:w-[180px] sm:h-[200px] md:w-[200px] md:h-[300px] lg:w-[250px] lg:h-[350px] xl:w-[300px] xl:h-[400px] mr-[-100px]">
                    <img class="w-full h-full object-cover z-[10]" src="https://images.unsplash.com/photo-1498843053639-170ff2122f35?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                <div class="sm:w-[200px] sm:h-[300px] md:w-[200px] md:h-[400px] lg:w-[250px] lg:h-[450px] xl:w-[300px] xl:h-[500px] bg-gradient-to-br from-purple-400 to-gray-300 z-[-1]"></div>
            </div>
        </section>

        <section class="w-full sm:pb-[40px] md:pb-[70px] flex items-center justify-between gap-x-[20px] px-[20px]" dir="rtl">
            <features />
        </section>

        <section class="w-full sm:py-[40px] md:py-[70px] md:flex items-center">
            <div class="w-full sm:px-[20px] md:px-[60px]">
                <h1 class="text-right font-[600] sm:text-[20px] md:text-[25px]">أوقات العمل</h1>
                <p class="mt-4 sm:text-[14px] md:text-[16px] md:ml-auto md:max-w-[600px]" dir="rtl">
                    "احتضني الجمال وفق جدولك! ينتظرك Moon High يومياً من الساعة 2 ظهرًا حتى الساعة 10 مساءً. ادخلي في أي وقت يناسبك ودعينا نسلط الضوء على تألقك. تحولك الباهر على بُعد ساعات قليلة فقط. الجمال، مبسط في Moon High."
                </p>
            </div>
            <div class="w-fit mx-auto flex items-center sm:mt-6 md:mt-0">
                <div class="sm:w-[180px] sm:h-[200px] md:w-[200px] md:h-[300px] lg:w-[250px] lg:h-[350px] xl:w-[300px] xl:h-[400px] mr-[-100px]">
                    <img class="w-full h-full object-cover z-[10]" src="https://images.unsplash.com/photo-1534131270927-b0704a572b6f?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>
                <div class="sm:w-[200px] sm:h-[300px] md:w-[200px] md:h-[400px] lg:w-[250px] lg:h-[450px] xl:w-[300px] xl:h-[500px] bg-gradient-to-br from-purple-400 to-gray-300 z-[-1]"></div>
            </div>
        </section>

        <section class="w-[90%] mx-auto sm:py-[40px] md:py-[70px] md:flex">
            <div class="sm:w-full md:w-[50%] sm:px-[20px] md:px-[60px] flex flex-col justify-center">
                <h1 class="text-right font-[600] sm:text-[20px] md:text-[20px] lg:text-[25px]">موقع الصالون</h1>
                <p class="mt-4 md:ml-auto sm:text-[13px] md:text-[14px] lg:text-[16px] lg:max-w-[600px]" dir="rtl">
                    العنوان : جيزان - صامطه - بعد دوار الكتب - أول إشارة يسار - لفة ماك - ثاني مدخل - يمين
                    <a class="mt-2 block hover:text-purple-600" href="https://www.google.com/maps/search/?api=1&query=48.858844,2.294351" target="_blank">افتح في خرائط Google</a>
                </p>
            </div>
            <iframe class="sm:w-full md:w-[50%] sm:h-[300px] md:h-[400px] sm:mt-5 md:mt-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8986.027824373406!2d-9.229215541329095!3d32.29598438047775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac20d60758e5ad%3A0xd4a2a811199d4020!2sTajine!5e0!3m2!1sfr!2sma!4v1704761140808!5m2!1sfr!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
@endsection