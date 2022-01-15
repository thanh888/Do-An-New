$(function(){
    $(document).on('click', '.quantity-right-plus', actionPlus);
    $(document).on('click', '.quantity-left-minus', actionMinus);
    $(document).on('click', '.cart_delete', actiondelete);
})
function actiondelete(e){
    e.preventDefault();
    let urlRequest = $(this).data('url');
    let that= $(this);
    // alert(urlRequest);
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function(data){
                   if(data.code==200){
                       that.parent().parent().remove();
                       Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                   }
                }
            });

          
        }
      })
}
function actionPlus(e){
    e.preventDefault();
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
                //   $('#table_product').load('#table');
            }
        }
    })
}
function actionMinus(e){
    e.preventDefault();
    var totalproduct = $('#total_product');
    let that =$(this).data('url');
    let price = parseInt($(this).parent().parent().parent().parent().find('#price').html()) ;

    let quantity= $(this).parent().parent().find('#quantity').val();
    if (parseInt(quantity) > 0) {
        quantity =parseInt(quantity) - 1;
        $(this).parent().parent().find('#quantity').val(quantity);
        $(this).parent().parent().parent().parent().find('#total_product').html(quantity* price);
    }
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