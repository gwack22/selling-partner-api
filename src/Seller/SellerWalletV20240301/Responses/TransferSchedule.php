<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellerWalletV20240301\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\SellerWalletV20240301\Dto\PaymentPreference;
use SellingPartnerApi\Seller\SellerWalletV20240301\Dto\TransactionAccount;
use SellingPartnerApi\Seller\SellerWalletV20240301\Dto\TransferScheduleFailures;
use SellingPartnerApi\Seller\SellerWalletV20240301\Dto\TransferScheduleInformation;

final class TransferSchedule extends Response
{
    protected static array $complexArrayTypes = ['transferScheduleFailures' => TransferScheduleFailures::class];

    /**
     * @param  string  $transferScheduleId  The unique identifier provided by Amazon to the scheduled transfer.
     * @param  string  $transactionType  The type of transaction.
     * @param  TransactionAccount  $transactionDestinationAccount  Details of the bank account involved in transaction.
     * @param  string  $transferScheduleStatus  The schedule status of the transfer.
     * @param  TransferScheduleInformation  $transferScheduleInformation  Mandatory information for initiating a schedule transfer.
     * @param  TransferScheduleFailures[]  $transferScheduleFailures  A list of transfer schedule failures.
     * @param  ?TransactionAccount  $transactionSourceAccount  Details of the bank account involved in transaction.
     * @param  ?PaymentPreference  $paymentPreference  The type of payment preference in which the transfer is being scheduled.
     */
    public function __construct(
        public readonly string $transferScheduleId,
        public readonly string $transactionType,
        public readonly TransactionAccount $transactionDestinationAccount,
        public readonly string $transferScheduleStatus,
        public readonly TransferScheduleInformation $transferScheduleInformation,
        public readonly array $transferScheduleFailures,
        public readonly ?TransactionAccount $transactionSourceAccount = null,
        public readonly ?PaymentPreference $paymentPreference = null,
    ) {}
}
