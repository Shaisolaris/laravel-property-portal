<?php

namespace App\Enums;

enum StripeEnum
{
    const CheckoutSessionOpenStatus = 'open';
    const CheckoutSessionCompleteStatus = 'complete';
    const CheckoutSessionExpiredStatus = 'expired';


    const ChargePendingStatus = 'pending';
    const ChargeSuccessStatus = 'succeeded';
    const ChargeFailStatus = 'failed';


    const RefundPendingStatus = 'pending';
    const RefundSuccessStatus = 'succeeded';
    const RefundFailStatus = 'failed';
    const RefundCancelStatus = 'canceled';
    const RefundRequireActionStatus = 'requires_action';


    const PaymentIntentProcessingStatus = 'processing';
    const PaymentIntentSucceededStatus = 'succeeded';
    const PaymentIntentCanceledStatus = 'canceled';
    const PaymentIntentRequirePaymentMethodStatus = 'requires_payment_method';
    const PaymentIntentRequireConfirmationStatus = 'requires_confirmation';
    const PaymentIntentRequireActionStatus = 'requires_action';
    const PaymentIntentRequireCaptureStatus = 'requires_capture';
}
