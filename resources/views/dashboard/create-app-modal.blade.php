<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-900px">
    <!--begin::Modal content-->
    <div class="modal-content">
      <!--begin::Modal header-->
      <div class="modal-header">
        <!--begin::Modal title-->
        <h2>Company settings, billing and tax data</h2>
        <!--end::Modal title-->
        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
          <span class="svg-icon svg-icon-1">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
              <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
            </svg>
          </span>
          <!--end::Svg Icon-->
        </div>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->
      <!--begin::Content-->
      <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
          <!--begin::Card-->
          <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
              <!--begin::Stepper-->
              <div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
                <!--begin::Nav-->
                <div class="stepper-nav mb-5">
                  <!--begin::Step 1-->
                  <div class="stepper-item current" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Account Type</h3>
                  </div>
                  <!--end::Step 1-->
                  <!--begin::Step 2-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Account Info</h3>
                  </div>
                  <!--end::Step 2-->
                  <!--begin::Step 3-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Business Info</h3>
                  </div>
                  <!--end::Step 3-->
                  <!--begin::Step 4-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Billing Details</h3>
                  </div>
                  <!--end::Step 4-->
                  <!--begin::Step 5-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Completed</h3>
                  </div>
                  <!--end::Step 5-->
                </div>
                <!--end::Nav-->
                <!--begin::Form-->
                <form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_create_account_form" method="POST" action="{{ route('app.store') }}" enctype="multipart/form-data">
                  @csrf
                  <!--begin::Step 1-->
                  <div class="current" data-kt-stepper-element="content">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                      <!--begin::Heading-->
                      <div class="pb-10 pb-lg-15">
                        <!--begin::Title-->
                        <h2 class="fw-bold d-flex align-items-center text-dark">Choose Account Type
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i>
                        </h2>
                        <!--end::Title-->
                        <!--begin::Notice-->
                        <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                          <a href="#" class="link-primary fw-bold">Help Page</a>.
                        </div>
                        <!--end::Notice-->
                      </div>
                      <!--end::Heading-->
                      <!--begin::Input group-->
                      <div class="fv-row">
                        <!--begin::Row-->
                        <div class="row">
                          <!--begin::Col-->
                          <div class="col-lg-6">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
                              <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                              <span class="svg-icon svg-icon-3x me-5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
                                  <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                              <!--begin::Info-->
                              <span class="d-block fw-semibold text-start">
                                <span class="text-dark fw-bold d-block fs-4 mb-2">Sole-Proprietor</span>
                                <span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
                              </span>
                              <!--end::Info-->
                            </label>
                            <!--end::Option-->
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-lg-6">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
                              <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                              <span class="svg-icon svg-icon-3x me-5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor" />
                                  <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor" />
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                              <!--begin::Info-->
                              <span class="d-block fw-semibold text-start">
                                <span class="text-dark fw-bold d-block fs-4 mb-2">Company Account</span>
                                <span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
                              </span>
                              <!--end::Info-->
                            </label>
                            <!--end::Option-->
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Row-->
                      </div>
                      <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Step 1-->
                  <!--begin::Step 2-->
                  <div data-kt-stepper-element="content">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                      <!--begin::Heading-->
                      <div class="pb-10 pb-lg-15">
                        <!--begin::Title-->
                        <h2 class="fw-bold text-dark">Account Info</h2>
                        <!--end::Title-->
                        <!--begin::Notice-->
                        <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                          <a href="#" class="link-primary fw-bold">Help Page</a>.
                        </div>
                        <!--end::Notice-->
                      </div>
                      <!--end::Heading-->
                      <!--begin::Card title-->
                      <div class="card-title">
                        <h2>Logo</h2>
                      </div>
                      <!--end::Card title-->
                      <!--begin::Card body-->
                      <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                        <!--begin::Image input placeholder-->
                        <style>
                          .image-input-placeholder {
                            background-image: url('https://business.getpits.com/front/demo1/dist/assets/media/svg/files/blank-image.svg');
                          }

                          [data-theme="dark"] .image-input-placeholder {
                            background-image: url('https://business.getpits.com/front/demo1/dist/assets/media/svg/files/blank-image-dark.svg');
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
                        <div class="text-muted fs-7">Establish the logo of your company, so that it appears on your invoices. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                        <!--end::Description-->
                      </div>
                      <!--end::Card body-->
                      <!--begin::Input group-->
                      <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                          <!--begin::Label-->
                          <label class="required fs-5 fw-semibold mb-2">First name</label>
                          <!--end::Label-->
                          <!--begin::Input-->
                          <input type="text" class="form-control form-control-solid" placeholder="John" name="first_name" />
                          <!--end::Input-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                          <!--end::Label-->
                          <label class="required fs-5 fw-semibold mb-2">Last name</label>
                          <!--end::Label-->
                          <!--end::Input-->
                          <input type="text" class="form-control form-control-solid" placeholder="Smith" name="last_name" />
                          <!--end::Input-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-5 form-label mb-2">Business name or Commercial Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="Pits Technologies S.L." value="" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group--><!--begin::Input group-->
                      <div class="mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-5 form-label mb-2">Mobile phone</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="tel" class="form-control form-control-lg form-control-solid" name="mobile_phone" placeholder="+34 610 626 234" value="" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-5 form-label mb-2">E-mail</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="email" class="form-control form-control-lg form-control-solid" name="email" placeholder="john@getpits.com" value="" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Step 2-->
                  <!--begin::Step 3-->
                  <div data-kt-stepper-element="content">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                      <!--begin::Heading-->
                      <div class="pb-10 pb-lg-12">
                        <!--begin::Title-->
                        <h2 class="fw-bold text-dark">Business Details</h2>
                        <!--end::Title-->
                        <!--begin::Notice-->
                        <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                          <a href="#" class="link-primary fw-bold">Help Page</a>.
                        </div>
                        <!--end::Notice-->
                      </div>
                      <!--end::Heading-->
                      <!--begin::Input group-->
                      <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="form-label required">Business Name or Commercial Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input name="business_name" class="form-control form-control-lg form-control-solid" placeholder="Pits Technologies S.L." value="" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-5 form-label mb-2">VAT ID</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid" name="vat_id" placeholder="ES-B0193134" value="" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-5 form-label mb-2">Business phone</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="tel" class="form-control form-control-lg form-control-solid" name="business_phone" placeholder="+34 914 318 222" value="" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="d-flex flex-column mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                          <span class="required">Country</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select name="country" data-control="select2" data-placeholder="Select a Country..." class="form-select form-select-solid">
                          <option value="">Select a Country...</option>
                          <option value="ES">Spain</option>
                          <option value="AF">Afghanistan</option>
                          <option value="AX">Aland Islands</option>
                          <option value="AL">Albania</option>
                          <option value="DZ">Algeria</option>
                          <option value="AS">American Samoa</option>
                          <option value="AD">Andorra</option>
                          <option value="AO">Angola</option>
                          <option value="AI">Anguilla</option>
                          <option value="AG">Antigua and Barbuda</option>
                          <option value="AR">Argentina</option>
                          <option value="AM">Armenia</option>
                          <option value="AW">Aruba</option>
                          <option value="AU">Australia</option>
                          <option value="AT">Austria</option>
                          <option value="AZ">Azerbaijan</option>
                          <option value="BS">Bahamas</option>
                          <option value="BH">Bahrain</option>
                          <option value="BD">Bangladesh</option>
                          <option value="BB">Barbados</option>
                          <option value="BY">Belarus</option>
                          <option value="BE">Belgium</option>
                          <option value="BZ">Belize</option>
                          <option value="BJ">Benin</option>
                          <option value="BM">Bermuda</option>
                          <option value="BT">Bhutan</option>
                          <option value="BO">Bolivia, Plurinational State of</option>
                          <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                          <option value="BA">Bosnia and Herzegovina</option>
                          <option value="BW">Botswana</option>
                          <option value="BR">Brazil</option>
                          <option value="IO">British Indian Ocean Territory</option>
                          <option value="BN">Brunei Darussalam</option>
                          <option value="BG">Bulgaria</option>
                          <option value="BF">Burkina Faso</option>
                          <option value="BI">Burundi</option>
                          <option value="KH">Cambodia</option>
                          <option value="CM">Cameroon</option>
                          <option value="CA">Canada</option>
                          <option value="CV">Cape Verde</option>
                          <option value="KY">Cayman Islands</option>
                          <option value="CF">Central African Republic</option>
                          <option value="TD">Chad</option>
                          <option value="CL">Chile</option>
                          <option value="CN">China</option>
                          <option value="CX">Christmas Island</option>
                          <option value="CC">Cocos (Keeling) Islands</option>
                          <option value="CO">Colombia</option>
                          <option value="KM">Comoros</option>
                          <option value="CK">Cook Islands</option>
                          <option value="CR">Costa Rica</option>
                          <option value="CI">Côte d'Ivoire</option>
                          <option value="HR">Croatia</option>
                          <option value="CU">Cuba</option>
                          <option value="CW">Curaçao</option>
                          <option value="CZ">Czech Republic</option>
                          <option value="DK">Denmark</option>
                          <option value="DJ">Djibouti</option>
                          <option value="DM">Dominica</option>
                          <option value="DO">Dominican Republic</option>
                          <option value="EC">Ecuador</option>
                          <option value="EG">Egypt</option>
                          <option value="SV">El Salvador</option>
                          <option value="GQ">Equatorial Guinea</option>
                          <option value="ER">Eritrea</option>
                          <option value="EE">Estonia</option>
                          <option value="ET">Ethiopia</option>
                          <option value="FK">Falkland Islands (Malvinas)</option>
                          <option value="FJ">Fiji</option>
                          <option value="FI">Finland</option>
                          <option value="FR">France</option>
                          <option value="PF">French Polynesia</option>
                          <option value="GA">Gabon</option>
                          <option value="GM">Gambia</option>
                          <option value="GE">Georgia</option>
                          <option value="DE">Germany</option>
                          <option value="GH">Ghana</option>
                          <option value="GI">Gibraltar</option>
                          <option value="GR">Greece</option>
                          <option value="GL">Greenland</option>
                          <option value="GD">Grenada</option>
                          <option value="GU">Guam</option>
                          <option value="GT">Guatemala</option>
                          <option value="GG">Guernsey</option>
                          <option value="GN">Guinea</option>
                          <option value="GW">Guinea-Bissau</option>
                          <option value="HT">Haiti</option>
                          <option value="VA">Holy See (Vatican City State)</option>
                          <option value="HN">Honduras</option>
                          <option value="HK">Hong Kong</option>
                          <option value="HU">Hungary</option>
                          <option value="IS">Iceland</option>
                          <option value="IN">India</option>
                          <option value="ID">Indonesia</option>
                          <option value="IR">Iran, Islamic Republic of</option>
                          <option value="IQ">Iraq</option>
                          <option value="IE">Ireland</option>
                          <option value="IM">Isle of Man</option>
                          <option value="IL">Israel</option>
                          <option value="IT">Italy</option>
                          <option value="JM">Jamaica</option>
                          <option value="JP">Japan</option>
                          <option value="JE">Jersey</option>
                          <option value="JO">Jordan</option>
                          <option value="KZ">Kazakhstan</option>
                          <option value="KE">Kenya</option>
                          <option value="KI">Kiribati</option>
                          <option value="KP">Korea, Democratic People's Republic of</option>
                          <option value="KW">Kuwait</option>
                          <option value="KG">Kyrgyzstan</option>
                          <option value="LA">Lao People's Democratic Republic</option>
                          <option value="LV">Latvia</option>
                          <option value="LB">Lebanon</option>
                          <option value="LS">Lesotho</option>
                          <option value="LR">Liberia</option>
                          <option value="LY">Libya</option>
                          <option value="LI">Liechtenstein</option>
                          <option value="LT">Lithuania</option>
                          <option value="LU">Luxembourg</option>
                          <option value="MO">Macao</option>
                          <option value="MG">Madagascar</option>
                          <option value="MW">Malawi</option>
                          <option value="MY">Malaysia</option>
                          <option value="MV">Maldives</option>
                          <option value="ML">Mali</option>
                          <option value="MT">Malta</option>
                          <option value="MH">Marshall Islands</option>
                          <option value="MQ">Martinique</option>
                          <option value="MR">Mauritania</option>
                          <option value="MU">Mauritius</option>
                          <option value="MX">Mexico</option>
                          <option value="FM">Micronesia, Federated States of</option>
                          <option value="MD">Moldova, Republic of</option>
                          <option value="MC">Monaco</option>
                          <option value="MN">Mongolia</option>
                          <option value="ME">Montenegro</option>
                          <option value="MS">Montserrat</option>
                          <option value="MA">Morocco</option>
                          <option value="MZ">Mozambique</option>
                          <option value="MM">Myanmar</option>
                          <option value="NA">Namibia</option>
                          <option value="NR">Nauru</option>
                          <option value="NP">Nepal</option>
                          <option value="NL">Netherlands</option>
                          <option value="NZ">New Zealand</option>
                          <option value="NI">Nicaragua</option>
                          <option value="NE">Niger</option>
                          <option value="NG">Nigeria</option>
                          <option value="NU">Niue</option>
                          <option value="NF">Norfolk Island</option>
                          <option value="MP">Northern Mariana Islands</option>
                          <option value="NO">Norway</option>
                          <option value="OM">Oman</option>
                          <option value="PK">Pakistan</option>
                          <option value="PW">Palau</option>
                          <option value="PS">Palestinian Territory, Occupied</option>
                          <option value="PA">Panama</option>
                          <option value="PG">Papua New Guinea</option>
                          <option value="PY">Paraguay</option>
                          <option value="PE">Peru</option>
                          <option value="PH">Philippines</option>
                          <option value="PL">Poland</option>
                          <option value="PT">Portugal</option>
                          <option value="PR">Puerto Rico</option>
                          <option value="QA">Qatar</option>
                          <option value="RO">Romania</option>
                          <option value="RU">Russian Federation</option>
                          <option value="RW">Rwanda</option>
                          <option value="BL">Saint Barthélemy</option>
                          <option value="KN">Saint Kitts and Nevis</option>
                          <option value="LC">Saint Lucia</option>
                          <option value="MF">Saint Martin (French part)</option>
                          <option value="VC">Saint Vincent and the Grenadines</option>
                          <option value="WS">Samoa</option>
                          <option value="SM">San Marino</option>
                          <option value="ST">Sao Tome and Principe</option>
                          <option value="SA">Saudi Arabia</option>
                          <option value="SN">Senegal</option>
                          <option value="RS">Serbia</option>
                          <option value="SC">Seychelles</option>
                          <option value="SL">Sierra Leone</option>
                          <option value="SG">Singapore</option>
                          <option value="SX">Sint Maarten (Dutch part)</option>
                          <option value="SK">Slovakia</option>
                          <option value="SI">Slovenia</option>
                          <option value="SB">Solomon Islands</option>
                          <option value="SO">Somalia</option>
                          <option value="ZA">South Africa</option>
                          <option value="KR">South Korea</option>
                          <option value="SS">South Sudan</option>
                          <option value="LK">Sri Lanka</option>
                          <option value="SD">Sudan</option>
                          <option value="SR">Suriname</option>
                          <option value="SZ">Swaziland</option>
                          <option value="SE">Sweden</option>
                          <option value="CH">Switzerland</option>
                          <option value="SY">Syrian Arab Republic</option>
                          <option value="TW">Taiwan, Province of China</option>
                          <option value="TJ">Tajikistan</option>
                          <option value="TZ">Tanzania, United Republic of</option>
                          <option value="TH">Thailand</option>
                          <option value="TG">Togo</option>
                          <option value="TK">Tokelau</option>
                          <option value="TO">Tonga</option>
                          <option value="TT">Trinidad and Tobago</option>
                          <option value="TN">Tunisia</option>
                          <option value="TR">Turkey</option>
                          <option value="TM">Turkmenistan</option>
                          <option value="TC">Turks and Caicos Islands</option>
                          <option value="TV">Tuvalu</option>
                          <option value="UG">Uganda</option>
                          <option value="UA">Ukraine</option>
                          <option value="AE">United Arab Emirates</option>
                          <option value="GB">United Kingdom</option>
                          <option value="US">United States</option>
                          <option value="UY">Uruguay</option>
                          <option value="UZ">Uzbekistan</option>
                          <option value="VU">Vanuatu</option>
                          <option value="VE">Venezuela, Bolivarian Republic of</option>
                          <option value="VN">Vietnam</option>
                          <option value="VI">Virgin Islands</option>
                          <option value="YE">Yemen</option>
                          <option value="ZM">Zambia</option>
                          <option value="ZW">Zimbabwe</option>
                        </select>
                        <!--end::Select-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="d-flex flex-column mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-5 fw-semibold mb-2">Fiscal address</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" placeholder="Calle Alcalá 58, 1 izq" name="address1" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="d-flex flex-column mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-5 fw-semibold mb-2">City</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" placeholder="Madrid" name="city" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="row g-9 mb-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                          <!--begin::Label-->
                          <label class="required fs-5 fw-semibold mb-2">State / Province</label>
                          <!--end::Label-->
                          <!--begin::Input-->
                          <input class="form-control form-control-solid" placeholder="Madrid" name="state" />
                          <!--end::Input-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                          <!--begin::Label-->
                          <label class="required fs-5 fw-semibold mb-2">Post Code</label>
                          <!--end::Label-->
                          <!--begin::Input-->
                          <input class="form-control form-control-solid" placeholder="28014" name="postcode" />
                          <!--end::Input-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Step 3-->
                  <!--begin::Step 4-->
                  <div data-kt-stepper-element="content">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                      <!--begin::Heading-->
                      <div class="pb-10 pb-lg-15">
                        <!--begin::Title-->
                        <h2 class="fw-bold text-dark">Billing Details</h2>
                        <!--end::Title-->
                        <!--begin::Notice-->
                        <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                          <a href="#" class="text-primary fw-bold">Help Page</a>.
                        </div>
                        <!--end::Notice-->
                      </div>
                      <!--end::Heading-->
                      <!--begin::Input group-->
                      <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                          <span class="required">Name of the bank</span>
                          <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a Bank Name"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="BBVA" />
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">IBAN</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                          <!--begin::Input-->
                          <input type="text" class="form-control form-control-solid" placeholder="ES79 2100 0813 6101 2345 6789" name="iban_number" value="" />
                          <!--end::Input-->
                          <!--begin::Card logos-->
                          <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                            <img src="https://business.getpits.com/front/demo1/dist/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                            <img src="https://business.getpits.com/front/demo1/dist/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                            <img src="https://business.getpits.com/front/demo1/dist/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                          </div>
                          <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                      </div>
                      <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Step 4-->
                  <!--begin::Step 5-->
                  <div data-kt-stepper-element="content">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                      <!--begin::Heading-->
                      <div class="pb-8 pb-lg-10">
                        <!--begin::Title-->
                        <h2 class="fw-bold text-dark">You can now make invoices, quotes in the platform!</h2>
                        <!--end::Title-->

                      </div>
                      <!--end::Heading-->
                      <!--begin::Body-->
                      <div class="mb-0">
                        <!--begin::Text-->
                        <div class="fs-6 text-gray-600 mb-5">Now you have additional functions to invoice, generate budgets and much more!</div>
                        <!--end::Text-->
                        <!--begin::Alert-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                          <!--begin::Icon-->
                          <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                          <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                              <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                              <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                          <!--end::Icon-->
                          <!--begin::Wrapper-->
                          <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-semibold">
                              <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                              <div class="fs-6 text-gray-700">For your attention, we remind you that you must register your mechanical workshop in the My Business section
                                <a id="kt_engage_demos_toggle" href="https://business.getpits.com/front/demo1/dist/utilities/wizards/vertical.html" class="fw-bold">Publish my mechanical workshop</a>
                              </div>
                            </div>
                            <!--end::Content-->
                          </div>
                          <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Alert-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Step 5-->
                  <!--begin::Actions-->
                  <div class="d-flex flex-stack pt-15">
                    <!--begin::Wrapper-->
                    <div class="mr-2">
                      <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                        <span class="svg-icon svg-icon-4 me-1">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                            <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->Back</button>
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Wrapper-->
                    <div>
                      <button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                        <span class="indicator-label">Submit
                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                          <span class="svg-icon svg-icon-3 ms-2 me-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                              <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                            </svg>
                          </span>
                          <!--end::Svg Icon--></span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon--></button>
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Actions-->
                </form>
                <!--end::Form-->
              </div>
              <!--end::Stepper-->
            </div>
            <!--end::Card body-->
          </div>
          <!--end::Card-->
        </div>
        <!--end::Content container-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Modal content-->
  </div>
  <!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->
@script