<script>
    load_products()
    function formatDate(dateString) {
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        const date = new Date(dateString);
        const day = date.getDate();
        const month = months[date.getMonth()];
        const year = date.getFullYear();
        return `${day} ${month} ${year}`;
    }

    function redirect_single_product(product_id){
        window.location.href = "<?=base_url('/admin/product?p_id=')?>"+product_id;
    }


    function load_products() {
        $.ajax({
            url: "<?= base_url('/api/product') ?>",
            type: "GET",
            beforeSend: function () {

            },
            success: function (resp) {
                if (resp.status) {
                    if (resp.data.length > 0) {
                        $('#all_product_count').html(resp.data.length)
                        let html = ``

                        $.each(resp.data, function (index, product) {
                            let product_img = product.product_img.length > 0 ? product.product_img[0]['src'] : ''
                            html += `<tr onclick="redirect_single_product('${product.product_id}')">
                                            <td class="text-center">
                                                <p>${product.name.slice(0, 15) + (product.name.length > 15 ? '...' : '')}</p>
                                                <img src="<?= base_url('public/uploads/product_images/') ?>${product_img}" alt="" class="product-img">
                                            </td>
                                            <td class="text-center">
                                                ${product.category}
                                            </td>
                                            <td class="text-center">
                                                ${product.publish_date == '' ? formatDate(product.created_at) : formatDate(product.publish_date)}
                                            </td>
                                            <td class="text-center">
                                                ${product.base_price}
                                                ${product.base_discount}
                                            </td>
                                            <td class="text-center">
                                                <sapn class="badge bg-success-subtle text-success text-uppercase">${product.visibility}</sapn>
                                            </td>
                                            <td class="text-center">
                                                <sapn class="badge bg-danger-subtle text-danger text-uppercase">${product.product_stock}</sapn>
                                            </td>
                                            <td class="text-center">
                                                ${product.vendor}
                                            </td>
                                        </tr>`
                        })
                        $('#table-product-list-all-body').html(html)
                        $('#table-product-list-all').DataTable();
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