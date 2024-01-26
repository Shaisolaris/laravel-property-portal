<?php

namespace Modules\Payment\app\Traits;

use App\Models\User;
use Laravel\Cashier\Subscription;
use App\Enums\SubscriptionStatusEnum;

trait StripeTrait
{
    public function currentSubscription(?User $user = null): null|Subscription
    {
        return $this->subscriptions()->where(function ($query) use ($user) {
            $query->whereUserId($user ? $user->id : $this->id)
                ->where('stripe_status', SubscriptionStatusEnum::ACTIVE)
                ->orWhere('stripe_status', SubscriptionStatusEnum::TRIAL);
        })->latest()->first();
    }


    public function currentSubscriptionWithOtherStatuses(?User $user = null): null|Subscription
    {
        return $this->subscriptions()->where(function ($query) use ($user) {
            $query->whereUserId($user ? $user->id : $this->id)
                ->where('stripe_status', SubscriptionStatusEnum::INCOMPLETE)
                ->orWhere('stripe_status', SubscriptionStatusEnum::ACTIVE)
                ->orWhere('stripe_status', SubscriptionStatusEnum::TRIAL);
        })->latest()->first();
    }


    public function hasSubscription(): bool
    {
        return !is_null($this->currentSubscription()) && $this->asStripeCustomer();
    }
//    public function currentPlan(?User $user = null): Plan|null
//    {
//        $sub = $this->currentSubscription($user);
//
//        if (!$sub) {
//            return null;
//        }
//
//        return Plan::wherePriceId($sub->stripe_price)->first();


//    }
//    public function hasPlan(int|array $subscriptions): bool
//    {
//        if (is_int($subscriptions)) {
//            $sub = $this->currentSubscription();
//
//            if (!$sub) {
//                return false;
//            }
//
//            $currentPlan = $this->currentPlan();
//
//            return $currentPlan->type === $subscriptions;
//        }
//
//        if (is_array($subscriptions)) {
//            foreach ($subscriptions as $subscription) {
//                if ($this->hasPlan($subscription)) {
//                    return true;
//                }
//            }
//        }
//
//        return false;

//    }
}