<script>


    load_discount_table()
    function load_discount_table() {
        $.ajax({
            url: '<?= base_url('/api/discounts') ?>',
            type: "GET",
            beforeSend: function () {
                $('#table-discounts-list-all-body').html(`<tr >
                        <td colspan="7"  style="text-align:center;">
                            <div class="spinner-border" role="status"></div>
                        </td>
                    </tr>`)
            },
            success: function (resp) {
                console.log(resp);
                if (resp.status == 1) {
                    if (resp.data.length > 0) {
                        let html = ''
                        $.each(resp.data, function (index, item) {
                            html += `<tr>
                                        <td style="text-align: center;">
                                            ${item.name}
                                        </td>
                                        <td style="text-align: center;">
                                            ${item.minimum_purchase}
                                        </td>
                                        <td style="text-align: center;">
                                            ${item.discount_percentage}
                                        </td>
                                        <td style="text-align: center;">
                                            ${item.status}
                                        </td>
                                        <td style="text-align: center;">
                                            <button class="btn btn-danger" id="dlt-${item.uid}">
                                            <i class="ri ri-delete-bin-line"></i>
                                            </button>
                                        </td>
                                    </tr>`

                        })

                        $('#table-discounts-list-all-body').html(html)
                        $('#table-discounts-list-all').DataTable();
                    }
                } else {
                    $('#table-discounts-list-all-body').html(`<tr >
                        <td>
                            DATA NOT FOUND!
                        </td>
                    </tr>`)
                }
            },
            error: function (err) {
                console.log(err)
            }

        })

    }





</script>