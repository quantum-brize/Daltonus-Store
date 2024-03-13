<script>
    load_products()

    $(document).ready( function () {
        $('#table-product-list-all').DataTable();
    });
    function load_products() {
        $.ajax({
            url: "<?= base_url('/api/product') ?>",
            type: "GET",
            beforeSend: function () {

            },
            success: function (resp) {
                if (resp.status) {
                    if (resp.data.length > 0) {
                        $.each(resp.data, function (index, product) {
                            console.log(product)
                        })
                    }
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