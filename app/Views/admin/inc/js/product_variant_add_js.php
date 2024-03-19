<script>
    lode_variants();

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

    $('#variant_add_btn').on('click', function () {
        var formData = new FormData();
    })

    function lode_variants(){

        $.ajax({
            url: "<?= base_url('/api/product/variant/options')?>",
            beforeSend: function(){

            },
            success: function(resp){
                console.log(resp)
            },
            error: function(err){
                console.log(err)
            }
        })

    }


</script>