<script>
    $('#product_add_btn').on('click',function(){
        let title = $('#product-title-input').val();

        if(title.length < 1){
            $('#alert').html(`<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Please Add Product Title
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`)

        }

    })

</script>