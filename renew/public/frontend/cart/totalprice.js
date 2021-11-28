$(function(){
    $(document).on('click', '.quantity-right-plus', actionPlus);
    $(document).on('click', '.quantity-left-minus', actionMinus);
})
function actionPlus(e){
    e.preventDefault();
    let quantity = parseInt($('#quantity').val()) ;
    var price = parseInt($('#price').html()) ;
    var totalproduct = $('#total_product');
    let that =$(this).data('url');
    quantity+=1;
    
    $.ajax({
        type: 'GET',
        url: that,
        data: {
            quantity: quantity,
        },
        success: function(data){

        }
    })
    // $('#quantity').val(quantity +1 );
    totalproduct = $('#quantity').val() * price;

    $('#total_product').val() = $('#quantity').val() * price;
}
function actionMinus(e){
    e.preventDefault();
    let quantity = parseInt($('#quantity').val()) ;
    var price = parseInt($('#price').html()) ;
    var totalproduct = $('#total_product');
    let that =$(this).data('url');
    // $('#quantity').val(quantity +1 );

    alert(quantity-1);

    if (quantity > 0) {
        $('#quantity').val(quantity - 1);
    }
    $(this).parent().find('#quantity').val(quantity-1);
    $('#total_product').value = $('#quantity').val() * price;
    
}