<?php

namespace Database\Seeders;

use App\Models\ReturnExchangePolicy;
use Illuminate\Database\Seeder;

class ReturnExchangePolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReturnExchangePolicy::create([
            'title' => 'VALIDITY FOR EXCHANGES & RETURNS',
            'description' => '<p>All exchanges and returns would need to be raised within 10 days of the invoice date for Singapore orders, and 20 days for overseas orders. For local deliveries, there is an option to exchange at any of our boutiques within Singapore or through our online portal at&nbsp;<a href="http://www.company.com/">www.company.com</a>. All requests for returns however, would need to be strictly made online at&nbsp;<a href="http://www.company.com/">www.company.com</a>&nbsp;for both local and overseas deliveries.</p>'
        ]);
        ReturnExchangePolicy::create([
            'title' => 'EXCHANGES AT OUR BOUTIQUES',
            'description' => '<p class="mb__5 d-flex"><span class="fwm mr__5">2.1 </span>You will need to bring along your original invoice together with the item(s) in its original condition and packaging to any of our boutiques.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">2.2 </span>You will be entitled to an exchange of any item(s) in the boutique immediately after evaluation by our retail associates that it is valid.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">2.3 </span>If the value of the exchange item(s) is higher than the original item(s), you will be required to top up the difference in cash.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">2.4 </span>There will be no refund if the value of the exchange item(s) is lower than the original item(s).</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">2.5 </span>No other forms of exchanges (such as boutique cash vouchers or online store credit) will be given at our boutiques.</p>'
        ]);
        ReturnExchangePolicy::create([
            'title' => 'EXCHANGES & RETURNS ONLINE',
            'description' => '<p class="mb__5 d-flex"><span class="fwm mr__5">3.1 </span>You will need to include your original invoice together with the item(s) in its original condition and packaging.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">3.2 </span>Kindly print and fill up the Exchange/Return Request Form here and follow the steps indicated in the form for your exchange.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">3.3 </span>Mail us your parcel via a traceable mode of postage.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">3.4 </span>Wait for our email confirmation and you will be notified once your online Store Credit Voucher is ready.&nbsp; Generally, the processing period is 5 working days upon receipt of your parcel.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">3.5 </span>All requests for returns will be refunded via online Store Credit Vouchers only. Your online Store Credit Voucher is valid for 30 days and can be used for your next purchase online. It is strictly non refundable, non extendable, non exchangeable for cash and non exchangeable for boutique vouchers. The online Store Credit Voucher is applicable online only and cannot be used in our Retail boutiques.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">3.6 </span>Online Store Credit Vouchers are to be used in a singular transaction and any excess amount not utilized, would not be refunded.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">3.7 </span>Online Store Credit Vouchers given will be at the buying price of the product as stated in the original invoice. No refunds will be given for delivery charges incurred in the original, returned and onward shipping charges of exchanged items.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">3.8 </span>However, if any of the products received is deemed defective or a wrong shipment, BeetleBug.com will bear the cost of shipping the item(s) back to you. Please note that all exchanges are subjected to stock availability and whilst we endeavour to ship a replacement item(s) back to you, we reserve the right to do an exchange by way of an item(s) of a similar value or providing online store credits or any other methods at the discretion of BeetleBug.com.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">3.9 </span>No refunds will be given for taxes, duties, tariffs and excise charges levied for overseas orders either for refunds or exchanged items.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">3.10 </span>All returns and exchanges made via our online portal at www.company.com would need to be shipped to :</p>
            <ul class="pl__30">
            <li><span class="fwm">The Company Pte Ltd</span></li>
            <li><span class="fwm">Changi South Lane</span></li>
            <li><span class="fwm">#03-01/03NanWahBuilding</span></li>
            <li><span class="fwm">Singapore</span></li>
            <li><span class="fwm">Tel: +65 6214 1490</span></li>
            </ul>'
        ]);
        ReturnExchangePolicy::create([
            'title' => 'OTHER TERMS & CONDITIONS',
            'description' => '<p class="mb__5 d-flex"><span class="fwm mr__5">4.1 </span>All items that are returned and exchanged, can only be made once.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">4.2 </span>We reserve the right and full discretion to disqualify you from enjoying free returns if the subsequent item(s) for return or exchange are of the same item(s) as a previous order</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">4.3 </span>Our returns and exchanges policy does not cover damage resulting from unique, accidental, or random damage that is the result of use by you or wear and tear of a product.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">4.4 </span>BeetleBug makes no warranty in respect of any product, express or implied, including any implied warranties of merchantability, quality, compliance with description and fitness for a particular purpose.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">4.5 </span>Such returns are at all times governed by the provisions of the Consumer Protection (Fair Trading) Act of Singapore.</p>
            <p class="mb__5 d-flex"><span class="fwm mr__5">4.6 </span>All decisions made by BeetleBug.com is final.</p>'
        ]);
        ReturnExchangePolicy::create([
            'title' => 'REPAIR POLICY',
            'description' => '<p>We offer repair services for all our products. Kindly visit us at any of our boutiques in Singapore for more information or contact us at <a href="mailto:abc@example.com">abc@example.com</a></p>'
        ]);
    }
}
