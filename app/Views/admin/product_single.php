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
                            <li class="breadcrumb-item active">Variants</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="fs-16">Product</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#" class="btn btn-success">View</a>
                            </div>
                        </div>


                    </div>

                    <div class="card-body">



                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-9 col-lg-8">
                <div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex  align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16">All Product Variants</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="<?= base_url('/admin/product/variant/add?p_id=' . $_GET['p_id']) ?>"
                                        class="btn btn-success">Add Variant</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <table id="table-product-variant" class="table nowrap align-middle table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Variant</th>
                                        <th>Price</th>
                                        <th>Final Price</th>
                                        <th>discount</th>
                                        <th>Stock</th>
                                    </tr>
                                </thead>
                                <tbody id="table-product-variant-body">

                                </tbody>
                            </table>



                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>