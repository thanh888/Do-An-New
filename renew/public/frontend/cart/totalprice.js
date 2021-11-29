$(function(){
    $(document).on('click', '.quantity-right-plus', actionPlus);
    $(document).on('click', '.quantity-left-minus', actionMinus);
})
function actionPlus(e){
    e.preventDefault();
    let count= 0;
    $('#total_product').html().each(function(){
        count+=1;
    })
    alert(count);
    let price = parseInt($(this).parent().parent().parent().parent().find('#price').html()) ;
    let that =$(this).data('url');
   
    let quantity= $(this).parent().parent().find('#quantity').val();
    quantity =parseInt(quantity) + 1;
    $(this).parent().parent().find('#quantity').val(quantity);
    $(this).parent().parent().parent().parent().find('#total_product').html(quantity* price);
    $.ajax({
        type: 'GET',
        url: that,
        data: {
            quantity: quantity
        },
        success: function(data){
            if(data.code==200){
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 800,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  
                  Toast.fire({
                    icon: 'success',
                    title: 'Update product successfully'
                  })
            }
        }
    })
}
function actionMinus(e){
    e.preventDefault();
    var price = parseInt($('#price').html()) ;
    var totalproduct = $('#total_product');
    let that =$(this).data('url');

    let quantity= $(this).parent().parent().find('#quantity').val();
    if (parseInt(quantity) > 0) {
        quantity =parseInt(quantity) - 1;
        $(this).parent().parent().find('#quantity').val(quantity);
    }
    // $(this).parent().parent().parent().find('#total_product').html(quantity* price);
    // $('#total_product').html(quantity* price)
    $.ajax({
        type: 'GET',
        url: that,
        data: {
            quantity: quantity
        },
        success: function(data){
            if(data.code==200){

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 800,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  
                  Toast.fire({
                    icon: 'success',
                    title: 'Update product successfully'
                  })
            }
        }
    })
    // $('#total_product').value = $('#quantity').val() * price;
    
}