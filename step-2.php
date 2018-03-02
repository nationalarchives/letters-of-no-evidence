
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
                            <div class="arrow-steps clearfix">
                                <ul>
                                    <li><span>1</span> Fee request details</li>
                                    <li class="current"><span>2</span> Payment details</li>
                                    <li><span>3</span> Payment confirmation</li>
                                </ul>
                            </div>
                            <h2>Payment details</h2>
                            <p>Text here</p>
                            <form action="step-3.php" method="POST" id="payment-form-details" name="payment-form-details">
                                <div class="form-row submit">
                                    <a href="index.php" title="continue" class="back">&lt; Back</a>
                                    <input type="submit" name="submit-payment-form-details" id="submit-payment-form-details" class="positioned" value="Pay now">
                                </div>
                            </form>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
