$(document).ready(function () {
   $('.admin').parent().addClass('edit');
    $(document).on('mouseover','.edit',function(){
        $(this).css({
            'outline':'1px dotted red',
            'cursor':'pointer'
        });
    });
    $(document).on('mouseout','.edit',function(){
        $(this).css({
            'outline':'none',
            'cursor':'default'
        });
    });

    $(document).on('click','.edit',function(e){
        $(this).attr('href','javascript:');
        $(this).find('form').show();
        e.stopPropagation();




    });
    $(document).on('click','.close-form',function(e){
        $(this).parents('form').hide();
        e.stopPropagation();
        e.preventDefault();
    });
});
