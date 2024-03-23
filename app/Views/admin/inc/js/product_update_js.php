<script>

    $(document).ready(function () {
        get_categories()
        get_product_data();
        var editor;

        let $fileInput = $("#file-input");
        let $imageContainer = $("#images");
        let $numOfFiles = $("#num-of-files");

        function preview() {
            $imageContainer.html("");
            $numOfFiles.text(`${$fileInput[0].files.length} Files Selected`);

            $.each($fileInput[0].files, function (index, file) {
                let reader = new FileReader();
                let $figure = $("<figure>");
                let $figCap = $("<figcaption>").text(file.name);
                $figure.append($figCap);
                reader.onload = function () {
                    let $img = $("<img>").attr("src", reader.result);
                    $figure.prepend($img);
                }
                $imageContainer.append($figure);
                reader.readAsDataURL(file);
            });
        }
        $fileInput.change(preview);

        ClassicEditor.create(document.querySelector("#ckeditor-classic")).then(function (createdEditor) {
            editor = createdEditor;
            editor.ui.view.editable.element.style.height = "200px";
        }).catch(function (error) {
            console.error(error);
        });



        function get_product_data() {
            $.ajax({
                url: "<?= base_url('/api/product') ?>",
                type: "GET",
                data: {
                    p_id: '<?= $_GET['p_id'] ?>'
                },
                beforeSend: function () { },
                success: function (resp) {
                    console.log(resp)
                    if (resp.status) {
                        let product = resp.data
                        $('#choices-category-input').val(product.category_id)
                        $('#product-title-input').val(product.name)
                        $('#product-id-input').val(product.product_id)
                        $('#product-item-id-input').val(product.product_item_id)
                        $('#product-meta-id-input').val(product.meta_id)
                        editor.setData(product.description)
                        $('#product-tags-input').val(product.tags)
                        $('#choices-publish-status-input').val(product.status)
                        $('#choices-publish-visibility-input').val(product.visibility)
                        $('#datepicker-publish-input').val(product.publish_date)
                        $('#manufacturer-name-input').val(product.manufacturer_name)
                        $('#manufacturer-brand-input').val(product.manufacturer_brand)
                        $('#product-price-input').val(product.base_price)
                        $('#product-discount-input').val(product.base_discount)
                        $('#meta-title-input').val(product.meta_title)
                        $('#meta-keywords-input').val(product.meta_keywords)
                        $('#meta-description-input').val(product.meta_description)
                    }
                },
                error: function (err) {
                    console.log(err)

                }
            })
        }

        $('#product_update_btn').on('click', function () {
            var formData = new FormData();

            formData.append('title', $('#product-title-input').val());
            formData.append('product_id', $('#product-id-input').val());
            formData.append('product_item_id', $('#product-item-id-input').val());
            formData.append('product_meta_id', $('#product-meta-id-input').val());
            formData.append('details', editor.getData());
            formData.append('user_id', '<?= $_SESSION[SES_ADMIN_USER_ID] ?>');
            formData.append('categoryId', $('#choices-category-input').val());
            formData.append('productTags', $('#product-tags-input').val());
            formData.append('status', $('#choices-publish-status-input').val());
            formData.append('visibility', $('#choices-publish-visibility-input').val());
            formData.append('publishDate', $('#datepicker-publish-input').val());
            formData.append('manufacturerName', $('#manufacturer-name-input').val());
            formData.append('manufacturerBrand', $('#manufacturer-brand-input').val());
            formData.append('price', $('#product-price-input').val());
            formData.append('discount', $('#product-discount-input').val());
            formData.append('metaTitle', $('#meta-title-input').val());
            formData.append('metaKeywords', $('#meta-keywords-input').val());
            formData.append('metaDescription', $('#meta-description-input').val());

            // $.each($('#file-input')[0].files, function (index, file) {
            //     formData.append('images[]', file);
            // });


            $.ajax({
                url: "<?= base_url('/api/product/update') ?>",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('#product_add_btn').html(`<div class="spinner-border" role="status"></div>`)
                    $('#product_add_btn').attr('disabled', true)

                },
                success: function (resp) {
                    let html = ''

                    if (resp.status) {
                        html += `<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                <i class="ri-checkbox-circle-fill label-icon"></i>${resp.message}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`
                    } else {
                        html += `<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
                                <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - ${resp.message}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`
                    }


                    $('#alert').html(html)
                    console.log(resp)
                },
                error: function (err) {
                    console.log(err)
                },
                complete: function () {
                    $('#product_add_btn').html(`submit`)
                    $('#product_add_btn').attr('disabled', false)
                }
            })
        })

        function get_categories() {
            $.ajax({
                url: "<?= base_url('/api/categories/single') ?>",
                type: "GET",
                beforeSend: function () { },
                success: function (resp) {
                    let html = '<option value="">Select-category</option>'
                    if (resp.status) {
                        $.each(resp.data, function (key, val) {
                            html += `<option value="${val.uid}">${val.name}</option>`
                        })
                    }
                    $('#choices-category-input').html(html)
                },
                error: function (err) {
                    console.log(err)
                }
            })

        }

    });
</script>