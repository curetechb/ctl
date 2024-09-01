<?php
 /**
 * Template Name: Payment
 *
 * @package CURETECHBD
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

// session_start();
// if(isset($_GET['status'])){
//     $_SESSION['status'] = $_GET['status'];
//     header("Location: /ctl/payment");
// }


if (isset($_POST['make_payment'])) {
    
    /* PHP */
    $post_data = array();
    $post_data['store_id'] = "testbox";
    $post_data['store_passwd'] = "qwerty";
    $post_data['total_amount'] = "103";
    $post_data['currency'] = "BDT";
    $post_data['tran_id'] = "SSLCZ_TEST_".uniqid();
    $post_data['success_url'] = "http://localhost/ctl/payment?status=success";
    $post_data['fail_url'] = "http://localhost/ctl/payment?status=failed";
    $post_data['cancel_url'] = "http://localhost/ctl/payment?status=cancel";
    # $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

    # EMI INFO
    $post_data['emi_option'] = "0";
    // $post_data['emi_max_inst_option'] = "9";
    // $post_data['emi_selected_inst'] = "9";

    # CUSTOMER INFORMATION
    $post_data['cus_name'] = "Test Customer";
    $post_data['cus_email'] = "test@test.com";
    $post_data['cus_add1'] = "Dhaka";
    $post_data['cus_add2'] = "Dhaka";
    $post_data['cus_city'] = "Dhaka";
    $post_data['cus_state'] = "Dhaka";
    $post_data['cus_postcode'] = "1000";
    $post_data['cus_country'] = "Bangladesh";
    $post_data['cus_phone'] = "01711111111";
    $post_data['cus_fax'] = "01711111111";

    # SHIPMENT INFORMATION
    $post_data['shipping_method'] = "NO";
    // $post_data['ship_name'] = "Store Test";
    // $post_data['ship_add1 '] = "Dhaka";
    // $post_data['ship_add2'] = "Dhaka";
    // $post_data['ship_city'] = "Dhaka";
    // $post_data['ship_state'] = "Dhaka";
    // $post_data['ship_postcode'] = "1000";
    // $post_data['ship_country'] = "Bangladesh";

    # OPTIONAL PARAMETERS
    // $post_data['value_a'] = "ref001";
    // $post_data['value_b '] = "ref002";
    // $post_data['value_c'] = "ref003";
    // $post_data['value_d'] = "ref004";

    # Product Info
    $post_data['num_of_item']       = '1';
	$post_data['product_name']      = 'Web Design';
	$post_data['product_category']  = 'digital product';
	$post_data['product_profile']   = 'non-physical-goods';

    # CART PARAMETERS
    // $post_data['cart'] = json_encode(array(
    //     array("product"=>"DHK TO BRS AC A1","amount"=>"200.00"),
    //     array("product"=>"DHK TO BRS AC A2","amount"=>"200.00"),
    //     array("product"=>"DHK TO BRS AC A3","amount"=>"200.00"),
    //     array("product"=>"DHK TO BRS AC A4","amount"=>"200.00")
    // ));

    // $post_data['product_amount'] = "100";
    // $post_data['vat'] = "5";
    // $post_data['discount_amount'] = "5";
    // $post_data['convenience_fee'] = "3";


    # REQUEST SEND TO SSLCOMMERZ
    $direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v4/api.php";

    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $direct_api_url );
    curl_setopt($handle, CURLOPT_TIMEOUT, 30);
    curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($handle, CURLOPT_POST, 1 );
    curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


    $content = curl_exec($handle);

    $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

    if($code == 200 && !( curl_errno($handle))) {
        curl_close( $handle);
        $sslcommerzResponse = $content;
    } else {
        curl_close( $handle);
        echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
        exit;
    }

    # PARSE THE JSON RESPONSE
    $sslcz = json_decode($sslcommerzResponse, true );

    if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
            # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
            # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
        echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
        // # header("Location: ". $sslcz['GatewayPageURL']);
        exit;
    } else {
        echo "JSON Data parsing error!";
    }



}


get_header(); ?>
	<!--begin Content-->
		<section>
			<article>
				<div class="container">
					<div class="row">
						<div class="col-md-9">

                        <?php if(isset($_GET['status']) && $_GET['status'] == "success"): ?>
                            <div class="alert alert-success" role="alert">
                                Payment Successful
                            </div>
                        <?php endif ?>
                        

                            <div class="row" style="display: flex; justify-content: center;">
                                <div class="col-md-6 mx-auto" style="margin: 50px 0;">
                                    <div style="border: 1px solid #efefef; border-radius: 24px; padding: 20px;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/sslcommerz.png" alt="" width="100" class="mx-auto">
                                        <form action="" method="post" style="overflow:hidden;" id="payment-form">
                                            <div class="my-3">
                                                <label for="agreement">
                                                    <input type="checkbox" id="agreement" required> I agree to the <a class="text-primary" href="/terms-and-conditions">Terms & Conditions</a>, <a class="text-primary" href="/privacy-policy">Privacy Policy</a>, and <a class="text-primary" href="/return-and-refund-policy">Return Refund Policy</a>
                                                </label>
                                            </div>
                                            <button type="submit" name="make_payment" value="make_payment" class="btn btn-primary" style="border: 0;margin:10px;width:100%;">Make Payment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
						</div>
						<div class="col-md-3">
							<div class="sidebar">
                            <?php get_sidebar(); ?>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
	<!--end Content-->


<?php get_footer(); ?>