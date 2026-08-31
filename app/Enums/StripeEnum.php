<?php

namespace App\Enums;

enum StripeEnum
{
    public const CheckoutSessionOpenStatus = 'open';
    public const CheckoutSessionCompleteStatus = 'complete';
    public const CheckoutSessionExpiredStatus = 'expired';


    public const ChargePendingStatus = 'pending';
    public const ChargeSuccessStatus = 'succeeded';
    public const ChargeFailStatus = 'failed';


    public const RefundPendingStatus = 'pending';
    public const RefundSuccessStatus = 'succeeded';
    public const RefundFailStatus = 'failed';
    public const RefundCancelStatus = 'canceled';
    public const RefundRequireActionStatus = 'requires_action';


    public const PaymentIntentProcessingStatus = 'processing';
    public const PaymentIntentSucceededStatus = 'succeeded';
    public const PaymentIntentCanceledStatus = 'canceled';
    public const PaymentIntentRequirePaymentMethodStatus = 'requires_payment_method';
    public const PaymentIntentRequireConfirmationStatus = 'requires_confirmation';
    public const PaymentIntentRequireActionStatus = 'requires_action';
    public const PaymentIntentRequireCaptureStatus = 'requires_capture';
}
