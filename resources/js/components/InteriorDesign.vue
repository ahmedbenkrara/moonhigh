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
            <swiper-slide>
                <div class="md:w-[95%] lg:w-[90%] xl:w-[82%] mx-auto">
                    <div class="w-full sm:h-[190px] md:h-[250px] lg:h-[300px] flex gap-x-2">
                        <img class="w-[35%] block object-cover" src="http://127.0.0.1:8000/images/salon.png" alt="">
                        <div class="w-[65%] h-full bg-[#e1e3e2] flex items-center justify-center">
                            <h1 class="sm:text-[15px] md:text-[18px] lg:text-[20px] font-[600] text-[#4e5150]">التصميم الداخلي</h1>
                        </div>
                    </div>
                    <div class="w-full sm:h-[190px] md:h-[250px] lg:h-[300px] flex mt-2 gap-x-2">
                        <div class="w-[65%] h-full bg-[#e1e3e2] flex items-center justify-center">
                            <h1 class="sm:text-[15px] md:text-[18px] lg:text-[20px] font-[600] text-[#4e5150]">التصميم الداخلي</h1>
                        </div>
                        <img class="w-[35%] block object-cover" src="http://127.0.0.1:8000/images/salon.png" alt="">
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="md:w-[95%] lg:w-[90%] xl:w-[82%] mx-auto">
                    <div class="w-full sm:h-[190px] md:h-[250px] lg:h-[300px] flex gap-x-2">
                        <img class="w-[35%] block object-cover" src="http://127.0.0.1:8000/images/salon.png" alt="">
                        <div class="w-[65%] h-full bg-[#e1e3e2] flex items-center justify-center">
                            <h1 class="sm:text-[15px] md:text-[18px] lg:text-[20px] font-[600] text-[#4e5150]">التصميم الداخلي</h1>
                        </div>
                    </div>
                    <div class="w-full sm:h-[190px] md:h-[250px] lg:h-[300px] flex mt-2 gap-x-2">
                        <div class="w-[65%] h-full bg-[#e1e3e2] flex items-center justify-center">
                            <h1 class="sm:text-[15px] md:text-[18px] lg:text-[20px] font-[600] text-[#4e5150]">التصميم الداخلي</h1>
                        </div>
                        <img class="w-[35%] block object-cover" src="http://127.0.0.1:8000/images/salon.png" alt="">
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
};
</script>
  