<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use SellingPartnerApi\Dto;

final class LabelData extends Dto
{
    /**
     * @param  string  $content  This field will contain the Base64encoded string of the shipment label content.
     * @param  ?string  $packageIdentifier  Identifier for the package. The first package will be 001, the second 002, and so on. This number is used as a reference to refer to this package from the pallet level.
     * @param  ?string  $trackingNumber  Package tracking identifier from the shipping carrier.
     * @param  ?string  $shipMethod  Ship method to be used for shipping the order. Amazon defines Ship Method Codes indicating shipping carrier and shipment service level. Ship Method Codes are case and format sensitive. The same ship method code should returned on the shipment confirmation. Note that the Ship Method Codes are vendor specific and will be provided to each vendor during the implementation.
     * @param  ?string  $shipMethodName  Shipping method name for internal reference.
     */
    public function __construct(
        public string $content,
        public ?string $packageIdentifier = null,
        public ?string $trackingNumber = null,
        public ?string $shipMethod = null,
        public ?string $shipMethodName = null,
    ) {}
}
