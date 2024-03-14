<script>
    $(document).ready(function () {
        get_categories()
        var editor;

        ClassicEditor.create(document.querySelector("#ckeditor-classic")).then(function (createdEditor) {
            editor = createdEditor;
            editor.ui.view.editable.element.style.height = "200px";
        }).catch(function (error) {
            console.error(error);
        });


        $('#product_add_btn').on('click', function () {
            var formData = new FormData();

            formData.append('title', $('#product-title-input').val());
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
            // Append files
            console.log($('#product_images')[0].dropzone.getAcceptedFiles());

            return false;
            var files = $('#product_images')[0].dropzone.getAcceptedFiles();
            for (var i = 0; i < files.length; i++) {
                formData.append('files[]', files[i]);
            }

            $.ajax({
                url: "<?= base_url('/api/product/add') ?>",
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
                        $('#product-title-input').val(``)
                        editor.setData(``)
                        $('#choices-category-input').val(``)
                        $('#datepicker-publish-input').val(``)
                        $('#product-tags-input').val(``)
                        $('#choices-publish-visibility-input').val(``)
                        $('#choices-publish-status-input').val(``)
                        $('#manufacturer-name-input').val(``)
                        $('#manufacturer-brand-input').val(``)
                        $('#meta-title-input').val(``)
                        $('#meta-keywords-input').val(``)
                        $('#meta-description-input').val(``)
                        $('#product-price-input').val(``)
                        $('#product-discount-input').val(``)

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