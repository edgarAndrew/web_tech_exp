<?php

namespace Razorpay\Tests;

use Razorpay\Api\Request;

class CoverageTest extends TestCase
{
    /**
     * @covers \Razorpay\Api\Api::getAppsDetails
     * @uses \Razorpay\Api\Api::setAppDetails
     * @covers \Razorpay\Api\Api::getBaseUrl
     * @uses \Razorpay\Api\Api::setBaseUrl
     * @cover \Razorpay\Api\Api::getKey
     * @cover \Razorpay\Api\Api::getSecret
     * @cover \Razorpay\Api\Api::getFullUrl
     */
    public function testApiInstance(){
      $instance = new ApiTest();
      $instance->setup();
      $instance->testGetAppDetails();
      $instance->testSetBaseUrl();
      $instance->testGetkey();
      $instance->testGetSecret();
      $instance->testFullUrl();
    }
    /**
     * @covers \Razorpay\Api\Plan::create
     * @covers \Razorpay\Api\Plan::fetch
     * @covers \Razorpay\Api\Plan::all
     */
    public function testPlanCoverage(){
      $subscription = new PlanTest();
      $subscription->setup();
      $subscription->testCreatePlan();
      $subscription->testFetchAllPlans();
      $subscription->testFetchPlan();
    }
    
    /**
     * @covers \Razorpay\Api\QrCode::create
     * @covers \Razorpay\Api\QrCode::fetch
     * @covers \Razorpay\Api\QrCode::close
     * @uses \Razorpay\Api\ArrayableInterface
     * @covers \Razorpay\Api\QrCode::all
     * @covers \Razorpay\Api\QrCode::fetchAllPayments
     */
    public function testQrCodeCoverage(){
      $qrCode = new QrCodeTest();
      $qrCode->setup();
      $qrCode->testCreateQrCode();
      $qrCode->testFetchQrCode();
      $qrCode->testCloseQrCode();
      $qrCode->testFetchAllQrCode();
      $qrCode->testFetchQrCodePaymentById();
    }

    /**
     * @covers \Razorpay\Api\Refund::fetch
     * @covers \Razorpay\Api\Refund::edit
     * @covers \Razorpay\Api\Refund::all
     * @covers \Razorpay\Api\Payment::fetchMultipleRefund
     * @covers \Razorpay\Api\Payment::fetchRefund
     */
    public function testRefundCoverage(){
      $refund = new RefundTest();
      $refund->setup();
      $refund->testFetchRefund();
      $refund->testUpdateRefund();
      $refund->testFetchAllRefund();
      $refund->testFetchMultipalRefund();
      $refund->testFetchRefund();
    }

    /**
     * @covers \Razorpay\Api\Subscription::create
     * @covers \Razorpay\Api\Subscription::fetch
     * @covers \Razorpay\Api\Addon::fetchAll
     * @covers \Razorpay\Api\Subscription::all
     */
    public function testSubscriptionCoverage(){
      $subscription = new SubscriptionTest();
      $subscription->setup();
      $subscription->testCreateSubscription();
      $subscription->testSubscriptionFetchId();
      $subscription->testFetchAddons();
      $subscription->testFetchAllSubscriptions();
    }

    /**
     * @covers \Razorpay\Api\VirtualAccount::create
     * @covers \Razorpay\Api\VirtualAccount::all
     * @covers \Razorpay\Api\VirtualAccount::payments
     * @uses \Razorpay\Api\VirtualAccount::fetch
     * @covers \Razorpay\Api\VirtualAccount::close
     */
    public function testVirtualAccountCoverage(){
      $virtualAccount = new VirtualAccountTest();
      $virtualAccount->setup();
      $virtualAccount->testCreateVirtualAccount();
      $virtualAccount->testFetchAllVirtualAccounts();
      $virtualAccount->testFetchPayment();
      $virtualAccount->testCloseVirtualAccount();
    } 

    /**
     * @covers \Razorpay\Api\Addon::fetch
     * @covers \Razorpay\Api\Addon::fetchAll
     */
    public function testAddonCoverage(){
      $addon = new AddonTest();
      $addon->setUp();
      $addon->testFetchSubscriptionLink();
      $addon->testFetchAllAddon();
    }

    /**
     * @covers \Razorpay\Api\Customer::create
     * @covers \Razorpay\Api\Customer::edit
     * @covers \Razorpay\Api\Customer::all
     * @covers \Razorpay\Api\Customer::fetch
     */   
    public function testCustomerCoverage(){
      $customer = new CustomerTest();
      $customer->setUp();
      $customer->testCreateCustomer();
      $customer->testEditCustomer();
      $customer->testFetchAll();
      $customer->testFetchCustomer();
      usleep(500000);
    }

    /**
     * @covers \Razorpay\Api\Card::fetch
     */   
    public function testCardCoverage(){
      $card = new CardTest();
      $card->setup();
      $card->testFetchCard();
    }

