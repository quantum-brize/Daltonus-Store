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
                                var original_price = product.base_discount ? product.base_price - (product.base_price * product.base_discount / 100) : product.base_price;
                                var base_price = product.base_discount ? product.base_discount : ""; 
                                html = `<div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller hot arrival" data-category="hot arrival">
                                            <div class="card overflow-hidden">
                                                <a href="<?= base_url('product/details?id=')?>${product.product_id}">
                                                    <div class="bg-warning-subtle rounded-top py-4">
                                                        <div class="gallery-product">
                                                            <img src="<?=base_url()?>public/uploads/product_images/${product.product_img[0].src}" alt="" style="max-height: 215px; max-width: 100%" class="mx-auto d-block" />
                                                        </div>
                                                        <p class="fs-11 fw-medium badge bg-primary py-2 px-3 product-lable mb-0"> Best Arrival </p>
                                                        <div class="gallery-product-actions">
                                                            <div class="mb-2">
                                                                <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                                                    <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                                                    <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                                                </button>
                                                            </div>

                                                            <div>
                                                                <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                                                    <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                                                    <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="product-btn px-3">
                                                            <a href="shop-cart.html" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="card-body">
                                                    <div>
                                                        <a href="<?= base_url('product/details')?>">
                                                            <h6 class="fs-15 lh-base text-truncate mb-0">
                                                               ${product.name}
                                                            </h6>
                                                        </a>
                                                        <div class="mt-3">
                                                            <span class="float-end">4.9
                                                                <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <h5 class="mb-0">
                                                            ₹${original_price}
                                                                <span class="text-muted fs-12"><del>₹${product.base_price}</del></span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`
                                $('#all_products').append(html);
                            }
                        })
                } else {
                    console.log(resp)
                }
                
            },
            error: function (err) {
                console.log(err)
            },
        })
    })
</script>