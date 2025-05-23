<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class DirectPurchaseResult extends Dto
{
    protected static array $complexArrayTypes = ['packageDocumentDetailList' => PackageDocumentDetail::class];

    /**
     * @param  string  $shipmentId  The unique shipment identifier provided by a shipping service.
     * @param  PackageDocumentDetail[]|null  $packageDocumentDetailList  A list of post-purchase details about a package that will be shipped using a shipping service.
     */
    public function __construct(
        public string $shipmentId,
        public ?array $packageDocumentDetailList = null,
    ) {}
}
