<div class="cart">
    <div class="cart-sidebar">
        <div class="page-title-name">
            Giỏ hàng
        </div>
        <div class="breadcumb">
            <a href="abcd" class="breakcumb-link">Cửa hàng</a>
            <span>/</span>
            <a href="swss" class="breakcumb-link">Giỏ hàng</a>
        </div>
        <div class="cart-products">
            <div class="cart-products-inner">
                <div class="cart-item">
                    <table>
                        <tr>
                            <td rowspan="3" style="width:15%;">
                                <div class="item-image">
                                    <img src="https://d2j6dbq0eux0bg.cloudfront.net/images/73605784/2991317837.jpg"
                                        alt="Item image">
                                </div>
                            </td>
                            <td>
                                <div class="item-title">
                                    TS Gucci
                                </div>
                            </td>
                            <td>
                                <div class="item-control-delete ec-link-hover" style="">X</div>
                            </td>
                        </tr>
                        <tr>

                            <td style="color:#757575">
                                <div class="item-option">
                                    <div class="item-option-size">Product Size:S</div>&nbsp;
                                    <div class="item-option-color">Color:Black</div>
                                </div>

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="color:#1a7ac4">                                
                                <select name="listQty" id="qty"style="width:auto;border:none;color: #1a7ac4;">
                                    <?php
                                        for($index=1; $index <=20;$index++)
                                            echo '<option value="'.$index.'"style="color: #333;">Số lượng: '.$index.'</option>'
                                    ?>
                                </select>
                            </td>
                            <td style="text-align:right;">
                                <div class="item-price">280&nbsp;200đ</div>
                            </td>
                        </tr>
                    </table>
                </div>                
            </div>
            <hr>
        </div>
        <div class="cart-summary">
            <table class="cart-summary-body">
                <tbody>
                    <tr>
                        <td class="cart-summary-title">Tổng phụ</td>
                        <td class="cart-summary-price">220&nbsp;200đ</td>
                    </tr>
                    <tr>
                        <td class="cart-summary-title">Giao hàng</td>
                        <td class="cart-summary-price">Miễn phí</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="cart-summary-row-total">
                        <td class="cart-summary-title">
                            TỔNG CỘNG
                        </td>
                        <td class="cart-summary-price cart-summary-price-total">
                            220&nbsp;200đ
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cart-shopping">
            Tìm kiếm thêm?
            <a href="" class="ec-link-hover"> Tiếp tục mua hàng</a>

        </div>
    </div>
    <div class="cart-body">
        <div class="page-title-name">
            Thanh toán
        </div>
        <div class="cart-email">
            <div class="cart-email_text">
                Nhập địa chỉ email của bạn. Địa chỉ này sẽ được sử dụng để gửi cho bạn thông tin cập nhật về đơn hàng
                của bạn.
            </div>
            <form action="" class="cart-email_input">
                <div>
                    <input type="email" name="email" id="cart-email-input" placeholder="Địa chỉ email của bạn">
                </div>
                <div>

                </div>
            </form>
        </div>
        <div class="cart_checkout">
            <div class="cart_agreement">
                <div class="form-checkbox">
                    <input type="checkbox" name="" id="form-control_checkbox-accept-marketing">
                </div>
                <div class="form-checkbox-lable">
                    <label for="form-control_checkbox-accept-marketing">Luôn cập nhật tin tức và các ưu đãi độc quyền
                        cho tôi</label>
                </div>
            </div>
            <div class="cart-button-checkout-wrap">
                <div class="cart-button-checkout">
                    <button class="btn-checkout">Thanh toán</button>
                </div>
                <div class="cart-text-mited">Tất cả dữ liệu được truyền mã hóa thông qua kết nối TLS an toàn</div>
            </div>
            <div class="cart-pay-paypal">
                <iframe
                    src="https://www.paypal.com/smart/button?env=production&style.label=checkout&style.layout=vertical&style.height=40&style.shape=rect&style.color=gold&style.tagline=false&funding.disallowed=card%2Ccredit%2Cgiropay%2Cideal%2Csofort%2Ceps%2Cmybank%2Cp24%2Czimpler%2Citau%2Cbancontact%2Cblik%2Cmaxima%2Coxxo%2Cboleto%2Celv%2Cvenmo&funding.remembered=paypal&domain=1850182288-atari-embeds.googleusercontent.com&sessionID=uid_ec432397c8_mdq6mzy6mtq&buttonSessionID=uid_325fefb9c7_mdq6mzc6ntu&renderedButtons=paypal&storageID=uid_5aa6a78ded_mdq6mzy6mtq&locale.x=en_GB&logLevel=warn&sdkMeta=eyJ1cmwiOiJodHRwczovL3d3dy5wYXlwYWxvYmplY3RzLmNvbS9hcGkvY2hlY2tvdXQubWluLmpzIn0&uid=a11c88586a&version=min&xcomponent=1"
                    frameborder="0"></iframe>
            </div>
        </div>
        <div class="cart_next">
            <div class="cart_next_header">Bước tiếp theo</div>
            <hr>
            <div class="cart_next_step cart_next_step_shipping">
                <div class="cart_next_title">Chọn cách gửi hàng</div>
                <div class="cart_next_muted">Chọn cách nhận hàng.</div>
            </div>
            <div class="cart_next_step cart_next_step_payment">
                <div class="cart_next_title">Thông tin thanh toán</div>
                <div class="cart_next_muted">Chọn phương thức thanh toán và nhập các chi tiết về thanh toán.</div>
            </div>
            <div class="cart_next_step cart_next_step_order_cofirmation">
                <div class="cart_next_title">Xác nhận đơn hàng</div>
                <div class="cart_next_muted">Đặt hàng và bạn sẽ nhận được email xác nhận đơn hàng.</div>
            </div>
        </div>
    </div>
</div>