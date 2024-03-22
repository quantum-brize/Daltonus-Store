<script>
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
                    console.log(resp.data)
                    $('#product_name').text(resp.data.name)

                    var truncatedDescription = truncateText(resp.data.description, 150);
                    $('#product_description').html(truncatedDescription)
                    // Store the full description in a data attribute for later use
                    $('#product_description').data('full-description', resp.data.description);

                    var original_price = resp.data.base_discount ? resp.data.base_price-(resp.data.base_price * (resp.data.base_discount / 100)) : resp.data.base_price;
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
</script>