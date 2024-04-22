<template>
    <div class="w-[90%] mx-auto" dir="rtl">
        <!-- <button @click="goNext()" class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></button> -->
        <!-- <button @click="goPrev()" class="swiper-button-prev">Prev</button> -->
        <div class="w-fit flex gap-x-2 mb-[30px] mr-auto">
            <div @click="goPrev()" class="cursor-pointer hover:text-[#852294] hover:border-[#852294] flex items-center justify-center rounded-full bg-white text-[#6b7280] border-[1px] size-[38px]">
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <div @click="goNext()" class="cursor-pointer hover:text-[#852294] hover:border-[#852294] flex items-center justify-center rounded-full bg-white text-[#6b7280] border-[1px] size-[38px]">
                <i class="fa-solid fa-angle-left"></i>
            </div>
        </div>
        <swiper
        :slides-per-view="'auto'" 
        :space-between="24" 
        :modules="[Navigation]"
        @swiper="onSwiperInit"
        :direction="'horizontal'"
        :rtl="true"
        >
            <swiper-slide :style="'width:285.52px;'">
                <div class=" h-fit overflow-hidden rounded-[20px] pb-4 bg-gray-50 relative">
                    <img class="w-full mx-auto h-[240px] object-contain  " src="https://cdn.salla.sa/YrAPO/KkFgB4ovWyTuVpIzH5UD7eCTYSlAEfn1d9gNgI5Q.jpg" alt="">
                    <div class="px-4">
                        <h1 class="text-[13px] font-[600] pt-4 text-[#1f2937] text-right ml-auto">جلسة معالج كولاجين مع قص اطراف</h1>
                        <p class="text-[12px] font-[600] mt-2 text-[#1f2937]" dir="rtl">100 ر.س</p>
                        <a class="block w-full text-center px-4 py-2 font-[600] text-[#a288a6] hover:bg-[#a288a6] hover:text-white rounded-[10px] border-[1px] border-[#a288a6] text-[13px] mt-4" href="#">احجز الآن <i class="fa-solid fa-clock"></i></a>
                    </div>
                    <div class="cursor-pointer opacity-80 hover:opacity-100 flex items-center justify-center rounded-full bg-white absolute top-[14px] left-[20px] text-[#6b7280] border-[1px] size-[38px]">
                        <img class="size-[18px]" src="http://127.0.0.1:8000/icons/heart.png" alt="">
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide :style="'width:285.52px;'">
                <div class=" h-fit overflow-hidden rounded-[20px] pb-4 bg-gray-50 relative">
                    <img class="w-full mx-auto h-[240px] object-contain  " src="http://127.0.0.1:8000/images/makeup.png" alt="">
                    <div class="px-4">
                        <h1 class="text-[13px] font-[600] pt-4 text-[#1f2937] text-right ml-auto">جلسة معالج كولاجين مع قص اطراف</h1>
                        <p class="text-[12px] font-[600] mt-2 text-[#1f2937]" dir="rtl">100 ر.س</p>
                        <a class="block w-full text-center px-4 py-2 font-[600] text-[#a288a6] hover:bg-[#a288a6] hover:text-white rounded-[10px] border-[1px] border-[#a288a6] text-[13px] mt-4" href="#">احجز الآن <i class="fa-solid fa-clock"></i></a>
                    </div>
                    <div class="cursor-pointer opacity-80 hover:opacity-100 flex items-center justify-center rounded-full bg-white absolute top-[14px] left-[20px] text-[#6b7280] border-[1px] size-[38px]">
                        <img class="size-[18px]" src="http://127.0.0.1:8000/icons/heart.png" alt="">
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide :style="'width:285.52px;'">
                <div class=" h-fit overflow-hidden rounded-[20px] pb-4 bg-gray-50 relative">
                    <img class="w-full mx-auto h-[240px] object-contain  " src="http://127.0.0.1:8000/images/hair1.jpg" alt="">
                    <div class="px-4">
                        <h1 class="text-[13px] font-[600] pt-4 text-[#1f2937] text-right ml-auto">جلسة معالج كولاجين مع قص اطراف</h1>
                        <p class="text-[12px] font-[600] mt-2 text-[#1f2937]" dir="rtl">100 ر.س</p>
                        <a class="block w-full text-center px-4 py-2 font-[600] text-[#a288a6] hover:bg-[#a288a6] hover:text-white rounded-[10px] border-[1px] border-[#a288a6] text-[13px] mt-4" href="#">احجز الآن <i class="fa-solid fa-clock"></i></a>
                    </div>
                    <div class="cursor-pointer opacity-80 hover:opacity-100 flex items-center justify-center rounded-full bg-white absolute top-[14px] left-[20px] text-[#6b7280] border-[1px] size-[38px]">
                        <img class="size-[18px]" src="http://127.0.0.1:8000/icons/heart.png" alt="">
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide :style="'width:285.52px;'">
                <div class=" h-fit overflow-hidden rounded-[20px] pb-4 bg-gray-50 relative">
                    <img class="w-full mx-auto h-[240px] object-contain  " src="http://127.0.0.1:8000/images/color.jpg" alt="">
                    <div class="px-4">
                        <h1 class="text-[13px] font-[600] pt-4 text-[#1f2937] text-right ml-auto">جلسة معالج كولاجين مع قص اطراف</h1>
                        <p class="text-[12px] font-[600] mt-2 text-[#1f2937]" dir="rtl">100 ر.س</p>
                        <a class="block w-full text-center px-4 py-2 font-[600] text-[#a288a6] hover:bg-[#a288a6] hover:text-white rounded-[10px] border-[1px] border-[#a288a6] text-[13px] mt-4" href="#">احجز الآن <i class="fa-solid fa-clock"></i></a>
                    </div>
                    <div class="cursor-pointer opacity-80 hover:opacity-100 flex items-center justify-center rounded-full bg-white absolute top-[14px] left-[20px] text-[#6b7280] border-[1px] size-[38px]">
                        <img class="size-[18px]" src="http://127.0.0.1:8000/icons/heart.png" alt="">
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide :style="'width:285.52px;'">
                <div class=" h-fit overflow-hidden rounded-[20px] pb-4 bg-gray-50 relative">
                    <img class="w-full mx-auto h-[240px] object-contain  " src="https://cdn.salla.sa/YrAPO/KkFgB4ovWyTuVpIzH5UD7eCTYSlAEfn1d9gNgI5Q.jpg" alt="">
                    <div class="px-4">
                        <h1 class="text-[13px] font-[600] pt-4 text-[#1f2937] text-right ml-auto">جلسة معالج كولاجين مع قص اطراف</h1>
                        <p class="text-[12px] font-[600] mt-2 text-[#1f2937]" dir="rtl">100 ر.س</p>
                        <a class="block w-full text-center px-4 py-2 font-[600] text-[#a288a6] hover:bg-[#a288a6] hover:text-white rounded-[10px] border-[1px] border-[#a288a6] text-[13px] mt-4" href="#">احجز الآن <i class="fa-solid fa-clock"></i></a>
                    </div>
                    <div class="cursor-pointer opacity-80 hover:opacity-100 flex items-center justify-center rounded-full bg-white absolute top-[14px] left-[20px] text-[#6b7280] border-[1px] size-[38px]">
                        <img class="size-[18px]" src="http://127.0.0.1:8000/icons/heart.png" alt="">
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide :style="'width:285.52px;'">
                <div class=" h-fit overflow-hidden rounded-[20px] pb-4 bg-gray-50 relative">
                    <img class="w-full mx-auto h-[240px] object-contain  " src="http://127.0.0.1:8000/images/makeup.png" alt="">
                    <div class="px-4">
                        <h1 class="text-[13px] font-[600] pt-4 text-[#1f2937] text-right ml-auto">جلسة معالج كولاجين مع قص اطراف</h1>
                        <p class="text-[12px] font-[600] mt-2 text-[#1f2937]" dir="rtl">100 ر.س</p>
                        <a class="block w-full text-center px-4 py-2 font-[600] text-[#a288a6] hover:bg-[#a288a6] hover:text-white rounded-[10px] border-[1px] border-[#a288a6] text-[13px] mt-4" href="#">احجز الآن <i class="fa-solid fa-clock"></i></a>
                    </div>
                    <div class="cursor-pointer opacity-80 hover:opacity-100 flex items-center justify-center rounded-full bg-white absolute top-[14px] left-[20px] text-[#6b7280] border-[1px] size-[38px]">
                        <img class="size-[18px]" src="http://127.0.0.1:8000/icons/heart.png" alt="">
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide :style="'width:285.52px;'">
                <div class=" h-fit overflow-hidden rounded-[20px] pb-4 bg-gray-50 relative">
                    <img class="w-full mx-auto h-[240px] object-contain  " src="http://127.0.0.1:8000/images/hair1.jpg" alt="">
                    <div class="px-4">
                        <h1 class="text-[13px] font-[600] pt-4 text-[#1f2937] text-right ml-auto">جلسة معالج كولاجين مع قص اطراف</h1>
                        <p class="text-[12px] font-[600] mt-2 text-[#1f2937]" dir="rtl">100 ر.س</p>
                        <a class="block w-full text-center px-4 py-2 font-[600] text-[#a288a6] hover:bg-[#a288a6] hover:text-white rounded-[10px] border-[1px] border-[#a288a6] text-[13px] mt-4" href="#">احجز الآن <i class="fa-solid fa-clock"></i></a>
                    </div>
                    <div class="cursor-pointer opacity-80 hover:opacity-100 flex items-center justify-center rounded-full bg-white absolute top-[14px] left-[20px] text-[#6b7280] border-[1px] size-[38px]">
                        <img class="size-[18px]" src="http://127.0.0.1:8000/icons/heart.png" alt="">
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide :style="'width:285.52px;'">
                <div class=" h-fit overflow-hidden rounded-[20px] pb-4 bg-gray-50 relative">
                    <img class="w-full mx-auto h-[240px] object-contain  " src="http://127.0.0.1:8000/images/color.jpg" alt="">
                    <div class="px-4">
                        <h1 class="text-[13px] font-[600] pt-4 text-[#1f2937] text-right ml-auto">جلسة معالج كولاجين مع قص اطراف</h1>
                        <p class="text-[12px] font-[600] mt-2 text-[#1f2937]" dir="rtl">100 ر.س</p>
                        <a class="block w-full text-center px-4 py-2 font-[600] text-[#a288a6] hover:bg-[#a288a6] hover:text-white rounded-[10px] border-[1px] border-[#a288a6] text-[13px] mt-4" href="#">احجز الآن <i class="fa-solid fa-clock"></i></a>
                    </div>
                    <div class="cursor-pointer opacity-80 hover:opacity-100 flex items-center justify-center rounded-full bg-white absolute top-[14px] left-[20px] text-[#6b7280] border-[1px] size-[38px]">
                        <img class="size-[18px]" src="http://127.0.0.1:8000/icons/heart.png" alt="">
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide :style="'width:285.52px;'">
                <div class="h-fit overflow-hidden rounded-[20px] pb-4 bg-gray-50 relative">
                    <img class="w-full mx-auto h-[240px] object-contain  " src="http://127.0.0.1:8000/images/color.jpg" alt="">
                    <div class="px-4">
                        <h1 class="text-[13px] font-[600] pt-4 text-[#1f2937] text-right ml-auto">جلسة معالج كولاجين مع قص اطراف</h1>
                        <p class="text-[12px] font-[600] mt-2 text-[#1f2937]" dir="rtl">100 ر.س</p>
                        <a class="block w-full text-center px-4 py-2 font-[600] text-[#a288a6] hover:bg-[#a288a6] hover:text-white rounded-[10px] border-[1px] border-[#a288a6] text-[13px] mt-4" href="#">احجز الآن <i class="fa-solid fa-clock"></i></a>
                    </div>
                    <div class="absolute rounded-[20px] bg-white w-full h-full flex items-center justify-center left-0 top-0">
                        <a href="" class="text-[#884d63] text-[16px]">... عرض المزيد</a>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
  </template>
  
