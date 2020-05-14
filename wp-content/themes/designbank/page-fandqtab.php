<?php
/* Template Name: F&Q Page */
get_header();

?>

<style>
.btn-link {
    font-weight: 400;
    color: #fff;
    text-decoration: none;
}

.card {
    background-color: #fff0;
    border: 1px solid #ffffff20;
}

.card-body {
    color: #fff;
}

.btn-link:hover,
.btn-link:active {
    color: #fff;
    text-decoration: none;
}

.btn-link.focus,
.btn-link:focus {
    text-decoration: none;
    box-shadow: none;
}

.card-header {
    background: #2f2f2f;
}
</style>
<div class="container">


    <div class="row">
        <div class="col-md-12">
        <header class="entry-header">

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

</header><!-- .entry-header -->


            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">

                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Sport Specific
                        </button>

                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <dl>
                                <dt>What are the freight costs? </dt>
                                <dd>Freight is dependent on location/quantity.</dd>

                                </dl>
                                    <dl>
                                        <dt>Can I use a training ball for match play? </dt>
                                        <dd>Refer to the ball matrix for details/recommendations.</dd>
                                    </dl>
                                    <dl>
                                        <dt>What are the specs/differences between the SAS branded balls and other
                                            brands?</dt>
                                        <dd></dd>
                                    </dl>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Freight
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <dl>
                                <dt>How quickly can you deliver stock?</dt>
                                <dd>Freight is dependent on location/quantity. </dd>
                                </dt>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Stock
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <dl>
                                <dt>How quickly can you deliver stock? </dt>
                                <dd>Have we had the ETA confirmed by Blair for these? End of April</dd>
                                <dd>Fast delivery of your order is our top priority. We aim to dispatch your within 3
                                    working days..</dd>
                                </dl>
                                <dl>
                                    <dt>Can you reserve stock for our order until we receive funding? </dt>
                                    <dd>My feeling here is that we should only hold if they simply are getting internal
                                        approval for the order - if they are going for funding we shouldn’t reserve.
                                    </dd>
                                    </dl>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingfour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Further Discounts & Rebates
                            </button>
                        </h2>
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <dl>
                                <dt>Will I receive any rebates for this product?</dt>
                                <dd>Im sorry, as this is a very competitive offer we are unable to provide further
                                    rebates for the order
                                </dd>
                                </dl>
                                    <dl>
                                        <dt>Can you do me a better deal as we are ordering in bulk?</dt>
                                        <dd>This is at the Sales persons discretion
                                        </dd>
                                        </dl>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Quoting
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <dl>
                                <dt>Are you able to source/supply second quotes for funding?</dt>
                                <dd>NO  Happy to suggest alternative </dd>
                                <dd>We can only recommend alternative suppliers off line</dd>
                                </dl>
                                <dl>
                                    <dt>Are you able to provide me with a proforma invoice?  </dt>
                                    <dd>Yes, we can supply you with a manual invoice on request
                                    </dd>
                                    </dl>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Returns & Exchanges

                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <dl>
                                <dt>Can we return the balls and exchange them for other sizes? </dt>
                                <dd>We can provide exchanges for like for like product. Provided the balls are in original condition (haven’t been inflated). Product will need to be for the equivalent value. We can only exchange inside 14 days from the invoice date
</dd>
                               
                                </dl>
                                <dl>
                                    <dt>Can I get a refund?</dt>
                                    <dd>Refunds are only applicable as per standard terms of trade
                                    </dd>
                                    </dl>
                        </div>
                    </div>
                </div>



                
            </div>
     

        </div>
    </div>


<h3>BALL PROMO:</h3>
<p>FREE gift applies to orders over $500 and $1,000.  Limited to one gift per customer.</p>
<p>Your gift will be dispatched with your order to the address supplied.</p>
<p>FREE GIFT OFFER  DOES NOT APPLY TO WHOLESALE CUSTOMERS.</p>
<p><b>Offer ends 31st August 2020</b></p>
<h3>ORDERING PROCEDURE:</h3>
<p>
Whether ordering by fax, phone or email the following details are required:</p>
<ul><li>Description of product (the code number is clearly printed in the catalogue).</li>
<li>Quantity required.</li>
<li>Delivery address.</li>
<li>An order number or the name of the authorised person ordering</li>
<li>Date delivery required if not immediate</li></ul>


    <h3>PRODUCT BACK-ORDERS & SUBSTITUTION </h3>
    <p>We aim to be in-stock of all products all of the time however because we have such a wide range this can sometimes be difficult to achieve. If we are out of stock of any item that you order, we reserve the right to substitute that product where possible with another product that is of the same or better type and quality, for the same price. 
