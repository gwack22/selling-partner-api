<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellerWalletV20240301\Dto;

use SellingPartnerApi\Dto;

final class TransferScheduleInformation extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $scheduleStartDate  The start date of the scheduled transfer.
     * @param  ?\DateTimeInterface  $scheduleEndDate  The end date of the scheduled transfer.
     * @param  ?ScheduleExpression  $scheduleExpression  The configuration of the schedule.
     * @param  ?string  $scheduleType  The type of schedule the transfer is on. Schedules based on time patterns use EventBridge.
     */
    public function __construct(
        public ?\DateTimeInterface $scheduleStartDate = null,
        public ?\DateTimeInterface $scheduleEndDate = null,
        public ?ScheduleExpression $scheduleExpression = null,
        public ?string $scheduleType = null,
    ) {}
}
