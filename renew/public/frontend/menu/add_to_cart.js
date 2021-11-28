function actionAdd(event)
{
    // alert(123);
    event.preventDefault();
    let quantity = 1;
    let _token   = $('meta[name="csrf-token"]').attr('content');
    let that= $(this).data('url');
    // alert(that);
            $.ajax({
                type: 'GET',
                url: that,
                data: {
                    quantity: quantity,
                },
                success: function(data){
                   if(data.code==200){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'success',
                        title: 'Add product successfully'
                      })
                   }
                }
            });

}
$(function (){
    $(document).on('click','.add_to_cart', actionAdd);
    

});