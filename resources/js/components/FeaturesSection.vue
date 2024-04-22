<template>
    <div class="w-full mx-auto" dir="rtl">
        <swiper
        :slides-per-view="'auto'" 
        :space-between="24" 
        :modules="[Navigation]"
        @swiper="onSwiperInit"
        :direction="'horizontal'"
        :rtl="true"
        >
            <swiper-slide :style="{ width: slideWidth }">
                <div class="bg-[#f9fafb] px-10 py-6 rounded-[3px] h-fit min-h-[200px] flex flex-col items-center justify-center">
                    <div class="text-white bg-[#a288a6] rounded-full flex items-center justify-center text-[25px] w-[60px] h-[60px] mb-4">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h1 class="text-[14px] font-[600] text-center">منتجات عالية الجودة</h1>
                    <p class="text-center text-[14px] font-[300] mt-2">
                        في صالون تيفاني نقوم باستخدام أجود المنتجات
                    </p>
                </div>
            </swiper-slide>
            <swiper-slide :style="{ width: slideWidth }">
                <div class="bg-[#f9fafb] px-10 py-6 rounded-[3px] h-fit min-h-[200px] flex flex-col items-center justify-center">
                    <div class="text-white bg-[#a288a6] rounded-full flex items-center justify-center text-[25px] w-[60px] h-[60px] mb-4">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    <h1 class="text-[14px] font-[600] text-center">أسعار مناسبة</h1>
                    <p class="text-center text-[14px] font-[300] mt-2">
                        جميع خدمات تيفاني في متناول أيدي الجميع ، لأنها بأسعار تنافسية
                    </p>
                </div>
            </swiper-slide>
            <swiper-slide :style="{ width: slideWidth }">
                <div class="bg-[#f9fafb] px-10 py-6 rounded-[3px] h-fit min-h-[200px] flex flex-col items-center justify-center">
                    <div class="text-white bg-[#a288a6] rounded-full flex items-center justify-center text-[25px] w-[60px] h-[60px] mb-4">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h1 class="text-[14px] font-[600] text-center">موظفين ذوي خبرة</h1>
                    <p class="text-center text-[14px] font-[300] mt-2">
                        لديهم العديد من الدورات وخبرات تزيد عن 10 سنين ، لتقديم أفضل تجربة للعميل
                    </p>
                </div>
            </swiper-slide>
        </swiper>
    </div>
  </template>
  
<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import { Navigation  } from 'swiper/modules'

const isSmallScreen = ref(false);
    const slideWidth = ref('420px');

    const handleResize = () => {
      isSmallScreen.value = window.innerWidth <= 768 && window.innerWidth >= 320;
      slideWidth.value = isSmallScreen.value ? '320px' : '420px';
    };

    onMounted(() => {
      handleResize();
      window.addEventListener('resize', handleResize);
    });

    onBeforeUnmount(() => {
      window.removeEventListener('resize', handleResize);
    });
</script>