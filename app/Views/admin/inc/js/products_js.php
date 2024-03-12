<script>
    load_products()
    function load_products(){
        $.ajax({
            url: "<?= base_url('/api/product') ?>",
            type: "GET",
            beforeSend: function(){

            },
            success: function(resp){
                console.log(resp)
            },
            error: function(err){
                console.log(err)
            },
            complete: function(){

            }
        })
    }



</script>