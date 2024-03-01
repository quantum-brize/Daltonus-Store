<script>
    // Call the function to fetch and display categories
    get_parent_categories();
    function get_parent_categories() {
        $.ajax({
            url: '<?= base_url('/api/categories') ?>',
            type: "GET",
            success: function (resp) {
                console.log(resp);
                if (resp.status) {

                    if (resp.data.length > 0) {
                        let html = ''
                        $.each(resp.data, (index, category) => {
                            html += ` <div class="accordion-item" id="${category.uid}-category-id">
                                        <h2 class="accordion-header" id="${category.uid}-category-id-heading">
                                            <input 
                                                type="text" 
                                                class="form-control fs-15" 
                                                disabled 
                                                value="${category.name}" 
                                                id="${category.uid}-category-input"
                                            >
                                            <button 
                                                class="btn btn-success" 
                                                id="save-category-btn" 
                                                onclick="save_category('null',${$("#" +category.uid +"-category-input").val()},save-category-btn')" 
                                                hidden>
                                                <i class="ri-save-line fs-15"></i>
                                            </button>
                                            <button 
                                                class="btn btn-info" 
                                                id="update-category-btn" 
                                                onclick="update_category('category-input','save-category-btn')">
                                                <i class="ri-edit-line fs-15"></i>
                                            </button>
                                            <button 
                                                class="btn btn-danger" 
                                                id="delete-category-btn"
                                                onclick="delete_category('category-input')">
                                                <i class="ri-delete-bin-line fs-15"></i>
                                            </button>
                                            <button 
                                                class="accordion-button collapsed fs-15 fw-500" 
                                                type="button" 
                                                data-bs-toggle="collapse" 
                                                data-bs-target="#${category.uid}-collapse" 
                                                aria-expanded="false" 
                                                aria-controls="${category.uid}-collapse-accordion-body-id" 
                                                onclick="getSubCategory('${category.uid}','collapse-accordion-body-id')">
                                            </button>
                                        </h2>
                                        <div 
                                            id="${category.uid}-collapse" 
                                            class="accordion-collapse collapse" 
                                            aria-labelledby="${category.uid}-category-id-heading"
                                            data-bs-parent="#${category.uid}-category-id">
                                            <div class="collapse-accordion-body" id="${category.uid}-collapse-accordion-body-id">

                                                

                                            </div>
                                        </div>
                                    </div>`
                        })
                        html += ` <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <input type="text" class="form-control fs-15" id="new-category-input">
                                        <button class="btn btn-success" onclick="add_category('null','new-category-input')">
                                            <i class="ri-add-fill fs-15"></i>
                                        </button>
                                    </h2>
                                </div>`
                        $('#accordion').html(html)

                    }

                }


            },
            error: function (err) {
                console.log(err);
            }
        });
    }

    // function getSubCategory(parent_id, body_id) {
    //     $.ajax({
    //         url: '<?= base_url('/api/categories') ?>',
    //         data: {
    //             parent_id: parent_id
    //         },
    //         type: "GET",
    //         success: function (resp) {
    //             console.log(resp)
    //             if (resp.status) {

    //                 if (resp.data.length > 0) {
    //                     let html = ' <div class="accordion" style="padding: 10px 10px 10px 30px">'
    //                     $.each(resp.data, (index, category) => {
    //                         html += ` <div class="accordion-item" id="${category.uid}-category-id">
    //                                     <h2 class="accordion-header" id="${category.uid}-category-id-heading">
    //                                         <input 
    //                                             type="text" 
    //                                             class="form-control fs-15" 
    //                                             disabled 
    //                                             value="${category.name}" 
    //                                             id="${category.uid}-category-input"
    //                                         >
    //                                         <button 
    //                                             class="btn btn-success" 
    //                                             id="${category.uid}-save-category-btn" 
    //                                             onclick="save_category('${category.uid}-category-input','${category.uid}-save-category-btn')" 
    //                                             hidden>
    //                                             <i class="ri-save-line fs-15"></i>
    //                                         </button>
    //                                         <button 
    //                                             class="btn btn-info" 
    //                                             id="${category.uid}-update-category-btn" 
    //                                             onclick="update_category('${category.uid}-category-input','${category.uid}-save-category-btn')">
    //                                             <i class="ri-edit-line fs-15"></i>
    //                                         </button>
    //                                         <button 
    //                                             class="btn btn-danger" 
    //                                             id="${category.uid}-delete-category-btn"
    //                                             onclick="delete_category('${category.uid}-category-input')">
    //                                             <i class="ri-delete-bin-line fs-15"></i>
    //                                         </button>
    //                                         <button 
    //                                             class="accordion-button collapsed fs-15 fw-500" 
    //                                             type="button" 
    //                                             data-bs-toggle="collapse" 
    //                                             data-bs-target="#${category.uid}-collapse" 
    //                                             aria-expanded="false" 
    //                                             aria-controls="collapse" 
    //                                             onclick="getSubCategory('${category.uid}','${category.uid}-collapse-accordion-body-id')">
    //                                         </button>
    //                                     </h2>
    //                                     <div id="${category.uid}-collapse" class="accordion-collapse collapse" aria-labelledby="${category.uid}-category-id-heading"
    //                                         data-bs-parent="#${category.uid}-category-id">
    //                                         <div class="${category.uid}-collapse-accordion-body" id="${category.uid}-collapse-accordion-body-id">

                                                

    //                                         </div>
    //                                     </div>
    //                                 </div>`
    //                     })
    //                     html += ` <div class="accordion-item">
    //                                 <h2 class="accordion-header">
    //                                     <input type="text" class="form-control fs-15" id="new-category-input">
    //                                     <button class="btn btn-success" onclick="add_category('null','new-category-input')">
    //                                         <i class="ri-add-fill fs-15"></i>
    //                                     </button>
    //                                 </h2>
    //                             </div>
    //                         </div>`
    //                     $(`#${body_id}`).html(html)

    //                 }

    //             }
    //         }


    //     })

    // }


    function delete_category(input_id) {
        console.log(input_id)
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