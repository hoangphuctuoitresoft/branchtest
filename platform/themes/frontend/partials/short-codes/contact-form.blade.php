<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row align-items-stretch col-mb-50 mb-0">
                <!-- Contact Form ============================================= -->
                <div class="col-lg-6">
                    <div class="fancy-title title-border">
                        <h3>Gửi Email cho chúng tôi</h3>
                    </div>

                    <div class="form-widget" data-alert-type="inline">

                        <div class="form-result"></div>

                        <form class="mb-0" id="template-contactform" name="template-contactform"
                            action="include/form.php" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name">Tên <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name"
                                        value="" class="sm-form-control required" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email"
                                        name="template-contactform-email" value=""
                                        class="required email sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-phone">Số điện thoại</label>
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                        value="" class="sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-md-8 form-group">
                                    <label for="template-contactform-subject">Chủ đề <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="subject" value=""
                                        class="required sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-service">Dịch vụ</label>
                                    <select id="template-contactform-service" name="template-contactform-service"
                                        class="sm-form-control">
                                        <option value="">-- Chọn --</option>
                                        <option value="Wordpress">Wordpress</option>
                                        <option value="PHP / MySQL">PHP / MySQL</option>
                                        <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                        <option value="Graphic Design">Thiết kế đồ họa</option>
                                    </select>
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">Tin nhắn <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message"
                                        name="template-contactform-message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck"
                                        name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit"
                                        class="button button-3d m-0">Gửi bình luận</button>
                                </div>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>
                    </div>
                </div>
            </div>
            <!-- Contact Form End -->
        </div>
    </div>
</section>
<!-- #content end -->
