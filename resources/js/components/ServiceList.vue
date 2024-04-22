<template>
    <div>
        <div class="flex gap-x-2 items-center mb-2">
            <h1 class="text-[14px] font-[500]">الاسم :</h1>
            <input v-model="title" type="text" class="max-w-[200px] border h-fit text-[14px] px-4 py-2 rounded-md bg-[#f0f0f041] mt-2 outline-none">
        </div>
        <div class="w-full font-poppins overflow-x-scroll noscroll">
            <table class="w-full min-w-[600px] border-separate border-spacing-y-4">
              <thead class="bg-[#f9f9f9]">
                  <tr class="*:text-right *:font-[600] text-[13px] *:py-2 *:px-4">
                      <th class="rounded-r-lg">#</th>
                      <th>الصورة</th>
                      <th>الاسم</th>
                      <th>الثمن</th>
                      <th>النوع</th>
                      <th class="rounded-l-lg">إعدادات</th>
                  </tr>
              </thead>
              <tbody>
                  <tr v-for="(item, index) in filteredData" :key="item.id" class="*:py-4 *:px-4 font-[500] text-[14px]">
                    <td class="font-[600]">{{ index+1 }}</td>
                    <td>
                        <img class="w-[100px] h-[100px] object-cover block rounded-md" :src="item.cover" alt="">
                    </td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.price }}</td>
                    <td>{{ item.type }}</td>
                    <td>
                        <div class="flex items-center">
                            <a :href="'/sales/create/'+item.id" class="text-[#262b45] block font-[600] cursor-pointer text-[13px] ml-1"><i class="fa-solid fa-percent ml-2"></i>تخفيض</a>
                            <a :href="'/products/edit/'+item.id" class="text-[#262b45] block font-[600] cursor-pointer text-[13px] ml-1"><i class="fa-solid fa-pen ml-2"></i>تعديل</a>
                            <div @click="deletec(item.id)" class="text-[#262b45] font-[600] cursor-pointer text-[13px] ml-1"><i class="fa-solid fa-trash ml-2"></i>مسح</div>
                        </div>
                    </td>
                  </tr>
              </tbody>
            </table>
        </div>
        <div class="flex items-center justify-between">
          <p class="text-[14px]">عرض {{ start+1 }}-{{ end > products.length ? products.length : end }} من {{ products.length }}</p>
          <div class="w-fit flex">
              <div @click="previous()" class="px-[13px] text-[14px] cursor-pointer py-1 rounded-md bg-[#f3f4f6] w-fit ml-2">
                  <i class="fa-solid fa-angle-right"></i>
              </div>
              <div @click="next()" class="px-[13px] text-[14px] cursor-pointer py-1 rounded-md bg-[#f3f4f6] w-fit">
                  <i class="fa-solid fa-angle-left"></i>
              </div>
          </div>
        </div>
    </div>
</template>

<script setup>
  import { ref, onMounted, computed } from 'vue'
  const props = defineProps(['data'])
  const products = ref([])
  const title = ref('')

  const start = ref(0)
  const perpage = ref(20)
  const end = ref(perpage.value)

  onMounted(() => {
    products.value = props.data
  })

  const filteredData = computed(() => {
    console.log(title.value)
    start.value = 0
    perpage.value = 20
    end.value = perpage.value
    return products.value.filter((item) => item.name.includes(title.value))
  })

  const next = () => {
    if(products.value.length > end.value){
        start.value += perpage.value 
        end.value += perpage.value 
    }
  }

  const previous = () => {
    if(start.value > 0){
        start.value -= perpage.value 
        end.value -= perpage.value 
    }
  }

  const deletec = (itemId) => {
      fetch(`/products/delete/${itemId}`, {
          method: 'DELETE',
          headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          },
      })
      .then(response => {
        window.location.reload()
      })
      .catch(error => {
          // console.error('Error:', error)
      });
  }

</script>

<style scoped>
    .noscroll::-webkit-scrollbar {
        width: 0px;
    }
</style>