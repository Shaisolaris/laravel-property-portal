<?php

declare(strict_types=1);

namespace App\Enums;

enum SubscriptionStatusEnum: string
{
    /**
     * A successful payment needs to be made within 23 hours to activate the subscription.
     * Or the payment requires action, like customer authentication.
     * Read more about payments that require action.
     * Subscriptions can also be incomplete if there’s a pending payment.
     * In that case, the invoice status would be open_payment_pending and the PaymentIntent status would be processing.
     */
    public const INCOMPLETE = 'incomplete';

    /**
     * The subscription is currently in a trial period and it’s safe to provision your product for your customer.
     * The subscription transitions automatically to active when the first payment is made.
     */
    public const TRIAL = 'trialing';

    /**
     * The subscription is in good standing and the most recent payment is successful.
     * It’s safe to provision your product for your customer.
     */
    public const ACTIVE = 'active';

    /**
     * The subscription has ended its trial period without a default payment method and the trial_settings.end_behavior.missing_payment_method is set to pause.
     * Invoices will no longer be created for the subscription.
     * After a default payment method has been attached to the customer, you can resume the subscription.
     */
    public const PAUSED = 'paused';

    /**
     * The subscription has been canceled.
     * During cancellation, automatic collection for all unpaid invoices is disabled (auto_advance=false).
     * This is a terminal state that can’t be updated.
     */
    public const CANCELED = 'canceled';


    /**
     * The latest invoice hasn’t been paid but the subscription remains in place.
     * The latest invoice remains open and invoices continue to be generated but payments aren’t attempted.
     * You should revoke access to your product when the subscription is unpaid since payments were already attempted and retried when it was past_due.
     * To move the subscription to active, pay the most recent invoice before its due date.
     */
    public const UNPAID = 'unpaid';

    /**
     * Payment on the latest finalized invoice either failed or wasn’t attempted.
     * The subscription continues to create invoices. Your subscription settings determine the subscription’s next state.
     * If the invoice is still unpaid after all Smart Retries have been attempted, you can configure the subscription to move to canceled, unpaid, or leave it as past_due.
     * To move the subscription to active, pay the most recent invoice before its due date.
     */
    public const PAST_DUE = 'past_due';

    /**
     * The initial payment on the subscription failed and no successful payment was made within 23 hours of creating the subscription.
     * These subscriptions don’t bill customers. This status exists so you can track customers that failed to activate their subscriptions.
     */
    public const INCOMPLETE_EXPIRED = 'incomplete_expired';

    public const ENDED = 'ended';
}
