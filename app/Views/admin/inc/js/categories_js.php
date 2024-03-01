<script>
    // Call the function to fetch and display categories
    get_parent_categories();
    function get_parent_categories() {
        $.ajax({
            url: '<?= base_url('/api/categories/all') ?>',
            type: "GET",
            success: function (resp) {
                console.log(resp);
                generateAccordion(resp.data, "accordion");
            },
            error: function (err) {
                console.log(err);
            }
        });
    }

    function generateAccordion(data, parentId = "accordion") {
        $.each(data, function (index, category) {
            const categoryId = `category-${category.uid}`;
            const accordionId = `${parentId}-${index}`;

            const accordionItem = $(`<div class="accordion-item" id="${categoryId}"></div>`);
            const accordionHeader = $(`<h2 class="accordion-header" id="${accordionId}-heading"></h2>`);
            const categoryInput = $(`<input type="text" class="form-control fs-15" disabled value="${category.name}" id="${categoryId}-input">`);
            const saveButton = $(`<button class="btn btn-success" id="save-${categoryId}-btn" onclick="save_category('${categoryId}-input', 'save-${categoryId}-btn')" hidden>
                                    <i class="ri-save-line fs-15"></i>
                                </button>`);
            const updateButton = $(`<button class="btn btn-info" id="update-${categoryId}-btn" onclick="update_category('${categoryId}-input', 'save-${categoryId}-btn')">
                                    <i class="ri-edit-line fs-15"></i>
                                </button>`);
            const deleteButton = $(`<button class="btn btn-danger" id="delete-${categoryId}-btn" onclick="delete_category('${categoryId}-input')">
                                    <i class="ri-delete-bin-line fs-15"></i>
                                </button>`);
            const accordionButton = $(`<button class="accordion-button collapsed fs-15 fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#${accordionId}-collapse" aria-expanded="false" aria-controls="${accordionId}-collapse">${category.name}</button>`);
            const accordionCollapse = $(`<div id="${accordionId}-collapse" class="accordion-collapse collapse" aria-labelledby="${accordionId}-heading" data-bs-parent="#${parentId}"></div>`);
            const accordionBody = $(`<div class="${categoryId}-accordion-body"></div>`);

            accordionHeader.append(categoryInput, saveButton, updateButton, deleteButton, accordionButton);
            accordionCollapse.append(accordionBody);
            accordionItem.append(accordionHeader, accordionCollapse);

            if (category.subCategories.length > 0) {
                generateAccordion(category.subCategories, categoryId);
            }

            $(`#${parentId}`).append(accordionItem);
        });
    }






    function update_category(input_id, save_btn_id) {
        $('#' + input_id).attr('disabled', false);
        $('#' + input_id).focus();
        $('#' + save_btn_id).attr('hidden', false);
    }

    function save_category(input_id, save_btn_id) {
        $('#' + input_id).attr('disabled', true);
        $('#' + save_btn_id).attr('hidden', true);
    }
</script>