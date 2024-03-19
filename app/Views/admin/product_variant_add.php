<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Products</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item">Products</li>
                            <li class="breadcrumb-item">Variants</li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div>
                    <div class="card">
                        <div class="card-header border-1">
                            <div class="d-flex mb-1 align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16">Variants Images</h5>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <label class="form-label" for="product-image-input">Product Image</label>
                            <input type="file" id="file-input" multiple>
                            <label for="file-input" id="btn_upload" class="btn btn-success">
                                <i class="fas fa-upload"></i> &nbsp; Select Product Image
                            </label>
                            <p id="num-of-files"></p>
                            <div id="images"></div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end col -->


            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex mb-1 align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="fs-16">Select Variant</h5>
                            </div>
                        </div>


                    </div>

                    <div class="card-body row">
                        <div class="col-6">
                            <label for="">Size</label>
                            <select class="form-select" id="size">
                                <option value="xs">XS</option>
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                                <option value="xxl">XXL</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="colorPicker" class="form-label">Color</label>
                            <input type="color" class="form-control form-control-color w-100" id="colorPicker"
                                value="#364574">
                        </div>




                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->



            <div class="col-xl-3 col-lg-4 mb-3">

                <button id="variant_add_btn" class="btn btn-success">Save</button>

            </div>

        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>