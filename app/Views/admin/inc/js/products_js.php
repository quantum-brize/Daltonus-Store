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
                    if (resp.data.length > 0) {
                        let html = ``

                        $.each(resp.data, function (index, product) {
                            html += `<tr>
                                            <td>
                                                <img src="" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Litecoin (LTC)</a>
                                            </td>
                                            <td>
                                                ${product.category}
                                            </td>
                                            <td>
                                                ${product.publish_date == '' ? product.created_at : product.publish_date}
                                            </td>
                                            <td>
                                                ${product.visibility}
                                            </td>
                                            <td>
                                                ${product.product_stock}
                                            </td>
                                            <td>
                                                ${product.base_price}
                                            </td>
                                            <td>    
                                                ${product.base_discount}
                                            </td>
                                            <td>
                                                ${product.vendor}
                                            </td>
                                            
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="#!" class="dropdown-item"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
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