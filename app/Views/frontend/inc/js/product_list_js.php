<script>
     $(document).ready(function () {

        $.ajax({
            url: "<?= base_url('/api/product') ?>",
            type: "GET",
            success: function (resp) {
                
                if (resp.status) {
                    console.log(resp)
                    // $('#user_address').empty();  
                        $.each(resp.data, function(index, product) {
                            console.log(product)
                            if(index <= 8){
                                var original_price = product.base_discount ? (product.base_price - (product.base_price * product.base_discount / 100)).toFixed(2) : product.base_price.toFixed(2);
                                var base_price = product.base_discount ? product.base_discount : ""; 
                                var abc = `<h1>hello</h1>`
                                html = `<div class="col-xxl-3 col-lg-4 col-md-6">
                                            <div class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden">
                                                <a href="<?= base_url('product/details?id=')?>${product.product_id}">
                                                    <div class="bg-light bg-opacity-50 rounded py-4 position-relative"> <img
                                                            src="<?=base_url()?>public/uploads/product_images/${product.product_img[0].src}" alt=""
                                                            style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                                                        <div class="action vstack gap-2"> <button
                                                                class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action "
                                                                data-bs-toggle="button"> <span class="icon-on"><i
                                                                        class="ri-heart-line"></i></span> <span class="icon-off"><i
                                                                        class="ri-heart-fill"></i></span> </button> </div>
                                                        <div class="avatar-xs label">
                                                            <div class="avatar-title bg-danger rounded-circle fs-11">25%</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="pt-4">
                                                    <div>
                                                        <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                                            <li> <input type="radio" name="sizes1" id="product-color-12"> <label
                                                                    class="avatar-xxs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                                    for="product-color-12"></label> </li>
                                                            <li> <input type="radio" name="sizes1" id="product-color-13"> <label
                                                                    class="avatar-xxs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                                    for="product-color-13"></label> </li>
                                                            <li> <input type="radio" name="sizes1" id="product-color-14"> <label
                                                                    class="avatar-xxs btn btn-warning p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                                    for="product-color-14"></label> </li>
                                                            <li> <input type="radio" name="sizes1" id="product-color-15"> <label
                                                                    class="avatar-xxs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                                    for="product-color-15"></label> </li>
                                                        </ul> 
                                                        <a href="<?= base_url('product/details?id=')?>${product.product_id}">
                                                            <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">${product.name}</h6>
                                                        </a>
                                                        <div class="mt-2"> <span class="float-end">4.9 <i
                                                                    class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <h5 class="text-secondary mb-0">₹${original_price}<span
                                                                    class="text-muted fs-12"><del>₹${product.base_price}</del></span></h5>
                                                        </div>
                                                        <div class="tn mt-3"> <a href="javascript:void(0)" onclick="add_to_cart('${product.product_id}')"
                                                                class="btn btn-primary btn-hover w-100 add-btn"><i
                                                                    class="mdi mdi-cart me-1"></i> Add To Cart</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`
                                $('#product-grid').append(html);
                            }
                        })
                } else {
                    console.log("error")
                }
                
            },
            error: function (err) {
                console.log(err)
            },
        })
    })
    function add_to_cart(p_id) {
        
        $.ajax({
            url: "<?= base_url('/api/user/id') ?>",
            type: "GET",
            success: function (resp) {
                
                if (resp.status) {
                    console.log(resp.data) 
                    $.ajax({
                        url: "<?= base_url('/api/user/cart/add') ?>",
                        type: "POST",
                        data:{product_id:p_id, 
                            user_id:resp.data,
                            variation_id:'VAR00001',
                            qty:'1',
                            },
                        success: function (resp) {
                            
                            if (resp.status) {
                                Toastify({
                                text: resp.message.toUpperCase(),
                                duration: 3000,
                                position: "center",
                                stopOnFocus: true,
                                style: {
                                    background: resp.status ? 'darkgreen' : 'darkred',
                                },

                            }).showToast();
                            } else {
                                console.log(resp)
                                Toastify({
                                text: resp.message.toUpperCase(),
                                duration: 3000,
                                position: "center",
                                stopOnFocus: true,
                                style: {
                                    background: resp.status ? 'darkgreen' : 'darkred',
                                },

                            }).showToast();
                            }
                            
                        },
                        error: function (err) {
                            console.log(err)
                        },
                    })
                       
                } else {
                    console.log(resp)
                    var existingData = localStorage.getItem('cartData');
                    var dataArray = existingData ? JSON.parse(existingData) : [];
                    if (!Array.isArray(dataArray)) {
                    }
                    var data = {
                        product_id: p_id,
                        variation_id: 'VAR00001',
                        qty: '1'
                    };
                    dataArray.push(data);
                    
                    var jsonData = JSON.stringify(dataArray);
                    localStorage.setItem('cartData', jsonData);
                    

                    // Retrieve data from local storage
                    var storedData = localStorage.getItem('cartData');
                    var retrievedData = JSON.parse(storedData);
                    console.log(retrievedData); // This will log 'value1'

                    if(retrievedData != ""){
                        var message = 'Item added to cart'
                        Toastify({
                            text: message.toUpperCase(),
                            duration: 3000,
                            position: "center",
                            stopOnFocus: true,
                            style: {
                                background: 'darkgreen',
                            },

                        }).showToast();
                    }else{
                        var message = 'Item added Faild!'
                        Toastify({
                            text: message.toUpperCase(),
                            duration: 3000,
                            position: "center",
                            stopOnFocus: true,
                            style: {
                                background: 'darkred',
                            },

                        }).showToast(); 
                    }
                    
                }

                
            },
            error: function (err) {
                console.log(err)
            },
        })

    }
</script>