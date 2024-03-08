<script>

    get_categories()
    var editor;

    ClassicEditor.create(document.querySelector("#ckeditor-classic")).then(function (createdEditor) {
        editor = createdEditor;
        editor.ui.view.editable.element.style.height = "200px";
    }).catch(function (error) {
        console.error(error);
    });


    $('#product_add_btn').on('click', function () {
        let title               = $('#product-title-input').val()
        let details             = editor.getData()
        let categoryId          = $('#choices-category-input').val()
        let publishDate         = $('#datepicker-publish-input').val()
        let productTags         = $('#product-tags-input').val()
        let visibility          = $('#choices-publish-visibility-input').val()
        let status              = $('#choices-publish-status-input').val()
        let manufacturerName    = $('#manufacturer-name-input').val()
        let manufacturerBrand   = $('#manufacturer-brand-input').val()
        let metaTitle           = $('#meta-title-input').val()
        let metaKeywords        = $('#meta-keywords-input').val()
        let metaDescription     = $('#meta-description-input').val()
        let price               = $('#product-price-input').val()
        let discount            = $('#product-discount-input').val()

        // if(title.length < 1){
        //     $('#alert').html(`<div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show material-shadow" role="alert">
        //                         <i class="ri-alert-line label-icon"></i><strong>Warning</strong> - Please Add Product Title
        //                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //                     </div>`)
        // }else{
        //
        // }

        $.ajax({
            url: "<?= base_url('/api/product/add') ?>",
            type: "POST",
            data: {
                title: title,
                details: details,
                categoryId: categoryId,
                productTags: productTags,
                status: status,
                visibility: visibility,
                publishDate: publishDate,
                manufacturerName: manufacturerName,
                manufacturerBrand: manufacturerBrand,
                price: price,
                discount: discount,
                metaTitle: metaTitle,
                metaKeywords: metaKeywords,
                metaDescription: metaDescription
            },
            beforeSend: function () {

            },
            success: function (resp) {
                console.log(resp)
            },
            error: function (err) {
                console.log(err)
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
                    console.log(resp.data);
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


</script>