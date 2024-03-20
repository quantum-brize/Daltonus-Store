<script>

    load_variants()

    function load_variants(){

        $.ajax({
            url: "<?=base_url('/api/product/variant') ?>",
            type: 'GET',
            data: {
                p_id : '<?= $_GET['p_id'] ?>'
            },
            beforeSend: function(){

            },
            success: function(resp){
                console.log(resp)
                if(resp.status){
                    
                }
            },
            error: function(err){
                console.log(err)
            }

        })


    }

</script>