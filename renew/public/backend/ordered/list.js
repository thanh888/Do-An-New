function actionsuccess(event)
{
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that= $(this);
    // alert(urlRequest);
    Swal.fire({
        title: 'Hoàn thành giao hàng',
        text: "Đơn hàng đã được giao",
        icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đúng'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function(data){
                   if(data.code==200){
                       that.parent().parent().remove();
                       Swal.fire(
                        'Đã Giao'
                      )
                   }
                }
            });
        }
      })
}
function actionDelete(event)
{
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that= $(this);
    // alert(urlRequest);
    Swal.fire({
        title: 'Bạn có chăc chắn?',
        text: "Đơn hàng đã bị hủy",
        icon: 'warning',
        // icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đúng'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function(data){
                   if(data.code==200){
                       that.parent().parent().remove();
                       Swal.fire(
                        'Đã hủy!',
                        'Đơn hàng bị hủy.'
                      )
                   }
                }
            });
        }
      })
}
$(function (){
    $(document).on('click','.action_delete', actionDelete);
    $(document).on('click','.success', actionsuccess);
    
});