<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemContributorRole extends Dto
{
    /**
     * @param  string  $value  Role value for the Amazon catalog item, such as `author` or `actor`.
     * @param  ?string  $displayName  Display name of the role in the requested locale, such as `Author` or `Actor`.
     */
    public function __construct(
        public string $value,
        public ?string $displayName = null,
    ) {}
}
