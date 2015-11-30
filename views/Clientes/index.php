<?php require('views/header.php'); ?>
<?php require('views/required/sidebar.php'); ?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<div class="page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <h3 class="page-title">
                        Clientes <small>Area de clientes</small>
                    </h3>
                </div>
            </div>
            <div id="dashboard">
                <!-- BEGIN CONTENT-->
                <div class="span12">
                    <div class="portlet box purple" id="form_wizard_1">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-reorder"></i> &nbsp;&nbsp;&nbsp;Agregar personas - <span class="step-title">Paso 1 de 4</span>
                            </div>
                            <div class="tools hidden-phone">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body ">
                            <form action="#" class="form-horizontal" id="submit_form" novalidate="novalidate">
                                <div class="form-wizard">
                                    <div class="navbar steps">
                                        <div class="navbar-inner">
                                            <ul class="row-fluid nav nav-pills">
                                                <li class="span3 active">
                                                    <a href="#tab1" data-toggle="tab" class="step active">
                                                        <span class="number">1</span>
                                                        <span class="desc"><i class="icon-ok"></i> Account Setup</span>
                                                    </a>
                                                </li>
                                                <li class="span3">
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number">2</span>
                                                        <span class="desc"><i class="icon-ok"></i> Profile Setup</span>
                                                    </a>
                                                </li>
                                                <li class="span3">
                                                    <a href="#tab3" data-toggle="tab" class="step">
                                                        <span class="number">3</span>
                                                        <span class="desc"><i class="icon-ok"></i> Billing Setup</span>
                                                    </a>
                                                </li>
                                                <li class="span3">
                                                    <a href="#tab4" data-toggle="tab" class="step">
                                                        <span class="number">4</span>
                                                        <span class="desc"><i class="icon-ok"></i> Confirm</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="bar" class="progress progress-success progress-striped">
                                        <div class="bar" style="width: 25%;"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="alert alert-error hide">
                                            <button class="close" data-dismiss="alert"></button>
                                            You have some form errors. Please check below.
                                        </div>
                                        <div class="alert alert-success hide">
                                            <button class="close" data-dismiss="alert"></button>
                                            Your form validation is successful!
                                        </div>
                                        <div class="tab-pane active" id="tab1">
                                            <h3 class="block">Provide your account details</h3>
                                            <div class="control-group">
                                                <label class="control-label">Username<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="username">
                                                    <span class="help-inline">Provide your username</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Password<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="password" class="span6 m-wrap" name="password" id="submit_form_password">
                                                    <span class="help-inline">Provide your username</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Confirm Password<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="password" class="span6 m-wrap" name="rpassword">
                                                    <span class="help-inline">Confirm your password</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Email<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="email">
                                                    <span class="help-inline">Provide your email address</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <h3 class="block">Provide your profile details</h3>
                                            <div class="control-group">
                                                <label class="control-label">Fullname<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="fullname">
                                                    <span class="help-inline">Provide your fullname</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Phone Number<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="phone">
                                                    <span class="help-inline">Provide your phone number</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Gender<span class="required">*</span></label>
                                                <div class="controls">
                                                    <label class="radio">
                                                        <div class="radio"><span><input type="radio" name="gender" value="M" data-title="Male"></span></div>
                                                        Male
                                                    </label>
                                                    <div class="clearfix"></div>
                                                    <label class="radio">
                                                        <div class="radio"><span><input type="radio" name="gender" value="F" data-title="Female"></span></div>
                                                        Female
                                                    </label>
                                                    <div id="form_gender_error"></div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Address<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="address">
                                                    <span class="help-inline">Provide your street address</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">City/Town<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="city">
                                                    <span class="help-inline">Provide your city or town</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Country</label>
                                                <div class="controls">
                                                    <div class="select2-container span6" id="s2id_country_list"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span>Select</span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1"><div class="select2-drop select2-with-searchbox" style="display:none">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div>
                                                    <select name="country" id="country_list" class="span6 select2-offscreen" tabindex="-1">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Remarks</label>
                                                <div class="controls">
                                                    <textarea class="span6 m-wrap" rows="3" name="remarks"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <h3 class="block">Provide your billing and credit card details</h3>
                                            <div class="control-group">
                                                <label class="control-label">Card Holder Name<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="card_name">
                                                    <span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Card Number<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" class="span6 m-wrap" name="card_number">
                                                    <span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">CVC<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" placeholder="" class="m-wrap" name="card_cvc">
                                                    <span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Expiration(MM/YYYY)<span class="required">*</span></label>
                                                <div class="controls">
                                                    <input type="text" placeholder="MM" maxlength="2" class="m-wrap small" name="card_expiry_mm">
                                                    <input type="text" placeholder="YYYY" maxlength="4" class="m-wrap small" name="card_expiry_yyyy">
                                                    <span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Payment Options<span class="required">*</span></label>
                                                <div class="controls">
                                                    <label class="checkbox line">
                                                        <div class="checker"><span><input type="checkbox" name="payment[]" value="1" data-title="Auto-Pay with this Credit Card."></span></div> Auto-Pay with this Credit Card
                                                    </label>
                                                    <label class="checkbox line">
                                                        <div class="checker"><span><input type="checkbox" name="payment[]" value="2" data-title="Email me monthly billing."></span></div> Email me monthly billing
                                                    </label>
                                                    <div id="form_payment_error"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <h3 class="block">Confirm your account</h3>
                                            <h4 class="form-section">Account</h4>
                                            <div class="control-group">
                                                <label class="control-label">Username:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="username"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Email:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="email"></span>
                                                </div>
                                            </div>
                                            <h4 class="form-section">Profile</h4>
                                            <div class="control-group">
                                                <label class="control-label">Fullname:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="fullname"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Gender:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="gender"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Phone:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="phone"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Address:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="address"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">City/Town:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="city"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Country:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="country"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Remarks:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="remarks"></span>
                                                </div>
                                            </div>
                                            <h4 class="form-section">Billing</h4>
                                            <div class="control-group">
                                                <label class="control-label">Card Holder Name:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="card_name"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Card Number:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="card_number"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">CVC:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="card_cvc"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Expiration:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="card_expiry"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Payment Options:</label>
                                                <div class="controls">
                                                    <span class="text display-value" data-display="payment"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions clearfix">
                                        <a href="javascript:;" class="btn button-previous" style="display: none;">
                                            <i class="m-icon-swapleft"></i> Back
                                        </a>
                                        <a href="javascript:;" class="btn purple button-next">
                                            Continue <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                        <a href="javascript:;" class="btn purple button-submit" style="display: none;">
                                            Submit <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT-->
            </div>
        </div>
    </div>
<?php require('views/footer.php'); ?>
