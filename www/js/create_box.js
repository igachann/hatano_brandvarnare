$(function(){
    $('.btn').on('click', function(event){
        event.preventDefault();
        console.log('押された');
        $(this).toggleClass('active');
    });
});