<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bold text-gray-700">My Business !</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <form action="{{ route('business.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body" id="kt_engage_demos_body">
                <!--begin::Content-->
                <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
                    <!--begin::Wrapper-->
                    <div class="mb-0">
                        <!--begin::Heading-->
                        <div class="mb-7">
                            <div class="d-flex flex-stack">
                                <h3 class="mb-0">Publish Workshop</h3>
                                <a href="https://getpits.com/es/explorar/" class="fw-semibold" target="_blank">Explore</a>
                            </div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Radio group-->
                        <div data-kt-buttons="true">
                            <!--begin::Radio button-->
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
                                <!--end::Description-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                        <input class="form-check-input" checked="checked" type="radio" name="plan" value="startup" />
                                    </div>
                                    <!--end::Radio-->

                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                            Publish Regular
                                        </h2>
                                        <div class="fw-semibold opacity-50">
                                            For a standard position and moderate requests
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Description-->

                                <!--begin::Price-->
                                <div class="ms-5">
                                    <span class="fs-2x fw-bold">FREE</span>
                                    <span class="mb-2"></span>
                                    <span class="fs-7 opacity-50">
                                        <span data-kt-element="period"></span>
                                    </span>
                                </div>
                                <!--end::Price-->
                            </label>
                            <!--end::Radio button-->

                            <!--begin::Radio button-->
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 active">
                                <!--end::Description-->
                                <div class="d-flex align-items-center me-2">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                        <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                    </div>
                                    <!--end::Radio-->

                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                            Extended Publish
                                            <span class="badge badge-light-success ms-2 fs-7">Most popular</span>
                                        </h2>
                                        <div class="fw-semibold opacity-50">
                                            For a privileged positioning and reception of more requests
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Description-->

                                <!--begin::Price-->
                                <div class="ms-5">
                                    <span class="fs-2x fw-bold">20</span>
                                    <span class="mb-2">€</span>
                                    <span class="fs-7 opacity-50">/
                                        <span data-kt-element="period">Month</span>
                                    </span>
                                </div>
                                <!--end::Price-->
                            </label>
                            <!--end::Radio button-->
                        </div>
                        <!--end::Radio group-->

                        <!--begin::Card body-->
                        <div class="pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Name Car Service</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="service_name" class="form-control mb-2" placeholder="Pit Stop" value="" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">A car service name is required and recommended to be unique.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Logo</h2>
                            </div>
                            <!--end::Card title-->
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url('assets/media/svg/files/blank-image.svg');
                                    }

                                    [data-theme="dark"] .image-input-placeholder {
                                        background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                    }
                                </style>
                                <!--end::Image input placeholder-->
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="logo_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Front</h2>
                            </div>
                            <!--end::Card title-->
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url('assets/media/svg/files/blank-image.svg');
                                    }

                                    [data-theme="dark"] .image-input-placeholder {
                                        background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                    }
                                </style>
                                <!--end::Image input placeholder-->
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="front" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="front_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Label-->
                            <label class="form-label d-block">Tagline</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Add tags to a your workshop.</div>
                            <!--end::Description-->
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mt-5">
                                <label for="kt_ecommerce_add_product_store_template" class="form-label">Price Range</label>
                                <!--begin::Select2-->
                                <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_store_template">
                                    <option value="lowcost" selected="selected">€</option>
                                    <option value="mediumcost">€€</option>
                                    <option value="highcost">€€€</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="mt-5 form-label">Description</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <div id="kt_ecommerce_add_category_description" name="kt_ecommerce_add_category_description" class="min-h-200px mb-2"></div>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a description to the workshop for better visibility.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">E-mail</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="email" name="email" class="form-control mb-2" placeholder="john@getpits.com" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Website</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="url" name="website" class="form-control mb-2" placeholder="https://getpits.com/" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Repeater-->
                            <div id="kt_docs_repeater_basic">
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div data-repeater-list="kt_docs_repeater_basic">
                                        <div data-repeater-item>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label class="form-label">Social:</label>
                                                    <select class="form-select" data-kt-repeater="select2" data-placeholder="Select an option">
                                                        <option value="0">Select...</option>
                                                        <option value="1">Facebook</option>
                                                        <option value="2">Instagram</option>
                                                        <option value="3">YouTube</option>
                                                        <option value="3">LinkedIn</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Link:</label>
                                                    <input type="url" class="form-control mb-2 mb-md-0" placeholder="Enter contact number" />
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                        <i class="la la-trash-o"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group mt-5">
                                    <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                        <i class="la la-plus"></i>Add
                                    </a>
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Repeater-->
                            <div class="form-floating border rounded mt-5 mb-5">
                                <select class="form-select select2-hidden-accessible" data-placeholder="Select country" id="kt_docs_select2_country" data-select2-id="select2-data-kt_docs_select2_country" tabindex="-1" aria-hidden="true">
                                    <option value="ES" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/spain.svg" selected="" data-select2-id="select2-data-451-3e4v">Spain</option>
                                    <option value="AF" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/afghanistan.svg" data-select2-id="select2-data-262-7737">Afghanistan</option>
                                    <option value="AX" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/aland-islands.svg" data-select2-id="select2-data-263-8icg">Aland Islands</option>
                                    <option value="AL" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/albania.svg" data-select2-id="select2-data-264-1s9u">Albania</option>
                                    <option value="DZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/algeria.svg" data-select2-id="select2-data-265-mmo6">Algeria</option>
                                    <option value="AS" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/american-samoa.svg" data-select2-id="select2-data-266-m6cb">American Samoa</option>
                                    <option value="AD" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/andorra.svg" data-select2-id="select2-data-267-y017">Andorra</option>
                                    <option value="AO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/angola.svg" data-select2-id="select2-data-268-uyep">Angola</option>
                                    <option value="AI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/anguilla.svg" data-select2-id="select2-data-269-5wj2">Anguilla</option>
                                    <option value="AG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/antigua-and-barbuda.svg" data-select2-id="select2-data-270-nz9v">Antigua and Barbuda</option>
                                    <option value="AR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/argentina.svg" data-select2-id="select2-data-271-salw">Argentina</option>
                                    <option value="AM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/armenia.svg" data-select2-id="select2-data-272-gjlu">Armenia</option>
                                    <option value="AW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/aruba.svg" data-select2-id="select2-data-273-gtzq">Aruba</option>
                                    <option value="AU" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/australia.svg" data-select2-id="select2-data-274-ddgp">Australia</option>
                                    <option value="AT" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/austria.svg" data-select2-id="select2-data-275-5vc7">Austria</option>
                                    <option value="AZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/azerbaijan.svg" data-select2-id="select2-data-276-4e2h">Azerbaijan</option>
                                    <option value="BS" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/bahamas.svg" data-select2-id="select2-data-277-ozp7">Bahamas</option>
                                    <option value="BH" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/bahrain.svg" data-select2-id="select2-data-278-6jgd">Bahrain</option>
                                    <option value="BD" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/bangladesh.svg" data-select2-id="select2-data-279-f82e">Bangladesh</option>
                                    <option value="BB" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/barbados.svg" data-select2-id="select2-data-280-lzal">Barbados</option>
                                    <option value="BY" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/belarus.svg" data-select2-id="select2-data-281-gism">Belarus</option>
                                    <option value="BE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/belgium.svg" data-select2-id="select2-data-282-v410">Belgium</option>
                                    <option value="BZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/belize.svg" data-select2-id="select2-data-283-pyrl">Belize</option>
                                    <option value="BJ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/benin.svg" data-select2-id="select2-data-284-oc6r">Benin</option>
                                    <option value="BM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/bermuda.svg" data-select2-id="select2-data-285-kafb">Bermuda</option>
                                    <option value="BT" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/bhutan.svg" data-select2-id="select2-data-286-lo6x">Bhutan</option>
                                    <option value="BO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/bolivia.svg" data-select2-id="select2-data-287-lv4b">Bolivia, Plurinational State of</option>
                                    <option value="BQ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/bonaire.svg" data-select2-id="select2-data-288-zk5r">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/bosnia-and-herzegovina.svg" data-select2-id="select2-data-289-yiss">Bosnia and Herzegovina</option>
                                    <option value="BW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/botswana.svg" data-select2-id="select2-data-290-9zo1">Botswana</option>
                                    <option value="BR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/brazil.svg" data-select2-id="select2-data-291-k8xk">Brazil</option>
                                    <option value="IO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/british-indian-ocean-territory.svg" data-select2-id="select2-data-292-yzrk">British Indian Ocean Territory</option>
                                    <option value="BN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/brunei.svg" data-select2-id="select2-data-293-w0ll">Brunei Darussalam</option>
                                    <option value="BG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/bulgaria.svg" data-select2-id="select2-data-294-n7rd">Bulgaria</option>
                                    <option value="BF" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/burkina-faso.svg" data-select2-id="select2-data-295-j8yu">Burkina Faso</option>
                                    <option value="BI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/burundi.svg" data-select2-id="select2-data-296-zn05">Burundi</option>
                                    <option value="KH" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/cambodia.svg" data-select2-id="select2-data-297-yvay">Cambodia</option>
                                    <option value="CM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/cameroon.svg" data-select2-id="select2-data-298-abji">Cameroon</option>
                                    <option value="CA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/canada.svg" data-select2-id="select2-data-299-law2">Canada</option>
                                    <option value="CV" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/cape-verde.svg" data-select2-id="select2-data-300-jvgt">Cape Verde</option>
                                    <option value="KY" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/cayman-islands.svg" data-select2-id="select2-data-301-xx6d">Cayman Islands</option>
                                    <option value="CF" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/central-african-republic.svg" data-select2-id="select2-data-302-5k8y">Central African Republic</option>
                                    <option value="TD" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/chad.svg" data-select2-id="select2-data-303-6l1o">Chad</option>
                                    <option value="CL" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/chile.svg" data-select2-id="select2-data-304-tyxi">Chile</option>
                                    <option value="CN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/china.svg" data-select2-id="select2-data-305-bgd4">China</option>
                                    <option value="CX" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/christmas-island.svg" data-select2-id="select2-data-306-u484">Christmas Island</option>
                                    <option value="CC" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/cocos-island.svg" data-select2-id="select2-data-307-5419">Cocos (Keeling) Islands</option>
                                    <option value="CO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/colombia.svg" data-select2-id="select2-data-308-yd6y">Colombia</option>
                                    <option value="KM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/comoros.svg" data-select2-id="select2-data-309-o71p">Comoros</option>
                                    <option value="CK" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/cook-islands.svg" data-select2-id="select2-data-310-49p7">Cook Islands</option>
                                    <option value="CR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/costa-rica.svg" data-select2-id="select2-data-311-vd7u">Costa Rica</option>
                                    <option value="CI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/ivory-coast.svg" data-select2-id="select2-data-312-jtom">Côte d'Ivoire</option>
                                    <option value="HR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/croatia.svg" data-select2-id="select2-data-313-jlkq">Croatia</option>
                                    <option value="CU" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/cuba.svg" data-select2-id="select2-data-314-8dy6">Cuba</option>
                                    <option value="CW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/curacao.svg" data-select2-id="select2-data-315-rvox">Curaçao</option>
                                    <option value="CZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/czech-republic.svg" data-select2-id="select2-data-316-qu9f">Czech Republic</option>
                                    <option value="DK" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/denmark.svg" data-select2-id="select2-data-317-q03r">Denmark</option>
                                    <option value="DJ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/djibouti.svg" data-select2-id="select2-data-318-yx4r">Djibouti</option>
                                    <option value="DM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/dominica.svg" data-select2-id="select2-data-319-toem">Dominica</option>
                                    <option value="DO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/dominican-republic.svg" data-select2-id="select2-data-320-hbtx">Dominican Republic</option>
                                    <option value="EC" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/ecuador.svg" data-select2-id="select2-data-321-sac4">Ecuador</option>
                                    <option value="EG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/egypt.svg" data-select2-id="select2-data-322-crvw">Egypt</option>
                                    <option value="SV" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/el-salvador.svg" data-select2-id="select2-data-323-nn0w">El Salvador</option>
                                    <option value="GQ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/equatorial-guinea.svg" data-select2-id="select2-data-324-ln5x">Equatorial Guinea</option>
                                    <option value="ER" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/eritrea.svg" data-select2-id="select2-data-325-0dad">Eritrea</option>
                                    <option value="EE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/estonia.svg" data-select2-id="select2-data-326-3fn2">Estonia</option>
                                    <option value="ET" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/ethiopia.svg" data-select2-id="select2-data-327-5a3b">Ethiopia</option>
                                    <option value="FK" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/falkland-islands.svg" data-select2-id="select2-data-328-9byz">Falkland Islands (Malvinas)</option>
                                    <option value="FJ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/fiji.svg" data-select2-id="select2-data-329-xo6x">Fiji</option>
                                    <option value="FI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/finland.svg" data-select2-id="select2-data-330-ckgw">Finland</option>
                                    <option value="FR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/france.svg" data-select2-id="select2-data-331-onyh">France</option>
                                    <option value="PF" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/french-polynesia.svg" data-select2-id="select2-data-332-m7wj">French Polynesia</option>
                                    <option value="GA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/gabon.svg" data-select2-id="select2-data-333-ir8g">Gabon</option>
                                    <option value="GM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/gambia.svg" data-select2-id="select2-data-334-pmo6">Gambia</option>
                                    <option value="GE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/georgia.svg" data-select2-id="select2-data-335-pt98">Georgia</option>
                                    <option value="DE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/germany.svg" data-select2-id="select2-data-336-t6wt">Germany</option>
                                    <option value="GH" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/ghana.svg" data-select2-id="select2-data-337-3dxt">Ghana</option>
                                    <option value="GI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/gibraltar.svg" data-select2-id="select2-data-338-ite7">Gibraltar</option>
                                    <option value="GR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/greece.svg" data-select2-id="select2-data-339-ic8y">Greece</option>
                                    <option value="GL" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/greenland.svg" data-select2-id="select2-data-340-sk0n">Greenland</option>
                                    <option value="GD" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/grenada.svg" data-select2-id="select2-data-341-iema">Grenada</option>
                                    <option value="GU" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/guam.svg" data-select2-id="select2-data-342-emq2">Guam</option>
                                    <option value="GT" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/guatemala.svg" data-select2-id="select2-data-343-8u8v">Guatemala</option>
                                    <option value="GG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/guernsey.svg" data-select2-id="select2-data-344-9n19">Guernsey</option>
                                    <option value="GN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/guinea.svg" data-select2-id="select2-data-345-a95u">Guinea</option>
                                    <option value="GW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/guinea-bissau.svg" data-select2-id="select2-data-346-p8xl">Guinea-Bissau</option>
                                    <option value="HT" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/haiti.svg" data-select2-id="select2-data-347-akyi">Haiti</option>
                                    <option value="VA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/vatican-city.svg" data-select2-id="select2-data-348-4s5c">Holy See (Vatican City State)</option>
                                    <option value="HN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/honduras.svg" data-select2-id="select2-data-349-mwro">Honduras</option>
                                    <option value="HK" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/hong-kong.svg" data-select2-id="select2-data-350-ck6e">Hong Kong</option>
                                    <option value="HU" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/hungary.svg" data-select2-id="select2-data-351-fvcv">Hungary</option>
                                    <option value="IS" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/iceland.svg" data-select2-id="select2-data-352-h75d">Iceland</option>
                                    <option value="IN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/india.svg" data-select2-id="select2-data-353-k1bp">India</option>
                                    <option value="ID" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/indonesia.svg" data-select2-id="select2-data-354-tbpr">Indonesia</option>
                                    <option value="IR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/iran.svg" data-select2-id="select2-data-355-tpkv">Iran, Islamic Republic of</option>
                                    <option value="IQ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/iraq.svg" data-select2-id="select2-data-356-bibw">Iraq</option>
                                    <option value="IE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/ireland.svg" data-select2-id="select2-data-357-dn5u">Ireland</option>
                                    <option value="IM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/isle-of-man.svg" data-select2-id="select2-data-358-v4uq">Isle of Man</option>
                                    <option value="IL" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/israel.svg" data-select2-id="select2-data-359-tqtd">Israel</option>
                                    <option value="IT" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/italy.svg" data-select2-id="select2-data-360-qc9r">Italy</option>
                                    <option value="JM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/jamaica.svg" data-select2-id="select2-data-361-38sj">Jamaica</option>
                                    <option value="JP" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/japan.svg" data-select2-id="select2-data-362-14xu">Japan</option>
                                    <option value="JE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/jersey.svg" data-select2-id="select2-data-363-ar4x">Jersey</option>
                                    <option value="JO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/jordan.svg" data-select2-id="select2-data-364-bgme">Jordan</option>
                                    <option value="KZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/kazakhstan.svg" data-select2-id="select2-data-365-4up8">Kazakhstan</option>
                                    <option value="KE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/kenya.svg" data-select2-id="select2-data-366-0tth">Kenya</option>
                                    <option value="KI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/kiribati.svg" data-select2-id="select2-data-367-c2cc">Kiribati</option>
                                    <option value="KP" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/north-korea.svg" data-select2-id="select2-data-368-mahi">Korea, Democratic People's Republic of</option>
                                    <option value="KW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/kuwait.svg" data-select2-id="select2-data-369-wxaq">Kuwait</option>
                                    <option value="KG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/kyrgyzstan.svg" data-select2-id="select2-data-370-p741">Kyrgyzstan</option>
                                    <option value="LA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/laos.svg" data-select2-id="select2-data-371-iyks">Lao People's Democratic Republic</option>
                                    <option value="LV" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/latvia.svg" data-select2-id="select2-data-372-vdt1">Latvia</option>
                                    <option value="LB" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/lebanon.svg" data-select2-id="select2-data-373-tk69">Lebanon</option>
                                    <option value="LS" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/lesotho.svg" data-select2-id="select2-data-374-wpva">Lesotho</option>
                                    <option value="LR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/liberia.svg" data-select2-id="select2-data-375-acuj">Liberia</option>
                                    <option value="LY" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/libya.svg" data-select2-id="select2-data-376-37rt">Libya</option>
                                    <option value="LI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/liechtenstein.svg" data-select2-id="select2-data-377-p2dj">Liechtenstein</option>
                                    <option value="LT" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/lithuania.svg" data-select2-id="select2-data-378-yqpy">Lithuania</option>
                                    <option value="LU" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/luxembourg.svg" data-select2-id="select2-data-379-pjgu">Luxembourg</option>
                                    <option value="MO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/macao.svg" data-select2-id="select2-data-380-innn">Macao</option>
                                    <option value="MG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/madagascar.svg" data-select2-id="select2-data-381-izor">Madagascar</option>
                                    <option value="MW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/malawi.svg" data-select2-id="select2-data-382-owjo">Malawi</option>
                                    <option value="MY" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/malaysia.svg" data-select2-id="select2-data-383-1uvj">Malaysia</option>
                                    <option value="MV" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/maldives.svg" data-select2-id="select2-data-384-0hdo">Maldives</option>
                                    <option value="ML" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/mali.svg" data-select2-id="select2-data-385-ip9f">Mali</option>
                                    <option value="MT" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/malta.svg" data-select2-id="select2-data-386-84dy">Malta</option>
                                    <option value="MH" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/marshall-island.svg" data-select2-id="select2-data-387-b9zc">Marshall Islands</option>
                                    <option value="MQ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/martinique.svg" data-select2-id="select2-data-388-c9w9">Martinique</option>
                                    <option value="MR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/mauritania.svg" data-select2-id="select2-data-389-5t3p">Mauritania</option>
                                    <option value="MU" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/mauritius.svg" data-select2-id="select2-data-390-jdnt">Mauritius</option>
                                    <option value="MX" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/mexico.svg" data-select2-id="select2-data-391-0pac">Mexico</option>
                                    <option value="FM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/micronesia.svg" data-select2-id="select2-data-392-2amo">Micronesia, Federated States of</option>
                                    <option value="MD" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/moldova.svg" data-select2-id="select2-data-393-p126">Moldova, Republic of</option>
                                    <option value="MC" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/monaco.svg" data-select2-id="select2-data-394-cc74">Monaco</option>
                                    <option value="MN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/mongolia.svg" data-select2-id="select2-data-395-qtde">Mongolia</option>
                                    <option value="ME" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/montenegro.svg" data-select2-id="select2-data-396-c373">Montenegro</option>
                                    <option value="MS" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/montserrat.svg" data-select2-id="select2-data-397-64ab">Montserrat</option>
                                    <option value="MA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/morocco.svg" data-select2-id="select2-data-398-3wa6">Morocco</option>
                                    <option value="MZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/mozambique.svg" data-select2-id="select2-data-399-zouk">Mozambique</option>
                                    <option value="MM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/myanmar.svg" data-select2-id="select2-data-400-r4ht">Myanmar</option>
                                    <option value="NA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/namibia.svg" data-select2-id="select2-data-401-4ji4">Namibia</option>
                                    <option value="NR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/nauru.svg" data-select2-id="select2-data-402-msv2">Nauru</option>
                                    <option value="NP" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/nepal.svg" data-select2-id="select2-data-403-5s0f">Nepal</option>
                                    <option value="NL" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/netherlands.svg" data-select2-id="select2-data-404-lret">Netherlands</option>
                                    <option value="NZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/new-zealand.svg" data-select2-id="select2-data-405-p7op">New Zealand</option>
                                    <option value="NI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/nicaragua.svg" data-select2-id="select2-data-406-6ph0">Nicaragua</option>
                                    <option value="NE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/niger.svg" data-select2-id="select2-data-407-1uhn">Niger</option>
                                    <option value="NG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/nigeria.svg" data-select2-id="select2-data-408-bdq8">Nigeria</option>
                                    <option value="NU" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/niue.svg" data-select2-id="select2-data-409-tg5u">Niue</option>
                                    <option value="NF" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/norfolk-island.svg" data-select2-id="select2-data-410-59ej">Norfolk Island</option>
                                    <option value="MP" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/northern-mariana-islands.svg" data-select2-id="select2-data-411-9z4k">Northern Mariana Islands</option>
                                    <option value="NO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/norway.svg" data-select2-id="select2-data-412-j3d0">Norway</option>
                                    <option value="OM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/oman.svg" data-select2-id="select2-data-413-c07i">Oman</option>
                                    <option value="PK" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/pakistan.svg" data-select2-id="select2-data-414-i6ol">Pakistan</option>
                                    <option value="PW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/palau.svg" data-select2-id="select2-data-415-6u81">Palau</option>
                                    <option value="PS" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/palestine.svg" data-select2-id="select2-data-416-3qli">Palestinian Territory, Occupied</option>
                                    <option value="PA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/panama.svg" data-select2-id="select2-data-417-vh12">Panama</option>
                                    <option value="PG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/papua-new-guinea.svg" data-select2-id="select2-data-418-c1zk">Papua New Guinea</option>
                                    <option value="PY" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/paraguay.svg" data-select2-id="select2-data-419-nk9g">Paraguay</option>
                                    <option value="PE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/peru.svg" data-select2-id="select2-data-420-wjsa">Peru</option>
                                    <option value="PH" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/philippines.svg" data-select2-id="select2-data-421-iwfr">Philippines</option>
                                    <option value="PL" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/poland.svg" data-select2-id="select2-data-422-oini">Poland</option>
                                    <option value="PT" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/portugal.svg" data-select2-id="select2-data-423-24nh">Portugal</option>
                                    <option value="PR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/puerto-rico.svg" data-select2-id="select2-data-424-0q0b">Puerto Rico</option>
                                    <option value="QA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/qatar.svg" data-select2-id="select2-data-425-jxw9">Qatar</option>
                                    <option value="RO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/romania.svg" data-select2-id="select2-data-426-hedg">Romania</option>
                                    <option value="RU" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/russia.svg" data-select2-id="select2-data-427-wpdo">Russian Federation</option>
                                    <option value="RW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/rwanda.svg" data-select2-id="select2-data-428-5c4q">Rwanda</option>
                                    <option value="BL" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/st-barts.svg" data-select2-id="select2-data-429-ahph">Saint Barthélemy</option>
                                    <option value="KN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/saint-kitts-and-nevis.svg" data-select2-id="select2-data-430-gr7z">Saint Kitts and Nevis</option>
                                    <option value="LC" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/st-lucia.svg" data-select2-id="select2-data-431-uimr">Saint Lucia</option>
                                    <option value="MF" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/sint-maarten.svg" data-select2-id="select2-data-432-oewd">Saint Martin (French part)</option>
                                    <option value="VC" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/st-vincent-and-the-grenadines.svg" data-select2-id="select2-data-433-xm6d">Saint Vincent and the Grenadines</option>
                                    <option value="WS" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/samoa.svg" data-select2-id="select2-data-434-v6va">Samoa</option>
                                    <option value="SM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/san-marino.svg" data-select2-id="select2-data-435-ew09">San Marino</option>
                                    <option value="ST" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/sao-tome-and-prince.svg" data-select2-id="select2-data-436-q2zz">Sao Tome and Principe</option>
                                    <option value="SA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/saudi-arabia.svg" data-select2-id="select2-data-437-09ku">Saudi Arabia</option>
                                    <option value="SN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/senegal.svg" data-select2-id="select2-data-438-w509">Senegal</option>
                                    <option value="RS" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/serbia.svg" data-select2-id="select2-data-439-s9h1">Serbia</option>
                                    <option value="SC" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/seychelles.svg" data-select2-id="select2-data-440-qn30">Seychelles</option>
                                    <option value="SL" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/sierra-leone.svg" data-select2-id="select2-data-441-5sls">Sierra Leone</option>
                                    <option value="SG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/singapore.svg" data-select2-id="select2-data-442-dpfm">Singapore</option>
                                    <option value="SX" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/sint-maarten.svg" data-select2-id="select2-data-443-hdg3">Sint Maarten (Dutch part)</option>
                                    <option value="SK" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/slovakia.svg" data-select2-id="select2-data-444-jidi">Slovakia</option>
                                    <option value="SI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/slovenia.svg" data-select2-id="select2-data-445-4434">Slovenia</option>
                                    <option value="SB" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/solomon-islands.svg" data-select2-id="select2-data-446-upj7">Solomon Islands</option>
                                    <option value="SO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/somalia.svg" data-select2-id="select2-data-447-mlmp">Somalia</option>
                                    <option value="ZA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/south-africa.svg" data-select2-id="select2-data-448-amar">South Africa</option>
                                    <option value="KR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/south-korea.svg" data-select2-id="select2-data-449-ymkt">South Korea</option>
                                    <option value="SS" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/south-sudan.svg" data-select2-id="select2-data-450-rk3p">South Sudan</option>
                                    <option value="LK" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/sri-lanka.svg" data-select2-id="select2-data-452-biz8">Sri Lanka</option>
                                    <option value="SD" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/sudan.svg" data-select2-id="select2-data-453-8ech">Sudan</option>
                                    <option value="SR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/suriname.svg" data-select2-id="select2-data-454-ur92">Suriname</option>
                                    <option value="SZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/swaziland.svg" data-select2-id="select2-data-455-sgyg">Swaziland</option>
                                    <option value="SE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/sweden.svg" data-select2-id="select2-data-456-xjeb">Sweden</option>
                                    <option value="CH" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/switzerland.svg" data-select2-id="select2-data-457-vlb2">Switzerland</option>
                                    <option value="SY" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/syria.svg" data-select2-id="select2-data-458-hir3">Syrian Arab Republic</option>
                                    <option value="TW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/taiwan.svg" data-select2-id="select2-data-459-56m3">Taiwan, Province of China</option>
                                    <option value="TJ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/tajikistan.svg" data-select2-id="select2-data-460-pzf1">Tajikistan</option>
                                    <option value="TZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/tanzania.svg" data-select2-id="select2-data-461-mwhc">Tanzania, United Republic of</option>
                                    <option value="TH" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/thailand.svg" data-select2-id="select2-data-462-s6l9">Thailand</option>
                                    <option value="TG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/togo.svg" data-select2-id="select2-data-463-fz08">Togo</option>
                                    <option value="TK" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/tokelau.svg" data-select2-id="select2-data-464-azob">Tokelau</option>
                                    <option value="TO" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/tonga.svg" data-select2-id="select2-data-465-ye1u">Tonga</option>
                                    <option value="TT" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/trinidad-and-tobago.svg" data-select2-id="select2-data-466-jujx">Trinidad and Tobago</option>
                                    <option value="TN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/tunisia.svg" data-select2-id="select2-data-467-4veh">Tunisia</option>
                                    <option value="TR" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/turkey.svg" data-select2-id="select2-data-468-169t">Turkey</option>
                                    <option value="TM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/turkmenistan.svg" data-select2-id="select2-data-469-9nfi">Turkmenistan</option>
                                    <option value="TC" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/turks-and-caicos.svg" data-select2-id="select2-data-470-l1l6">Turks and Caicos Islands</option>
                                    <option value="TV" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/tuvalu.svg" data-select2-id="select2-data-471-h7sl">Tuvalu</option>
                                    <option value="UG" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/uganda.svg" data-select2-id="select2-data-472-nniq">Uganda</option>
                                    <option value="UA" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/ukraine.svg" data-select2-id="select2-data-473-stcv">Ukraine</option>
                                    <option value="AE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/united-arab-emirates.svg" data-select2-id="select2-data-474-qto2">United Arab Emirates</option>
                                    <option value="GB" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/united-kingdom.svg" data-select2-id="select2-data-475-7j7s">United Kingdom</option>
                                    <option value="US" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/united-states.svg" data-select2-id="select2-data-70-mfup">United States</option>
                                    <option value="UY" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/uruguay.svg" data-select2-id="select2-data-476-as2l">Uruguay</option>
                                    <option value="UZ" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/uzbekistan.svg" data-select2-id="select2-data-477-444k">Uzbekistan</option>
                                    <option value="VU" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/vanuatu.svg" data-select2-id="select2-data-478-u6vq">Vanuatu</option>
                                    <option value="VE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/venezuela.svg" data-select2-id="select2-data-479-k89u">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/vietnam.svg" data-select2-id="select2-data-480-hjrj">Vietnam</option>
                                    <option value="VI" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/virgin-islands.svg" data-select2-id="select2-data-481-9q99">Virgin Islands</option>
                                    <option value="YE" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/yemen.svg" data-select2-id="select2-data-482-xr5s">Yemen</option>
                                    <option value="ZM" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/zambia.svg" data-select2-id="select2-data-483-x3bx">Zambia</option>
                                    <option value="ZW" data-kt-select2-country="https://business.getpits.com/front/demo1/dist/assets/media/flags/zimbabwe.svg" data-select2-id="select2-data-484-5dn4">Zimbabwe</option>
                                </select>
                                <label for="kt_docs_select2_country">Select a country</label>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Input group-->
                        <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">Address</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="adress" class="form-control mb-2" placeholder="Calle Alcalá 58, 1" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">City</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="city" class="form-control mb-2" placeholder="Madrid" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">State / Province</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="state_province" class="form-control mb-2" placeholder="Madrid" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">Post Code</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="postcode" class="form-control mb-2" placeholder="28014" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="form-label">Services offered</label>
                            <input class="form-control" value="Revision, Balanced and Parallel, Air conditioning, AdBlue, Battery change, Change brake pads, Electronic diagnosis, Headlight polishing, Maintenance plan, Pre-MOT, MOT, Nitrogen tire inflation, Oil and filter change, Puncture repair, Refrigerant, Shock absorber change, Fast tire change, Tire hotel, TPMS" id="kt_tagify_1" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="form-label">Type of mechanical workshop</label>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">General service</label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">Fast service</label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">Vehicle laundry</label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">Race car preparation</label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">Electrical service</label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">Glass service</label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">Lubrication service</label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">Sheet metal and paint</label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">Tire service</label>
                            </div>
                            <div class="form-check form-switch form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" value="" id="flexSwitchDefault" />
                                <label class="form-check-label" for="flexSwitchDefault">Vehicle restoration</label>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="form-label">Aditional Services</label>
                            <input class="form-control form-control-solid" value="Accepts Credit Cards" id="kt_tagify_6" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="form-label">Insurers</label>
                            <input class="form-control d-flex align-items-center" value="" id="kt_tagify_users" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label class="form-label">Brands</label>
                        <!--end::Label-->
                        <!--begin::Select2-->
                        <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                            <option value="ABARTH">ABARTH</option>
                            <option value="ALFA ROMEO">ALFA ROMEO</option>
                            <option value="Headphones">ACURA</option>
                            <option value="Footwear">AMC</option>
                            <option value="Cameras">ASTON MARTIN</option>
                            <option value="Shirts">AUDI</option>
                            <option value="Household">BENTLEY</option>
                            <option value="Handbags">BMW</option>
                            <option value="Wines">BUICK</option>
                            <option value="Sandals">CADILLAC</option>
                            <option value="Sandals">CHEVROLET</option>
                            <option value="Sandals">CHRYSLER</option>
                            <option value="Sandals">CUPRA</option>
                            <option value="Sandals">DAEWOO</option>
                            <option value="Sandals">DAIHATSU</option>
                            <option value="Sandals">DAIMLER</option>
                            <option value="Sandals">DODGE</option>
                            <option value="Sandals">FERRARI</option>
                            <option value="Sandals">FIAT</option>
                            <option value="Sandals">FORD</option>
                            <option value="Sandals">GMC</option>
                            <option value="Sandals">HONDA</option>
                            <option value="Sandals">HUMMER</option>
                            <option value="Sandals">HYUNDAI</option>
                            <option value="Sandals">INFINITI</option>
                            <option value="Sandals">ISUZU</option>
                            <option value="Sandals">JAGUAR</option>
                            <option value="Sandals">JEEP</option>
                            <option value="Sandals">KIA</option>
                            <option value="Sandals">LAMBORGHINI</option>
                            <option value="Sandals">LAND ROVER</option>
                            <option value="Sandals">LEXUS</option>
                            <option value="Sandals">LINCOLN</option>
                            <option value="Sandals">MERCEDES-BENZ</option>
                            <option value="Sandals">MCLAREN</option>
                        </select>
                        <!--end::Select2-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                        <!--end::Description-->
                        <!--end::Input group-->
                        <!--begin::Purchase-->
                        <button type="submit" class="btn btn-primary fw-bold mb-15 w-100">Publish Now</button>
                        <!--end::Purchase-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
        </form>

        <!--end::Body-->

    </div>
    <!--end::Card-->
</div>