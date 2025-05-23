<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class LinkableAccountType extends Dto
{
    protected static array $complexArrayTypes = ['carrierAccountInputs' => CarrierAccountInput::class];

    /**
     * @param  ?string  $accountType  Shipper Account Type.
     * @param  CarrierAccountInput[]|null  $carrierAccountInputs  A list of CarrierAccountInput
     */
    public function __construct(
        public ?string $accountType = null,
        public ?array $carrierAccountInputs = null,
    ) {}
}
