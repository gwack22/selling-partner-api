<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellerWalletV20240301\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\SellerWalletV20240301\Dto\TransferSchedule as TransferSchedule1;
use SellingPartnerApi\Seller\SellerWalletV20240301\Responses\ErrorList;
use SellingPartnerApi\Seller\SellerWalletV20240301\Responses\TransferSchedule;

/**
 * updateTransferSchedule
 */
class UpdateTransferSchedule extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  TransferSchedule  $transferSchedule  Transfer schedule details and historical details related to it.
     * @param  string  $destAccountDigitalSignature  Digital signature for the destination bank account details.
     * @param  string  $amountDigitalSignature  Digital signature for the source currency transaction amount.
     */
    public function __construct(
        public TransferSchedule1 $transferSchedule,
        protected string $destAccountDigitalSignature,
        protected string $amountDigitalSignature,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/finances/transfers/wallet/2024-03-01/transferSchedules';
    }

    public function createDtoFromResponse(Response $response): TransferSchedule|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TransferSchedule::class,
            400, 403, 404, 408, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->transferSchedule->toArray();
    }

    public function defaultHeaders(): array
    {
        return array_filter([
            'destAccountDigitalSignature' => $this->destAccountDigitalSignature,
            'amountDigitalSignature' => $this->amountDigitalSignature,
        ]);
    }
}
