<script>
    load_products()
    function load_products() {
        $.ajax({
            url: "<?= base_url('/api/product') ?>",
            type: "GET",
            beforeSend: function () {

            },
            success: function (resp) {
                if (resp.status) {
                    if(resp.data.length > 0){
                        $.each(resp.data, function(index,product){
                            console.log(product)
                        })
                    }
                    $('#table-product-list-all').html()
                }

            },
            error: function (err) {
                console.log(err)
            },
            complete: function () {

            }
        })
    }



</script>