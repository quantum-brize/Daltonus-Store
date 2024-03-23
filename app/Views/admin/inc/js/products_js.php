<script>
    load_products();


    function formatDate(dateString) {
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        const date = new Date(dateString);
        const day = date.getDate();
        const month = months[date.getMonth()];
        const year = date.getFullYear();
        return `${day} ${month} ${year}`;
    }

    function redirect_single_product(product_id) {
        if (!$(event.target).hasClass('btn-number')) {
            // Perform redirect only if the click was not on a quantity button
            window.location.href = "<?= base_url('/admin/product?p_id=') ?>" + product_id;
        }
    }

    function updateStock(product_id,type){
        let stock = parseInt($(`#input-stock-${product_id}`).val())
        stock = type == 'add' ? stock + 1 : stock  - 1;

        $.ajax({
            url: "<?= base_url('/api/product/stock/update') ?>",
            type: "GET",
            data: {
                p_id : product_id,
                stock: stock
            },
            beforeSend: function(){
                $(`#btn-stock-add-${product_id}`).attr('disabled', true)
                $(`#btn-stock-sub-${product_id}`).attr('disabled', true)
            },
            success: function(resp){
                $(`#btn-stock-add-${product_id}`).attr('disabled', false)
                $(`#btn-stock-sub-${product_id}`).attr('disabled', false)
                if(resp.status){
                    $(`#input-stock-${product_id}`).val(stock)
                }
            },
            error: function(err){
                console.log(err)
                $(`#btn-stock-add-${product_id}`).attr('disabled', false)
                $(`#btn-stock-sub-${product_id}`).attr('disabled', false)
            }
        })

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
                        console.log(resp)
                        $.each(resp.data, function (index, product) {
                            let product_img = product.product_img.length > 0 ? product.product_img[0]['src'] : ''
                            html += `<tr onclick="redirect_single_product('${product.product_id}')">
                                            <td >
                                                <p>${product.name.slice(0, 15) + (product.name.length > 15 ? '...' : '')}</p>
                                                <img src="<?= base_url('public/uploads/product_images/') ?>${product_img}" alt="" class="product-img">
                                            </td>
                                            <td >
                                                ${product.category}
                                            </td>
                                            <td >
                                                ${product.publish_date == '' ? formatDate(product.created_at) : formatDate(product.publish_date)}
                                            </td>
                                            <td >
                                                ${product.base_price}
                                                ${product.base_discount}
                                            </td>
                                            <td >
                                                <sapn class="badge bg-success-subtle text-success text-uppercase">${product.visibility}</sapn>
                                            </td>
                                            <td >
                                                <div class="input-group stock_number_bx">
                                                    <span class="input-group-btn">
                                                        <button 
                                                            type="button" 
                                                            class="quantity-left-minus btn btn-danger btn-number"
                                                            data-type="minus" 
                                                            data-field=""
                                                            id="btn-stock-sub-${product.product_id}"
                                                            onClick="updateStock('${product.product_id}','sub')">
                                                            <span>-</span>
                                                        </button>
                                                    </span>
                                                    <input 
                                                        type="text" 
                                                        name="quantity" 
                                                        class="stock_number btn-number" 
                                                        value="${product.product_stock}" 
                                                        id="input-stock-${product.product_id}"
                                                        readonly>
                                                    <span class="input-group-btn">
                                                        <button 
                                                            type="button" 
                                                            class="quantity-right-plus btn btn-success btn-number"
                                                            data-type="plus" 
                                                            data-field=""
                                                            id="btn-stock-add-${product.product_id}"
                                                            onClick="updateStock('${product.product_id}','add')">
                                                            <span>+</span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td >
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