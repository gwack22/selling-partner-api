<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class LinkableCarrier extends Dto
{
    protected static array $complexArrayTypes = ['linkableAccountTypes' => LinkableAccountType::class];

    /**
     * @param  ?string  $carrierId  The carrier identifier for the offering, provided by the carrier.
     * @param  LinkableAccountType[]|null  $linkableAccountTypes  A list of LinkableAccountType
     */
    public function __construct(
        public ?string $carrierId = null,
        public ?array $linkableAccountTypes = null,
    ) {}
}