<script setup>
import { ref } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import { Navigation  } from 'swiper/modules';

const swiperInstance = ref(null);

const goNext = () => {
  if (swiperInstance.value) {
    swiperInstance.value.slideNext();
  }
};

const goPrev = () => {
  if (swiperInstance.value) {
    swiperInstance.value.slidePrev();
  }
};

const onSwiperInit = (swiper) => {
  swiperInstance.value = swiper
//   swiperInstance.value.direction = 'rtl'
};

const services = ref([
    {
        icon: 'fa-solid fa-laptop',
        title: 'Web Development',
        description: 'Crafting engaging websites that captivate your audience.'
    },
    {
        icon: 'fa-solid fa-desktop',
        title: 'Software Development',
        description: 'Powering your vision with scalable software solutions.'
    },
    {
        icon: 'fa-solid fa-mobile',
        title: 'Mobile Development',
        description: 'Seamless mobile apps for a lasting impression.'
    },
    {
        icon: 'fa-solid fa-database',
        title: 'Data Cleaning & Modeling',
        description: 'Expert data shaping for sharper insights.'
    },
    {
        icon: 'fa-solid fa-chart-line',
        title: 'Power BI / Tableau Dashboards',
        description: 'Visualize data, transform insights.'
    },
    {
        icon: 'fa-solid fa-pen-nib',
        title: 'UX / UI Design',
        description: 'Immersive design for exceptional user experiences.'
    },
    {
        icon: 'fa-solid fa-paintbrush',
        title: 'Graphic Design',
        description: 'Elevating brands with stunning visuals.'
    },
    {
        icon: 'fa-solid fa-bullhorn',
        title: 'Search Engine Optimization (SEO)',
        description: 'Boost online presence and climb search ranks.'
    },
    {
        icon: 'fa-solid fa-building',
        title: 'StartupStarter Kit',
        description: 'Your all-in-one solution to launch and scale your business with confidence.'
    },
])

</script>
  
<style scoped>
    .shad{
        margin: 0 20px;
        height: 242px;
    }

    .shad:hover{
        background: linear-gradient(135deg, #673ab785 18.23%, #673ab7 76.95%);
    }
    
    .shad:hover :where(h1,p){
        color: white;
    }

    .shad:hover :where(div){
        color: #673ab7; 
        background: white;
    }
</style>
  