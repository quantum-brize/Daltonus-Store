<script>
    let product_id = "";
    $(document).ready(function () {
        // Get the URL parameters
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const id = urlParams.get('id');

        $.ajax({
            url: "<?= base_url('/api/product') ?>",
            type: "GET",
            data: { p_id: id },
            success: function (resp) {
                
                if (resp.status) {
                    product_id = resp.data.product_id;
                    $('#product_name').text(resp.data.name)

                    var truncatedDescription = truncateText(resp.data.description, 150);
                    $('#product_description').html(truncatedDescription)
                    // Store the full description in a data attribute for later use
                    $('#product_description').data('full-description', resp.data.description);

                    var original_price = resp.data.base_discount ? (resp.data.base_price - (resp.data.base_price * (resp.data.base_discount / 100))).toFixed(2) : resp.data.base_price.toFixed(2);
                    var base_price = resp.data.base_discount ? resp.data.base_price : "";
                    var base_discount = resp.data.base_discount ? resp.data.base_discount : "";
                    $('#product_price').html('₹'+original_price  + `<span class="text-muted fs-14" id="base_price"><del>₹${base_price}</del></span> <span class="fs-14 ms-2 text-danger">${base_discount}% off</span>`)

                    $.each(resp.data.product_img, function(index, p_img) {
                        html1 = `<div class="swiper-slide">
                                    <div class="product-thumb rounded cursor-pointer">
                                        <img src="<?= base_url()?>public/uploads/product_images/${p_img.src}" alt="" class="img-fluid">
                                    </div>
                                </div>`
                        html2 = `<div class="swiper-slide ">
                                    <img src="<?= base_url()?>public/uploads/product_images/${p_img.src}" alt="" class="img-fluid">
                                </div>`
                        $('#side_image').append(html1);
                        $('#main_image').append(html2);
                    })
                    
                } else {
                    console.log(resp)
                    
                }
                // console.log(resp)
            },
            error: function (err) {
                console.log(err)
            },
        })
        

        function truncateText(text, maxLength) {
            if (text.length > maxLength) {
                return text.substring(0, maxLength) + '... <a href="javascript:void(0);" class="link-info" id="read_more_link">Read More</a>';
            } else {
                return text;
            }
        }
        $('#product_description').on('click', '#read_more_link', function(e) {
            e.preventDefault();
            var $description = $('#product_description');
            var fullDescription = $description.data('full-description');
            if ($(this).text() === 'Read More') {
                    $description.html(fullDescription + ' <a href="javascript:void(0);" id="show_less_link">Show Less</a>');
                } else {
                    $description.html(truncatedDescription + ' <a href="javascript:void(0);" id="read_more_link">Read More</a>');
                }
        });
        $('#product_description').on('click', '#show_less_link', function(e) {
                e.preventDefault();
                var $description = $('#product_description');
                var truncatedDescription = truncateText($description.data('full-description'), 150); // Adjust the character count as needed
                
                $description.html(truncatedDescription);
            });

            
    })
    function add_to_cart() {
        
        $.ajax({
            url: "<?= base_url('/api/user/id') ?>",
            type: "GET",
            success: function (resp) {
                
                if (resp.status) {
                    console.log(resp.data) 
                    $.ajax({
                        url: "<?= base_url('/api/user/cart/add') ?>",
                        type: "POST",
                        data:{product_id:product_id, 
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
                        dataArray = []; // Initialize as empty array if not already an array
                    }
                    var data = {
                        product_id: product_id,
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