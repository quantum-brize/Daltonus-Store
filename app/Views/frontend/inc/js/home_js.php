<script>
    $(document).ready(function () {
        $.ajax({
            url: "<?= base_url('/api/product') ?>",
            type: "GET",
            success: function (resp) {

                if (resp.status) {
                    console.log(resp.data)
                    // $('#user_address').empty();  
                    $.each(resp.data, function (index, product) {
                        // console.log(product)
                        if (index <= 8) {
                            var original_price = product.base_discount ? (product.base_price - (product.base_price * product.base_discount / 100)).toFixed(2) : product.base_price.toFixed(2);
                            var base_price = product.base_discount ? product.base_discount : "";
                            html = `<div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller hot arrival" data-category="hot arrival">
                                            <div class="card overflow-hidden">
                                                <a href="<?= base_url('product/details?id=') ?>${product.product_id}">
                                                    <div class="bg-warning-subtle rounded-top">
                                                        <div class="gallery-product">
                                                            <img src="<?= base_url() ?>public/uploads/product_images/${product.product_img.length > 0 ? product.product_img[0].src : ''}" alt="" style="max-height: 215px; max-width: 100%" class="mx-auto d-block" />
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
                                                            <a href="javascript:void(0);" onclick="add_to_cart('${product.product_id}')" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="card-body">
                                                    <div>
                                                        <a href="<?= base_url('product/details?id=') ?>${product.product_id}">
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


        load_banners()

    })

    // Function to determine if the image is light or dark
    function isImageLight(imageUrl, threshold = 128) {
        return new Promise((resolve, reject) => {
            let img = new Image();
            img.crossOrigin = 'Anonymous';
            img.src = imageUrl;
            img.onload = function() {
                let canvas = document.createElement('canvas');
                let ctx = canvas.getContext('2d');
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);
                let imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                let brightnessSum = 0;
                for (let i = 0; i < imageData.data.length; i += 4) {
                    let r = imageData.data[i];
                    let g = imageData.data[i + 1];
                    let b = imageData.data[i + 2];
                    let brightness = (r + g + b) / 3;
                    brightnessSum += brightness;
                }
                let averageBrightness = brightnessSum / (imageData.data.length / 4);
                resolve(averageBrightness >= threshold);
            };
            img.onerror = function() {
                reject('Error loading image');
            };
        });
    }

    function load_banners() {
        $.ajax({
            url: "<?= base_url('/api/banners') ?>",
            type: "GET",
            beforeSend: function () {
            },
            success: function (resp) {
                if (resp.status) {
                    $.each(resp.data, function(index, banner) {
                        let fontColor = '';
                        isImageLight(`<?= base_url('public/uploads/banner_images/') ?>${banner.img}`)
                            .then(isLight => {
                                if (isLight) {
                                    // console.log('Image is light');
                                    fontColor = 'black';
                                } else {
                                    // console.log('Image is dark');
                                    fontColor = 'light';
                                }
                                console.log(fontColor);
                            
                                isActive = index === 0 ? 'active' : ''
                                console.log(isActive);
                                html = `<div class="carousel-item ${isActive}">
                                            <div class="ecommerce-home bg-danger-subtle custom-carousel-height" style="
                                            background-image: url('<?= base_url('public/uploads/banner_images/') ?>${banner.img}'); height: 300px;">
                                                <div class="container">
                                                    <div class="row justify-content-end">
                                                        <div class="col-lg-7">
                                                            <div class="text-sm-end">
                                                                <p class="fs-15 fw-semibold text-uppercase text-${fontColor}">
                                                                    <i class="ri-flashlight-fill text-primary align-bottom me-1"></i>
                                                                    In this season, find the best
                                                                </p>
                                                                <h1 class="display-4 fw-bold lh-base text-capitalize mb-3 text-${fontColor}">
                                                                    ${banner.title}
                                                                </h1>
                                                                <p class="fs-20 mb-4 text-${fontColor}">${banner.description}</p>
                                                                <a href="${banner.link}" class="btn btn-danger btn-hover">
                                                                    <i class="ph-shopping-cart align-middle me-1"></i> Shop
                                                                    Now
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`
                                $('#banner_img').append(html);
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    })
                }else{
                }

            },
            error: function (err) {
                console.log(err)
            },
            complete: function () {
               
            }
        })
    }

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
                        data: {
                            product_id: p_id,
                            user_id: resp.data,
                            variation_id: 'VAR00001',
                            qty: '1',
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
                        dataArray = []; // Initialize as empty array if not already an array
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

                    if (retrievedData != "") {
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
                    } else {
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