If we can’t substitute, a representative will contact you.</p>



<h3>BACK-ORDER FREIGHT CHARGE POLICY</h3>
<p>Back-orders will attract our normal freight charge per back-order delivery</p>


	•	We have a huge range of products, and it is difficult to be in stock of all items, all of the time and sometimes we may need to “back-order” an item that you want which is temporarily out of stock.
	•	If you have multiple back-ordered items, to minimize freight costs to you, we will do our best to “consolidate” your back-orders and send in one delivery.
	•	If you are not happy with our back-order freight charge policy, you are welcome to cancel any back-orders you have with us and re-order once we are back in stock.

 <h3>PRICING:</h3>
Prices are effective from 01 April 2020. All prices stated include GST and are in New Zealand dollars. If you find the identical product cheaper elsewhere, let us know and we beat it by 10%.  We aim to maintain our prices throughout the year, however, if absolutely necessary we reserve the right to amend prices without notice for any reason. Updated prices will be published on our website as they occur. If you order a product for which we have increased the price, we will aim to advise you of the new price prior to processing your order. 

We will aim to provide you accurate freight quotes when required.


<h3>DELIVERY</h3>
Fast delivery of your order is our top priority. We aim to dispatch your order within 3 working business days.
	•	Should there be any problem with the delivery of your order please contact us and we will track the courier consignment number.
	•	Please contact us immediately if any items are damaged.
	•	Damages to order items must be noted on consignment note at the time of delivery. No claim for damage made to order items will be accepted if not noted upon delivery. No claim for missing or lost made to order items will be accepted after 5 days from the date of invoice.
	•	All balls will be supplied deflated unless otherwise requested – inflated balls may attract additional freight charges.
	•	We are not liable for late deliveries caused for reasons beyond our control
	•	Rural delivery address may incur an additional charge


<h3>PAYMENT:</h3>
Schools and all other Government funded educational institutes are automatically eligible for an account. Payment for account holders should be made on the 20th of the month following purchase. 
Other clients must apply on a SAS Sports or Score Sportswear Ltd credit application form. All cash sale customers, payment must be received in full before any orders will be dispatched..  We accept Visa.

<h3>REFUNDS FOR PAYMENT ERRORS</h3>

If you have made a payment in error, you should contact us within 2 days explaining the reasons for your payment error.
We will investigate your claim within 5 working days and refund all or part of your payment if it is determined to our satisfaction that it was a genuine payment error.

<h3>PRODUCT WARRANTIES</h3>


The majority of our products are guaranteed for 12 months against manufacturing defect and some products may carry longer manufacturing warranties. Product warranties are void if the item has in our opinion had excessive use and/or used in a way for which it was not intended.

<h3>PRODUCT RETURNS</h3>

	•	If for any reason you wish to return any products, you are required to complete a “Return Authority” form, available on our website or by contacting us. All applicable information must be stated on this form and be returned with the items. We reserve the right to replace, refund or credit your account for any returned product.  
	•	Goods returned for reasons other than Manufacturing Defect must be returned within 15 working days, in the original packaging, uninflated and in a saleable condition. The damaged or used product will not be accepted for credit or exchange. Please provide proof of purchase with all returns.
	•	Freight costs to return and re-send any replacement items may be your responsibility unless otherwise agreed by us. We may credit or refund you some or all freight costs if we are satisfied that in our opinion it is our responsibility to do so.

<h3>DISCLAIMER:</h3>

	•	The prices for the balls listed in this offer are in New Zealand dollars and include GST and exclude any freight charges. We endeavor to ensure that all prices listed in this catalogue are consistent with prices offered at our stores. SAS Sport Ltd reserves the right to amend or rectify any errors in pricing or product specification.



</div>

<?php get_footer();