    /**
     * @covers \Razorpay\Api\FundAccount::create
     * @covers \Razorpay\Api\FundAccount::all
     */
    public function testFundCoverage(){
      $fund = new FundTest();
      $fund->setup();
      $fund->testCreateFundAccount();
      $fund->testCreateOrder();
    }

    /**
     * @covers \Razorpay\Api\Invoice::create
     * @covers \Razorpay\Api\Invoice::all
     * @covers \Razorpay\Api\Invoice::edit
     * @covers \Razorpay\Api\Invoice::notifyBy
     * @covers \Razorpay\Api\Invoice::delete
     * @covers \Razorpay\Api\Invoice::cancel
     * @uses \Razorpay\Api\Invoice::fetch
     */
    public function testInvoiceCoverage(){
      $invoice = new InvoiceTest();
      $invoice->setup();
      $invoice->testCreateInvoice();
      $invoice->testFetchAllInvoice();
      $invoice->testUpdateInvoice();
      $invoice->testInvoiceIssue();
      $invoice->testDeleteInvoice();
      $invoice->testCancelInvoice();
    }
      
    /**
     * @covers \Razorpay\Api\Item::create
     * @covers \Razorpay\Api\Item::fetch
     * @covers \Razorpay\Api\Item::edit
     * @covers \Razorpay\Api\Item::all
     * @covers \Razorpay\Api\Item::delete
     */
    public function testItemCoverage(){
      $item = new ItemTest();
      $item->setup();
      $item->testcreate();
      $item->testAllItems();
      $item->testfetchItem();
      $item->testUpdate();
      $item->testDelete();
    }

    /**
     * @covers \Razorpay\Api\Order::create
     * @covers \Razorpay\Api\Order::all
     * @covers \Razorpay\Api\Order::fetch
     * @covers \Razorpay\Api\Order::edit
     */
    public function testOrderCoverage(){
      $order = new OrdersTest();
      $order->setup();
      $order->testCreateOrder();
      $order->testAllOrders();
      $order->testFetchOrder();
      $order->testUpdateOrder();
    }

    /**
     * @covers \Razorpay\Api\Payment::fetch
     * @covers \Razorpay\Api\Payment::all
     * @covers \Razorpay\Api\Payment::edit
     * @covers \Razorpay\Api\Order::payments
     * @covers \Razorpay\Api\Payment::fetchCardDetails
     * @covers \Razorpay\Api\Payment::fetchPaymentDowntime
     * @covers \Razorpay\Api\Payment::fetchPaymentDowntimeById
     */
    public function testPaymentCoverage(){
      $order = new PaymentTest();
      $order->setup();
      $order->testFetchPayment();
      $order->testFetchAllPayment();
      $order->testUpdatePayment();
      $order->testFetchOrderPayment();
      $order->testFetchCardWithPaymentId();
      $order->testfetchPaymentDowntime();
      $order->testfetchPaymentDowntimeById();
    }

    /**
     * @covers \Razorpay\Api\PaymentLink::create
     * @covers \Razorpay\Api\PaymentLink::fetch
     * @covers \Razorpay\Api\PaymentLink::all
     * @covers \Razorpay\Api\PaymentLink::cancel
     * @covers \Razorpay\Api\PaymentLink::edit
     * @covers \Razorpay\Api\PaymentLink::notifyBy
     */
    public function testPaymentlinkCoverage(){
      $paymentlink = new PaymentLinkTest();
      $paymentlink->setup();
      $paymentlink->testCreatePaymentLink();
      $paymentlink->testFetchRefund();
      $paymentlink->testFetchAllMutlipleRefund();
      $paymentlink->testCancelPaymentLink();
      $paymentlink->testUpdatePaymentLink();
      $paymentlink->testSendNotification();
    }

    /**
     * @covers \Razorpay\Api\Settlement::all
     * @covers \Razorpay\Api\Settlement::settlementRecon
     */
    public function testSettlementCoverage(){
      $paymentlink = new SettlementTest();
      $paymentlink->setup();
      $paymentlink->testAllSettlements();
      $paymentlink->testSettlementRecon();
    }

    /**
     * @covers \Razorpay\Api\Order::transfers
     * @covers \Razorpay\Api\Transfer::all
     * @covers \Razorpay\Api\Payment::transfers
     * @covers \Razorpay\Api\Transfer::fetch
     * @covers \Razorpay\Api\Transfer::all
     */
    public function testTransferCoverage(){
      $transfer = new TransferTest();
      $transfer->setup();
      $transfer->testFetchTransferOrder();
      $transfer->testFetchSettlement();
      $transfer->testFetchTransferPayment();
      $transfer->testFetchTransfer();
      $transfer->testFetchSettlement();
    }

    /**
     * @covers \Razorpay\Api\Token::all
     * @covers \Razorpay\Api\Token::fetch
     */
    public function testTokenCoverage(){
      $transfer = new TokenTest();
      $transfer->setup();
      $transfer->testFetchTokenByCustomerId();
      $transfer->testFetchTokenByPaymentId();;
    }
}
