<!--cart -->
<div
      class="offcanvas offcanvas-end product-list"
      tabindex="-1"
      id="ecommerceCart"
      aria-labelledby="ecommerceCartLabel"
    >
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="ecommerceCartLabel">
          My Cart
          <span class="badge bg-danger align-middle ms-1 cartitem-badge"
            >4</span
          >
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body px-0">
        <div data-simplebar="" class="h-100">
          <ul class="list-group list-group-flush cartlist">
            <li class="list-group-item product">
              <div class="d-flex gap-3">
                <div class="flex-shrink-0">
                  <div class="avatar-md" style="height: 100%">
                    <div class="avatar-title bg-warning-subtle rounded-3">
                      <img
                        src="<?= base_url()?>/public/assets/images/products/img-4-1.png"
                        alt=""
                        class="avatar-sm"
                      />
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <a href="#!">
                    <h5 class="fs-15">Borosil Paper Cup</h5>
                  </a>
                  <div class="d-flex mb-3 gap-2">
                    <div class="text-muted fw-medium mb-0">
                      $<span class="product-price">24.00</span>
                    </div>
                    <div class="vr"></div>
                    <span class="text-success fw-medium">In Stock</span>
                  </div>
                  <div class="input-step">
                    <button type="button" class="minus">–</button>
                    <input
                      type="number"
                      class="product-quantity"
                      value="2"
                      min="0"
                      max="100"
                      readonly=""
                    />
                    <button type="button" class="plus">+</button>
                  </div>
                </div>
                <div
                  class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end"
                >
                  <button
                    type="button"
                    class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#removeItemModal"
                  >
                    <i class="ri-close-fill fs-16"></i>
                  </button>
                  <div class="fw-medium mb-0 fs-16">
                    $<span class="product-line-price">48.00</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item product">
              <div class="d-flex gap-3">
                <div class="flex-shrink-0">
                  <div class="avatar-md" style="height: 100%">
                    <div class="avatar-title bg-info-subtle rounded-3">
                      <img
                        src="<?= base_url()?>/public/assets/images/products/img-1-1.png"
                        alt=""
                        class="avatar-sm"
                      />
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <a href="#!">
                    <h5 class="fs-15">Rockerz Ear Bluetooth Hea...</h5>
                  </a>
                  <div class="d-flex mb-3 gap-2">
                    <div class="text-muted fw-medium mb-0">
                      $<span class="product-price">160.00</span>
                    </div>
                    <div class="vr"></div>
                    <span class="text-success fw-medium">In Stock</span>
                  </div>
                  <div class="input-step">
                    <button type="button" class="minus">–</button>
                    <input
                      type="number"
                      class="product-quantity"
                      value="1"
                      min="0"
                      max="100"
                      readonly=""
                    />
                    <button type="button" class="plus">+</button>
                  </div>
                </div>
                <div
                  class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end"
                >
                  <button
                    type="button"
                    class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#removeItemModal"
                  >
                    <i class="ri-close-fill fs-16"></i>
                  </button>
                  <div class="fw-medium mb-0 fs-16">
                    $<span class="product-line-price">160.00</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item product">
              <div class="d-flex gap-3">
                <div class="flex-shrink-0">
                  <div class="avatar-md" style="height: 100%">
                    <div class="avatar-title bg-danger-subtle rounded-3">
                      <img
                        src="<?= base_url()?>/public/assets/images/products/img-6-1.png"
                        alt=""
                        class="avatar-sm"
                      />
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <a href="#!">
                    <h5 class="fs-15">Monte Carlo Sweaters</h5>
                  </a>
                  <div class="d-flex mb-3 gap-2">
                    <div class="text-muted fw-medium mb-0">
                      $ <span class="product-price">244.99</span>
                    </div>
                    <div class="vr"></div>
                    <span class="text-success fw-medium">In Stock</span>
                  </div>
                  <div class="input-step">
                    <button type="button" class="minus">–</button>
                    <input
                      type="number"
                      class="product-quantity"
                      value="3"
                      min="0"
                      max="100"
                      readonly=""
                    />
                    <button type="button" class="plus">+</button>
                  </div>
                </div>
                <div
                  class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end"
                >
                  <button
                    type="button"
                    class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#removeItemModal"
                  >
                    <i class="ri-close-fill fs-16"></i>
                  </button>
                  <div class="fw-medium mb-0 fs-16">
                    $<span class="product-line-price">734.97</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item product">
              <div class="d-flex gap-3">
                <div class="flex-shrink-0">
                  <div class="avatar-md" style="height: 100%">
                    <div class="avatar-title bg-primary-subtle rounded-3">
                      <img
                        src="<?= base_url()?>/public/assets/images/products/img-8-1.png"
                        alt=""
                        class="avatar-sm"
                      />
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <a href="#!">
                    <h5 class="fs-15">Men's Running Shoes Act...</h5>
                  </a>
                  <div class="d-flex mb-3 gap-2">
                    <div class="text-muted fw-medium mb-0">
                      $<span class="product-price">120.30</span>
                    </div>
                    <div class="vr"></div>
                    <span class="text-success fw-medium">In Stock</span>
                  </div>
                  <div class="input-step">
                    <button type="button" class="minus">–</button>
                    <input
                      type="number"
                      class="product-quantity"
                      value="2"
                      min="0"
                      max="100"
                      readonly=""
                    />
                    <button type="button" class="plus">+</button>
                  </div>
                </div>
                <div
                  class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end"
                >
                  <button
                    type="button"
                    class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#removeItemModal"
                  >
                    <i class="ri-close-fill fs-16"></i>
                  </button>
                  <div class="fw-medium mb-0 fs-16">
                    $<span class="product-line-price">240.60</span>
                  </div>
                </div>
              </div>
            </li>
          </ul>

          <div class="table-responsive mx-2 border-top border-top-dashed">
            <table class="table table-borderless mb-0 fs-14 fw-semibold">
              <tbody>
                <tr>
                  <td>Sub Total :</td>
                  <td class="text-end cart-subtotal">$1183.57</td>
                </tr>
                <tr>
                  <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                  <td class="text-end cart-discount">- $177.54</td>
                </tr>
                <tr>
                  <td>Shipping Charge :</td>
                  <td class="text-end cart-shipping">$65.00</td>
                </tr>
                <tr>
                  <td>Estimated Tax (12.5%) :</td>
                  <td class="text-end cart-tax">$147.95</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="offcanvas-footer border-top p-3 text-center">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h6 class="m-0 fs-16 text-muted">Total:</h6>
          <div class="px-2">
            <h6 class="m-0 fs-16 cart-total">$1218.98</h6>
          </div>
        </div>
        <div class="row g-2">
          <div class="col-6">
            <button type="button" class="btn btn-light w-100" id="reset-layout">
              View Cart
            </button>
          </div>
          <div class="col-6">
            <a href="#!" target="_blank" class="btn btn-info w-100"
              >Continue to Checkout</a
            >
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
          <div class="modal-header p-3">
            <div class="position-relative w-100">
              <input
                type="text"
                class="form-control form-control-lg border-2"
                placeholder="Search for Toner..."
                autocomplete="off"
                id="search-options"
                value=""
              />
              <span class="bi bi-search search-widget-icon fs-17"></span>
              <a
                href="javascript:void(0);"
                class="search-widget-icon fs-14 link-secondary text-decoration-underline search-widget-icon-close d-none"
                id="search-close-options"
                >Clear</a
              >
            </div>
          </div>
          <div
            class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden"
            id="search-dropdown"
          >
            <div class="dropdown-head rounded-top">
              <div class="p-3">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="m-0 fs-14 text-muted fw-semibold">
                      RECENT SEARCHES
                    </h6>
                  </div>
                </div>
              </div>

              <div class="dropdown-item bg-transparent text-wrap">
                <a
                  href="index.html"
                  class="btn btn-soft-secondary btn-sm btn-rounded"
                  >how to setup <i class="mdi mdi-magnify ms-1 align-middle"></i
                ></a>
                <a
                  href="index.html"
                  class="btn btn-soft-secondary btn-sm btn-rounded"
                  >buttons <i class="mdi mdi-magnify ms-1 align-middle"></i
                ></a>
              </div>
            </div>

            <div
              data-simplebar=""
              style="max-height: 300px"
              class="pe-2 ps-3 my-3"
            >
              <div class="list-group list-group-flush border-dashed">
                <div class="notification-group-list">
                  <h5
                    class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title"
                  >
                    Apps Pages
                  </h5>
                  <a
                    href="javascript:void(0);"
                    class="list-group-item dropdown-item notify-item"
                    ><i class="bi bi-speedometer2 me-2"></i>
                    <span>Analytics Dashboard</span></a
                  >
                  <a
                    href="javascript:void(0);"
                    class="list-group-item dropdown-item notify-item"
                    ><i class="bi bi-filetype-psd me-2"></i>
                    <span>Toner.psd</span></a
                  >
                  <a
                    href="javascript:void(0);"
                    class="list-group-item dropdown-item notify-item"
                    ><i class="bi bi-ticket-detailed me-2"></i>
                    <span>Support Tickets</span></a
                  >
                  <a
                    href="javascript:void(0);"
                    class="list-group-item dropdown-item notify-item"
                    ><i class="bi bi-file-earmark-zip me-2"></i>
                    <span>Toner.zip</span></a
                  >
                </div>

                <div class="notification-group-list">
                  <h5
                    class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title"
                  >
                    Links
                  </h5>
                  <a
                    href="javascript:void(0);"
                    class="list-group-item dropdown-item notify-item"
                    ><i class="bi bi-link-45deg me-2 align-middle"></i>
                    <span>www.themesbrand.com</span></a
                  >
                </div>

                <div class="notification-group-list">
                  <h5
                    class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title"
                  >
                    People
                  </h5>
                  <a
                    href="javascript:void(0);"
                    class="list-group-item dropdown-item notify-item"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="<?= base_url()?>/public/assets/images/users/avatar-1-1.jpg"
                        alt=""
                        class="avatar-xs rounded-circle flex-shrink-0 me-2"
                      />
                      <div>
                        <h6 class="mb-0">Ayaan Bowen</h6>
                        <span class="fs-12 text-muted">React Developer</span>
                      </div>
                    </div>
                  </a>
                  <a
                    href="javascript:void(0);"
                    class="list-group-item dropdown-item notify-item"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="<?= base_url()?>/public/assets/images/users/avatar-7-1.jpg"
                        alt=""
                        class="avatar-xs rounded-circle flex-shrink-0 me-2"
                      />
                      <div>
                        <h6 class="mb-0">Alexander Kristi</h6>
                        <span class="fs-12 text-muted">React Developer</span>
                      </div>
                    </div>
                  </a>
                  <a
                    href="javascript:void(0);"
                    class="list-group-item dropdown-item notify-item"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="<?= base_url()?>/public/assets/images/users/avatar-5-1.jpg"
                        alt=""
                        class="avatar-xs rounded-circle flex-shrink-0 me-2"
                      />
                      <div>
                        <h6 class="mb-0">Alan Carla</h6>
                        <span class="fs-12 text-muted">React Developer</span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- removeItemModal -->
    <div
      id="removeItemModal"
      class="modal fade zoomIn"
      tabindex="-1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
              id="close-modal"
            ></button>
          </div>
          <div class="modal-body">
            <div class="mt-2 text-center">
              <lord-icon
                src="../../../gsqxdxog-1.json"
                trigger="loop"
                colors="primary:#f7b84b,secondary:#f06548"
                style="width: 100px; height: 100px"
              ></lord-icon>
              <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                <h4>Are you sure ?</h4>
                <p class="text-muted mx-4 mb-0">
                  Are you sure you want to remove this product ?
                </p>
              </div>
            </div>
            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
              <button
                type="button"
                class="btn w-sm btn-light"
                data-bs-dismiss="modal"
              >
                Close
              </button>
              <button
                type="button"
                class="btn w-sm btn-danger"
                id="remove-product"
              >
                Yes, Delete It!
              </button>
            </div>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div
      class="modal fade"
      id="subscribeModal"
      tabindex="-1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
          <div class="modal-body p-0 bg-info-subtle rounded">
            <div class="row g-0 align-items-center">
              <div class="col-lg-6">
                <div class="p-4 h-100">
                  <span class="badge bg-info-subtle text-info fs-13"
                    >GET 10% SALE OFF</span
                  >
                  <h2 class="display-6 mt-2 mb-3">
                    Subscribe & Get <b>50% Special</b> Discount On Email
                  </h2>
                  <p class="mb-4 pb-lg-2 fs-16">
                    Join our newsletter to receive the latest updates and
                    promotion
                  </p>
                  <form action="#!">
                    <div class="position-relative ecommerce-subscript">
                      <input
                        type="email"
                        class="form-control rounded-pill border-0"
                        placeholder="Enter your email"
                      />
                      <button
                        type="submit"
                        class="btn btn-info btn-hover rounded-pill"
                      >
                        Subscript
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="p-4 pb-0">
                  <img
                    src="<?= base_url()?>/public/assets/images/subscribe.png"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal -->

    <!-- <a
      href="../backend/index.html"
      class="btn btn-warning position-fixed bottom-0 start-0 m-5 z-3 btn-hover d-none d-lg-block"
      ><i class="bi bi-database align-middle me-1"></i> Backend</a
    > -->

    <!--start back-to-top-->
    <button
      onclick="topFunction()"
      class="btn btn-info btn-icon"
      style="bottom: 50px"
      id="back-to-top"
    >
      <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <a
      class="btn btn-danger shadow-lg chat-button rounded-bottom-0 d-none d-lg-block"
      data-bs-toggle="collapse"
      href="#chatBot"
      aria-expanded="false"
      aria-controls="chatBot"
      >Online Chat</a
    >
    <div class="collapse chat-box" id="chatBot">
      <div class="card shadow-lg border-0 rounded-bottom-0 mb-0">
        <div class="card-header bg-success d-flex align-items-center border-0">
          <h5 class="text-white fs-16 fw-medium flex-grow-1 mb-0">
            Hi, Raquel Murillo 👋
          </h5>
          <button
            type="button"
            class="btn-close btn-close-white flex-shrink-0"
            onclick="chatBot()"
            data-bs-dismiss="collapse"
            aria-label="Close"
          ></button>
        </div>
        <div class="card-body p-0">
          <div id="users-chat-widget">
            <div
              class="chat-conversation p-3"
              id="chat-conversation"
              data-simplebar=""
              style="height: 280px"
            >
              <ul
                class="list-unstyled chat-conversation-list chat-sm"
                id="users-conversation"
              >
                <li class="chat-list left">
                  <div class="conversation-list">
                    <div class="chat-avatar">
                      <img src="<?= base_url()?>/public/assets/images/logo-sm-1.png" alt="" />
                    </div>
                    <div class="user-chat-content">
                      <div class="ctext-wrap">
                        <div class="ctext-wrap-content">
                          <p class="mb-0 ctext-content">
                            Welcome to Themesbrand. We are here to help you. You
                            can also directly email us at
                            Support@themesbrand.com to schedule a meeting with
                            our Technology Consultant.
                          </p>
                        </div>
                        <div class="dropdown align-self-start message-box-drop">
                          <a
                            class="dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ri-more-2-fill"></i>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="ri-reply-line me-2 text-muted align-bottom"
                              ></i
                              >Reply</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="ri-file-copy-line me-2 text-muted align-bottom"
                              ></i
                              >Copy</a
                            >
                            <a class="dropdown-item delete-item" href="#"
                              ><i
                                class="ri-delete-bin-5-line me-2 text-muted align-bottom"
                              ></i
                              >Delete</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="conversation-name">
                        <small class="text-muted time">09:07 am</small>
                        <span class="text-success check-message-icon"
                          ><i class="ri-check-double-line align-bottom"></i
                        ></span>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- chat-list -->

                <li class="chat-list right">
                  <div class="conversation-list">
                    <div class="user-chat-content">
                      <div class="ctext-wrap">
                        <div class="ctext-wrap-content">
                          <p class="mb-0 ctext-content">
                            Good morning, How are you? What about our next
                            meeting?
                          </p>
                        </div>
                        <div class="dropdown align-self-start message-box-drop">
                          <a
                            class="dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ri-more-2-fill"></i>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="ri-reply-line me-2 text-muted align-bottom"
                              ></i
                              >Reply</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="ri-file-copy-line me-2 text-muted align-bottom"
                              ></i
                              >Copy</a
                            >
                            <a class="dropdown-item delete-item" href="#"
                              ><i
                                class="ri-delete-bin-5-line me-2 text-muted align-bottom"
                              ></i
                              >Delete</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="conversation-name">
                        <small class="text-muted time">09:08 am</small>
                        <span class="text-success check-message-icon"
                          ><i class="ri-check-double-line align-bottom"></i
                        ></span>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- chat-list -->

                <li class="chat-list left">
                  <div class="conversation-list">
                    <div class="chat-avatar">
                      <img src="<?= base_url()?>/public/assets/images/logo-sm-1.png" alt="" />
                    </div>
                    <div class="user-chat-content">
                      <div class="ctext-wrap">
                        <div class="ctext-wrap-content">
                          <p class="mb-0 ctext-content">
                            Yeah everything is fine. Our next meeting tomorrow
                            at 10.00 AM
                          </p>
                        </div>
                        <div class="dropdown align-self-start message-box-drop">
                          <a
                            class="dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ri-more-2-fill"></i>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                              ><i
                                class="ri-reply-line me-2 text-muted align-bottom"
                              ></i
                              >Reply</a
                            >
                            <a class="dropdown-item" href="#"
                              ><i
                                class="ri-file-copy-line me-2 text-muted align-bottom"
                              ></i
                              >Copy</a
                            >
                            <a class="dropdown-item delete-item" href="#"
                              ><i
                                class="ri-delete-bin-5-line me-2 text-muted align-bottom"
                              ></i
                              >Delete</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="conversation-name">
                        <small class="text-muted time">09:10 am</small>
                        <span class="text-success check-message-icon"
                          ><i class="ri-check-double-line align-bottom"></i
                        ></span>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- chat-list -->
              </ul>
            </div>
          </div>
          <div class="border-top border-top-dashed">
            <div class="row g-2 mt-2 mx-3 mb-3">
              <div class="col">
                <div class="position-relative">
                  <input
                    type="text"
                    class="form-control border-light bg-light"
                    placeholder="Enter Message..."
                  />
                </div>
              </div>
              <!-- end col -->
              <div class="col-auto">
                <button type="submit" class="btn btn-info">
                  <i class="mdi mdi-send"></i>
                </button>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
        </div>
      </div>
    </div>

    <section class="ecommerce-about">
      <div class="effect d-none d-md-block">
        <div class="ecommerce-effect bg-primary"></div>
        <div class="ecommerce-effect bg-info"></div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="fw-bold mb-3">👋 About Us</h1>
            <p class="fs-16 text-muted mb-5 mb-lg-3">
              We’re impartial and independent, and every day we create
              distinctive, world-class programmes and content which inform,
              educate and entertain millions of people in the around the world.
              The thought process that led to the items being created and sold.
            </p>
          </div>
          <div class="col-lg-6">
            <div>
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="position-relative">
                    <img
                      src="<?= base_url()?>/public/assets/images/ecommerce/img-4.jpg"
                      alt=""
                      class="img-fluid rounded"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="vstack gap-4">
                    <img
                      src="<?= base_url()?>/public/assets/images/ecommerce/img-1.jpg"
                      alt=""
                      class="img-fluid rounded"
                    />
                    <img
                      src="<?= base_url()?>/public/assets/images/ecommerce/img-3.jpg"
                      alt=""
                      class="img-fluid rounded"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="ecommerce-about-cta">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-animate border-0">
              <div class="card-body">
                <lord-icon
                  src="../../../fcoczpqi.json"
                  trigger="hover"
                  target="div"
                  style="width: 70px; height: 70px"
                >
                </lord-icon>
                <h5 class="fs-16 mt-3">25,000+ Happy Customer</h5>
                <p class="text-muted">
                  Customer happiness goes beyond customer satisfaction by
                  creating an emotional connection with a brand's.
                </p>
                <div>
                  <a href="#!" class="link-effect link-primary"
                    >Read More <i class="bi bi-arrow-right ms-2"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-animate border-0">
              <div class="card-body">
                <lord-icon
                  src="../../../hbwqfgcf.json"
                  trigger="hover"
                  target="div"
                  style="width: 70px; height: 70px"
                >
                </lord-icon>
                <h5 class="fs-16 mt-3">6+ Years of Experiences</h5>
                <p class="text-muted">
                  The years of experience you list on your resume represent the
                  work experience you have if you have little experience.
                </p>
                <div>
                  <a href="#!" class="link-effect link-primary"
                    >Read More <i class="bi bi-arrow-right ms-2"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-animate border-0">
              <div class="card-body">
                <lord-icon
                  src="../../../xhbsnkyp.json"
                  trigger="hover"
                  target="div"
                  style="width: 70px; height: 70px"
                >
                </lord-icon>
                <h5 class="fs-16 mt-3">14 Awards Won</h5>
                <p class="text-muted">
                  The Global Content Awards celebrate excellence in content
                  marketing and rewards agencies and in-house teams.
                </p>
                <div>
                  <a href="#!" class="link-effect link-primary"
                    >Read More <i class="bi bi-arrow-right ms-2"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ecommerce-about-team bg-light bg-opacity-50">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="text-center mb-5">
              <h2 class="mb-3">Expart Management Team</h2>
              <p class="text-muted fs-15">
                An Expert Leader is first and foremost someone who has deep
                expertise in the area that they are leading.
              </p>
            </div>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-xl-3 col-md-6">
            <div class="team-box text-center">
              <div class="team-img">
                <img
                  src="<?= base_url()?>/public/assets/images/users/avatar-7-1.jpg"
                  alt=""
                  class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25"
                />
              </div>
              <div class="mt-4 pt-1">
                <a href="#!">
                  <h5>Rachael Larson</h5>
                </a>
                <p class="text-muted mb-0">Founder</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="team-box text-center">
              <div class="team-img">
                <img
                  src="<?= base_url()?>/public/assets/images/users/avatar-1-1.jpg"
                  alt=""
                  class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25"
                />
              </div>
              <div class="mt-4 pt-1">
                <a href="#!">
                  <h5>Jennifer Thompson</h5>
                </a>
                <p class="text-muted mb-0">Sr. Manager</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="team-box text-center">
              <div class="team-img">
                <img
                  src="<?= base_url()?>/public/assets/images/users/avatar-2-1.jpg"
                  alt=""
                  class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25"
                />
              </div>
              <div class="mt-4 pt-1">
                <a href="#!">
                  <h5>Amanda Rivera</h5>
                </a>
                <p class="text-muted mb-0">Marketing Executive</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="team-box text-center">
              <div class="team-img">
                <img
                  src="<?= base_url()?>/public/assets/images/users/avatar-8-1.jpg"
                  alt=""
                  class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25"
                />
              </div>
              <div class="mt-4 pt-1">
                <a href="#!">
                  <h5>Donald Schmidt</h5>
                </a>
                <p class="text-muted mb-0">Account Executive</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div>
              <img
                src="<?= base_url()?>/public/assets/images/ecommerce/img-5.jpg"
                alt=""
                class="img-fluid rounded"
              />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mt-4 mt-lg-0">
              <p class="text-uppercase fw-medium text-muted">
                Best Products Sales
              </p>
              <h2 class="lh-base fw-semibold mb-3">
                Desgining Spaces to enahance your business growth
              </h2>
              <p class="text-muted fs-16">
                A physical office space will promote collaboration and
                understanding. Having a physical location for your business
                allows you to put together the company that you want in an
                environment where employees can communicate with each other
                without having to go through any extra steps.
              </p>
              <a href="<?= base_url('product/list')?>" class="fw-medium link-effect"
                >Shop Now <i class="bi bi-arrow-right ms-2"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="section"
      style="
        background-image: url('<?= base_url()?>/public/assets/images/profile-bg-1.jpg');
        background-size: cover;
        background-position: center;
      "
    >
      <div class="bg-overlay bg-primary" style="opacity: 0.85"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="text-center">
              <h1 class="text-white lh-base text-capitalize">
                Don't miss out on special offers
              </h1>
              <p class="text-white-75 fs-15 mb-4 pb-2">
                Never Miss Anything From Toner By Signing Up To Our Newsletter.
              </p>
              <form action="#!">
                <div class="position-relative ecommerce-subscript">
                  <input
                    type="email"
                    class="form-control rounded-pill border-0"
                    placeholder="Enter your email"
                  />
                  <button
                    type="submit"
                    class="btn btn-darken-primary rounded-pill"
                  >
                    Subscript Now
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="position-relative py-5 border-bottom">
      <div class="container">
        <div class="row gy-4 gy-lg-0">
          <div class="col-lg-3 col-sm-6">
            <div class="d-flex align-items-center gap-3">
              <div class="flex-shrink-0">
                <img
                  src="<?= base_url()?>/public/assets/images/ecommerce/fast-delivery.png"
                  alt=""
                  class="avatar-sm"
                />
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                <p class="text-muted mb-0">Tell about your service.</p>
              </div>
            </div>
          </div>
          <!--end col-->
          <div class="col-lg-3 col-sm-6">
            <div class="d-flex align-items-center gap-3">
              <div class="flex-shrink-0">
                <img
                  src="<?= base_url()?>/public/assets/images/ecommerce/returns.png"
                  alt=""
                  class="avatar-sm"
                />
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-15">2 Days Return Policy</h5>
                <p class="text-muted mb-0">No question ask.</p>
              </div>
            </div>
          </div>
          <!--end col-->
          <div class="col-lg-3 col-sm-6">
            <div class="d-flex align-items-center gap-3">
              <div class="flex-shrink-0">
                <img
                  src="<?= base_url()?>/public/assets/images/ecommerce/guarantee-certificate.png"
                  alt=""
                  class="avatar-sm"
                />
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-15">Money Back Guarantee</h5>
                <p class="text-muted mb-0">Within 5 business days</p>
              </div>
            </div>
          </div>
          <!--end col-->
          <div class="col-lg-3 col-sm-6">
            <div class="d-flex align-items-center gap-3">
              <div class="flex-shrink-0">
                <img
                  src="<?= base_url()?>/public/assets/images/ecommerce/24-hours-support.png"
                  alt=""
                  class="avatar-sm"
                />
              </div>
              <div class="flex-grow-1">
                <h5 class="fs-15">24 X 7 Service</h5>
                <p class="text-muted mb-0">Online service for customer</p>
              </div>
            </div>
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>
    </section>