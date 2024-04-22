<template>
    <div class="w-full mx-auto" dir="rtl">
        <swiper
        :slides-per-view="'auto'" 
        :space-between="24" 
        :modules="[Navigation]"
        :direction="'horizontal'"
        :rtl="true"
        >
            <swiper-slide :style="'width: 200px'">
                <div class="w-[200px] h-[200px] relative">
                    <a class="bg-gradient-to-br from-purple-400 to-gray-300 block absolute left-0 right-0 w-fit mx-auto bottom-4 sm:px-[10px] sm:py-[4px] md:px-4 md:py-2 font-bold lg:min-w-[150px] sm:text-[11px] md:text-[12px] lg:text-[15px] text-center" href="#">صبغات الشعر</a>
                    <img class="block rounded-[20px] object-cover object-right-top w-full h-full" src="http://127.0.0.1:8000/images/color.jpg" alt="">
                </div>
            </swiper-slide>
            <swiper-slide :style="'width: 200px'">
                <div class="w-[200px] h-[200px] relative">
                    <a class="bg-gradient-to-br from-purple-400 to-gray-300 block absolute left-0 right-0 w-fit mx-auto bottom-4 sm:px-[10px] sm:py-[4px] md:px-4 md:py-2 font-bold lg:min-w-[150px] sm:text-[11px] md:text-[12px] lg:text-[15px] text-center" href="#">مكياج</a>
                    <img class="block rounded-[20px] object-cover object-right-top w-full h-full" src="http://127.0.0.1:8000/images/makeup.png" alt="">
                </div>
            </swiper-slide>
            <swiper-slide :style="'width: 200px'">
                <div class="w-[200px] h-[200px] relative">
                    <a class="bg-gradient-to-br from-purple-400 to-gray-300 block absolute left-0 right-0 w-fit mx-auto bottom-4 sm:px-[10px] sm:py-[4px] md:px-4 md:py-2 font-bold lg:min-w-[150px] sm:text-[11px] md:text-[12px] lg:text-[15px] text-center" href="#">معالجات الشعر</a>
                    <img class="block rounded-[20px] object-cover object-right-top w-full h-full" src="http://127.0.0.1:8000/images/hair.png" alt="">
                </div>
            </swiper-slide>
            <swiper-slide :style="'width: 200px'">
                <div class="w-[200px] h-[200px] relative">
                    <a class="bg-gradient-to-br from-purple-400 to-gray-300 block absolute left-0 right-0 w-fit mx-auto bottom-4 sm:px-[10px] sm:py-[4px] md:px-4 md:py-2 font-bold lg:min-w-[150px] sm:text-[11px] md:text-[12px] lg:text-[15px] text-center" href="#">حمام مغربي</a>
                    <img class="block rounded-[20px] object-cover object-right-top w-full h-full" src="http://127.0.0.1:8000/images/hamam.jpg" alt="">
                </div>
            </swiper-slide>
            
        </swiper>
    </div>
</template>
  
<script setup>
import { ref } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import { Navigation  } from 'swiper/modules'
</script>