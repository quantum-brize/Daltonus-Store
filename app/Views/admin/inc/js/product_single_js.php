<script>
    $(document).ready(function () {
       
        get_product_data('<?= $_GET['p_id'] ?>');
     
        var product;

        function get_product_data(p_id) {
            $.ajax({
                url: "<?= base_url('/api/product') ?>",
                type: 'GET',
                data: {
                    p_id: p_id
                },
                beforeSend: function () { },
                success: function (resp) {
                    console.log(resp);
                    if (resp.status) {
                        product = resp.data;
                        let html = `<tr>
                                        <td>id</td>
                                        <td style="text-align: right" class="text-secondary">${product.product_id}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td style="text-align: right" class="text-secondary">${product.category}</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td style="text-align: right" class="text-secondary">${product.base_price}</td>
                                    </tr>
                                    <tr>
                                        <td>Discount</td>
                                        <td style="text-align: right" class="text-secondary">${product.base_discount}</td>
                                    </tr>
                                    <tr>
                                        <td>Final Price</td>
                                        <td style="text-align: right" class="text-secondary">${product.category}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Stock</td>
                                        <td style="text-align: right" class="text-secondary">${product.product_stock}</td>
                                    </tr>
                                    <tr>
                                        <td>Sold</td>
                                        <td style="text-align: right" class="text-secondary">${product.category}</td>
                                    </tr>`
                        $('#product_details').html(html);
                        load_variants();
                    }
                },
                error: function (err) {
                    console.log(err)
                }

            })
        }

        function load_variants() {
            $.ajax({
                url: "<?= base_url('/api/product/variant') ?>",
                type: 'GET',
                data: {
                    p_id: '<?= $_GET['p_id'] ?>'
                },
                beforeSend: function () {},
                success: function (resp) {
                    console.log(resp);
                    if (resp.status) {
                        let html = '';
                        $.each(resp.data, function (vIndex, vItem) {
                            html += `<tr>
                                    <td class="text-left">
                                        ${vItem.product_img.length > 0
                                    ?
                                    `<img src="<?= base_url('public/uploads/variant_images/') ?>${vItem.product_img[0].src}" alt="" class="product-img">`
                                    :
                                    `<img src="<?= base_url('public/uploads/product_images/') ?>${product.product_img[0].src}" alt="" class="product-img">`
                                }
                                    </td>
                                    <td class="text-left">
                                        size : ${vItem.size}<br>
                                        <div class="mt-1" style="background-color: ${vItem.color}; height: 20px; width: 40px;"></div>
                                    </td>
                                    <td class="text-left">${vItem.price}</td>
                                    <td class="text-left">${vItem.discount}</td>
                                    <td class="text-left">${vItem.discount}</td>
                                    <td class="text-left">
                                        <sapn class="badge bg-success-subtle text-success text-uppercase">${vItem.stock}</span>
                                    </td>
                                </tr>`;
                        });
                        $('#table-product-variant-body').html(html);
                        $('#table-product-variant').DataTable();
                    }
                },
                error: function (err) {
                    console.log(err)
                }

            });
        }
    });

</script>
