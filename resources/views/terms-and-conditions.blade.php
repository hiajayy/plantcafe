@extends('layouts.app')
@section('title','Terms & Conditions - Plant Cafe')
@section('body-class','terms-and-conditions-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
        </ol>
    </div>
</nav>
@endsection
@section('main')
 <section class="inner-wrapper">
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-12 ">
                        <h5>Products and Pricing</h5>
                        <p>All products listed on the our website, their descriptions, and their prices are subject to change without notice.</p>
                        <p>Purchase of a product on the website is subject to availability of stock.</p>
                        <p>Plant Cafe reserves the right, at any time, to modify, suspend, or discontinue the sale of any product or services with or without notice.</p>
                        <p>In the event a product or service is listed at an incorrect price or with incorrect information due to typographical error, error in pricing or information received from Plant Cafe. Plant Cafe shall have the right, post the acceptance of any order, to decline or cancel any such order, whether or not the order has been confirmed and/or you have been charged for such product or service. If you have already been charged for the order and Plant Cafe cancels your order, we will refund the amount.</p>
                        <p>The product specifications (weight, size, color etc.) mentioned with the product photos displayed are only approximate. There may be a slight variation in the pictures and the respective products.</p>
                        <hr>
                        <h5>Orders and Acceptance of Orders</h5>
                        <p>When you make an order, you are making an offer to purchase, and such offer is subject to acceptance by us. Your receipt (email/SMS/push notification) of an order confirmation from us does not signify our acceptance of your order, nor does it constitute confirmation of our offer to sell. We reserve the right at any time, after receiving your order, to accept or decline or cancel your order (in whole or in part) for any reason whatsoever. We may require additional verifications or information before accepting any order. In the event of a purchase, you will be required to accurately provide the recipient’s name and shipping address. You agree that, if Plant Cafe cancels all or a part of your order, your sole and exclusive remedy is either that:</p>
                        <ul class="pl-3">
                            <li>Plant Cafe will issue a credit to your Credit/Debit card, UPI, Wallet or Bank account in the amount charged for the cancelled portion (if your account card has already been charged for the order) or</li>
                            <li>Plant Cafe will not charge your Credit/Debit card, UPI, Wallet or Bank account for the cancelled portion of the order.</li>
                        </ul>
                        <p>For your convenience, Plant Cafe accepts Visa, Master Card, American Express, Debit Card, UPI, Digital Wallets and Net Banking. Notwithstanding anything contained herein, any and all payments made by above mentioned options, either through payment gateway on the Plant Cafe website or through Plant Cafe mobile site, are subject to specific terms and conditions of such third party payment gateways.</p>
                        <hr>
                        <h5>Substitution Policy</h5>
                        <p>Since Plants arrangements are from natural sources, there may be a slight variation from the picture shown. Occasionally, substitution of plants is necessary due to temporary and/or regional unavailability issues.</p>
                        <p>Pots we offer are handmade with different materials and may differ from others. There might be slight variation in the product in terms of design and shape. Occasionally, substitution of plants/designs is necessary due to temporary and/or regional unavailability issues.</p>
                        <p>In such cases, our experienced team will ensure we deliver the product as close as possible to the description/photograph shown and will only substitute items of equal or higher value.</p>
                        <hr>
                        <h5>Order/Delivery Confirmation E-mail and SMS</h5>
                        <p>Shortly after you place an order, you will receive an Order Confirmation e-mail and SMS which will include all the details of your order, including the order number which will be required in the event you need to contact Plant Cafe.</p>
                        <p>In case you have not received an Order Confirmation e-mail and SMS, please call on +91- 8700966094 (9:30 AM - 6:30 PM, Monday - Saturday) or write to us at care@plantcafe.in</p>
                        <p>You will also receive a Delivery Confirmation e-mail and SMS when your order has been delivered.</p>
                        <hr>
                        <h5>Duplicate Orders</h5>
                        <p>If you have placed two or more identical orders by mistake, please let us know immediately. We will give you a full refund for the duplicate order, provided that the order has not been prepared or delivered.</p>
                        <p>If we find that the same order has been made twice, we will try to contact the customer to confirm the order. If the customer is not contactable, we will take the decision on your behalf and that will be final.</p>
                        <hr>
                        <h5>Payment Terms</h5>
                        <p>You agree to pay the price applicable for the product or service on our website at the time you submitted your order (Product Price), the delivery fees for the delivery service you select, if any (Delivery Fees), or any applicable taxes (defined below). You will be solely responsible for payment of GST (other than taxes based on Plant Cafe income), fees, duties, and other governmental charges, and any related penalties and interest, arising from the purchase of the products and services (Taxes) not withheld by Plant Cafe.</p>
                        <p>All payments are non-refundable (except as expressly set forth in the Terms and Conditions). We reserve the right to charge late fees on all due payments.</p>
                        <hr>
                        <h5>Payment Details</h5>
                        <p>Order delivery is totally subjected to the payment credited in Plant Cafe’s a/c. unless payment is received by us, the order will not be processed.</p>
                        <p>Online: Customers can place order on website and make the payment through mentioned modes of payment.</p>
                        <hr>
                        <h5>Communications</h5>
                        <p>You consent to receive communications from us by e-mail, phone or any other communication made electronically, verbally or physically. You agree that all agreements, notices, disclosures and other communications that Plant Cafe provides you by e-mail or in any other aforementioned mediums satisfy any legal requirement that such communications be in writing.</p>
                        <hr>
                        <h5>Damaged/Defective/different Products</h5>
                        <p>If any product received by you is damaged/ defective/different, you can let us know the same. You can call us at +91- 8700966094 (9:30 AM - 6:30 PM, Monday - Saturday) or send us an e-mail with 3 photographs (different dimensions) of the same at care@plantcafe.in, within 24 hours of receiving the product. We will either deliver a new product or refund the amount to you. Subject to the Terms and Conditions, once the refund is initiated by Plant Cafe, it takes 8-10 business days for the refund amount to reflect in your account.</p>
                        <hr>
                        <h5>Exchanges</h5>
                        <p>It will not be possible for us to accept any request for product exchanges.</p>
                        <hr>
                        <h5>Feedback and suggestions</h5>
                        <p>At Plant Cafe, we make every effort to ensure that you receive excellent products and services. We strive hard not only to meet, but exceed your expectations. If, at any time, you experience problems with an order or are not happy with our service, you can call us on +91- 8700966094 (9:30 AM - 6:30 PM, Monday - Saturday) or write to us at feedback@plantcafe.in</p>
                        <p>Your feedback and suggestions are important to us.</p>
                        <p><strong>Note: Complaints against all plants need to be made within 0 - 24 hours from the time of delivery, after which we will not be able to register any complaints.</strong></p>
                        <hr>
                        <h5>The use of this website is subject to the following terms of use</h5>
                        <p>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</p>
                        <p>You may not create a link to this website from another website or document without Plant Cafe’s prior written consent.</p>
                        <p>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</p>
                        <p>Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection