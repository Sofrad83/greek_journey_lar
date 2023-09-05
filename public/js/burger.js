$(document).ready(function(){
    $(document).on('click', '.sidebarBtn', function(e){
        $('.sidebar').toggleClass('active')
        $('.sidebarBtn').toggleClass('toggle')
    })
})