$(document).ready(function(){
    const list = [
        {
            title: 'المنتجات',
            items: [
                'منتجات الشعر',
                'منتجات البشرة',
            ]
        }
    ]

    $('.itemdev').click(function(){
        $('#submenu').toggleClass('hidden')

        const find = list.find(item => item.title == $(this).text().trim())
        $('#menutitle').text($(this).text().trim())
        $('#menuul').html(`
            <li class="block py-[18px] px-4 border-b"><a class="block" href="#">عرض الكل</a></li>
        `)
        find.items.forEach((item) => {
            $('#menuul').append(`
                <li class="block py-[18px] px-4 border-b"><a href="#">${item}</a></li>
            `)
        })
    })

    $('#subback').click(function(){
        $('#submenu').toggleClass('hidden')
    })

    $('#close').click(function(){
        $('#mainmenu').toggleClass('sm:hidden')
    })

    $('#open').click(function(){
        $('#mainmenu').toggleClass('sm:hidden')
    })

    $('#mainmenu').click(function(e){
        if(e.target == this){
            $(this).toggleClass('sm:hidden')
        }
    })
})