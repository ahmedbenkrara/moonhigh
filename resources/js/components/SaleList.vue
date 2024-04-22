<template>
    <div>
        <div class="w-full font-poppins overflow-x-scroll noscroll">
            <table class="w-full min-w-[600px] border-separate border-spacing-y-4">
              <thead class="bg-[#f9f9f9]">
                  <tr class="*:text-right *:font-[600] text-[13px] *:py-2 *:px-4">
                      <th class="rounded-r-lg">#</th>
                      <th>المنتج</th>
                      <th>الثمن الاصلي</th>
                      <th>الثمن بعد التخفيض</th>
                      <th class="rounded-l-lg">إعدادات</th>
                  </tr>
              </thead>
              <tbody>
                  <tr v-for="(item, index) in sales.slice(start, end)" :key="item.id" class="*:py-4 *:px-4 font-[500] text-[14px]">
                    <td class="font-[600]">{{ index+1 }}</td>
                    <td>{{ item.product.name }}</td>
                    <td>{{ item.product.price }}</td>
                    <td>{{ item.price }}</td>
                    <td>
                        <div class="flex items-center">
                            <div @click="deletec(item.id)" class="text-[#262b45] font-[600] cursor-pointer text-[13px] ml-1"><i class="fa-solid fa-trash ml-2"></i>مسح</div>
                        </div>
                    </td>
                  </tr>
              </tbody>
            </table>
        </div>
        <div class="flex items-center justify-between">
          <p class="text-[14px]">عرض {{ start+1 }}-{{ end > sales.length ? sales.length : end }} من {{ sales.length }}</p>
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
  import { ref, onMounted } from 'vue'
  const props = defineProps(['data'])
  const sales = ref([])

  const start = ref(0)
  const perpage = ref(20)
  const end = ref(perpage.value)

  onMounted(() => {
    sales.value = props.data
  })

  const next = () => {
    if(sales.value.length > end.value){
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
      fetch(`/sales/delete/${itemId}`, {
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
          // console.error('Error:', error);
      });
  }

</script>

<style scoped>
    .noscroll::-webkit-scrollbar {
        width: 0px;
    }
</style>