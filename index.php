<?php include 'header.php'; ?>
<?php include 'mega-menu.php'; ?>
<?php include 'breadcrumbs-and-h1.php'; ?>
<div id="primary" class="content-area">
    <div class="container">
        <div class="row">
            <main id="main" class="col-xs-12 col-sm-8 col-md-8" role="main">
                <article>
                    <div class="entry-header">
                        <h1>Paid search service</h1>
                    </div>
                    <div class="entry-content clearfix">
                        <div class="arrow-steps clearfix"
                        ">
                        <ul>
                            <li class="current"><span>1</span> Fee request details</li>
                            <li><span>2</span> Payment details</li>
                            <li><span>3</span> Payment confirmation</li>
                        </ul>
                    </div>
                    <h2>Fee request details</h2>
                    <form action="step-2.php" method="POST" name="payment-form" id="payment-form" class="form-abandonment">
                        <p>The fee is for carrying out a search to enable us to tell you whether or not we hold the information you've asked for.</p>
                        <div class="emphasis-block">
                            <ul>
                                <li><b>Your name</b>: Mr John Smith</li>
                                <li><b>Enquiry reference number</b>: TNA123456</li>
                                <li><b>Total fee amount</b>: £23.36 GBP (no vat added)</li>
                            </ul>
                        </div>
                        <h3>How to pay</h3>
                        <p>Clicking on the "Enter payment details" button will take you to the Worldpay website where you can pay online. We use Worldpay's secure system to make sure that your payment is safe. The National Archives has no access to your card details.</p>
                        <input type="submit" name="submit-rre" id="submit-tna-form" value="Enter payment details">
                        <h3>Terms and conditions of our paid search service</h3>
                        <p>We will search records we believe are likely to contain the information you have asked for, but we cannot guarantee that our search will be successful. If we are searching in closed records, we cannot guarantee that the information will be made available to you. We do not give refunds.</p>
                        <br>
                        <p>We will report to you on the outcome of our search. We may include copies of documents where small quantities are involved. Large volume or complex copying will involve a further fee. Access to records in our reading rooms will remain free.</p>
                        <br>
                        <p>If the total fee amount includes VAT at the standard rate, this will be shown above. If you are not eligible for VAT, because you live outside the European Union, or you are a VAT registered trader in the EU, please email us at <a href="mailto:foifees@nationalarchives.gov.uk">foifees@nationalarchives.gov.uk</a>. Please quote your VAT registration number if this is applicable.</p>
                    </form>
            </article>
        </main>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>
