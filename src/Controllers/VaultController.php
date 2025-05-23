<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PayPalRESTAPIsLib\Exceptions\ApiException;
use PayPalRESTAPIsLib\Exceptions\ErrorException;
use PayPalRESTAPIsLib\Models\CustomerVaultPaymentTokensResponse;
use PayPalRESTAPIsLib\Models\PaymentTokenResponse;
use PayPalRESTAPIsLib\Models\SetupTokenResponse;

class VaultController extends BaseController
{
    /**
     * Creates a Payment Token from the given payment source and adds it to the Vault of the associated
     * customer.
     *
     * @param array $options Array with all options for search
     *
     * @return PaymentTokenResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function paymentTokensCreate(array $options): PaymentTokenResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v3/vault/payment-tokens')
            ->auth('Oauth2')
            ->parameters(
                HeaderParam::init('PayPal-Request-Id', $options)->extract('payPalRequestId'),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($options)->extract('body')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    'Request is not well-formed, syntactically incorrect, or violates schema.',
                    ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init('Authorization failed due to insufficient permissions.', ErrorException::class)
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'Request contains reference to resources that do not exist.',
                    ErrorException::class
                )
            )
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'The requested action could not be performed, semantically incorrect, or fa' .
                    'iled business validation.',
                    ErrorException::class
                )
            )
            ->throwErrorOn('500', ErrorType::init('An internal server error has occurred.', ErrorException::class))
            ->type(PaymentTokenResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns all payment tokens for a customer.
     *
     * @param array $options Array with all options for search
     *
     * @return CustomerVaultPaymentTokensResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function customerPaymentTokensGet(array $options): CustomerVaultPaymentTokensResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v3/vault/payment-tokens')
            ->auth('Oauth2')
            ->parameters(
                QueryParam::init('customer_id', $options)->extract('customerId'),
                QueryParam::init('page_size', $options)->extract('pageSize', 5),
                QueryParam::init('page', $options)->extract('page', 1),
                QueryParam::init('total_required', $options)->extract('totalRequired', false)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    'Request is not well-formed, syntactically incorrect, or violates schema.',
                    ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init('Authorization failed due to insufficient permissions.', ErrorException::class)
            )
            ->throwErrorOn('500', ErrorType::init('An internal server error has occurred.', ErrorException::class))
            ->type(CustomerVaultPaymentTokensResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a readable representation of vaulted payment source associated with the payment token id.
     *
     * @param string $id ID of the payment token.
     *
     * @return PaymentTokenResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function paymentTokensGet(string $id): PaymentTokenResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v3/vault/payment-tokens/{id}')
            ->auth('Oauth2')
            ->parameters(TemplateParam::init('id', $id));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Authorization failed due to insufficient permissions.', ErrorException::class)
            )
            ->throwErrorOn('404', ErrorType::init('The specified resource does not exist.', ErrorException::class))
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'The requested action could not be performed, semantically incorrect, or fa' .
                    'iled business validation.',
                    ErrorException::class
                )
            )
            ->throwErrorOn('500', ErrorType::init('An internal server error has occurred.', ErrorException::class))
            ->type(PaymentTokenResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Delete the payment token associated with the payment token id.
     *
     * @param string $id ID of the payment token.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function paymentTokensDelete(string $id): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/v3/vault/payment-tokens/{id}')
            ->auth('Oauth2')
            ->parameters(TemplateParam::init('id', $id));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    'Request is not well-formed, syntactically incorrect, or violates schema.',
                    ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init('Authorization failed due to insufficient permissions.', ErrorException::class)
            )
            ->throwErrorOn('500', ErrorType::init('An internal server error has occurred.', ErrorException::class));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a Setup Token from the given payment source and adds it to the Vault of the associated
     * customer.
     *
     * @param array $options Array with all options for search
     *
     * @return SetupTokenResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function setupTokensCreate(array $options): SetupTokenResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v3/vault/setup-tokens')
            ->auth('Oauth2')
            ->parameters(
                HeaderParam::init('PayPal-Request-Id', $options)->extract('payPalRequestId'),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($options)->extract('body')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    'Request is not well-formed, syntactically incorrect, or violates schema.',
                    ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init('Authorization failed due to insufficient permissions.', ErrorException::class)
            )
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'The requested action could not be performed, semantically incorrect, or fa' .
                    'iled business validation.',
                    ErrorException::class
                )
            )
            ->throwErrorOn('500', ErrorType::init('An internal server error has occurred.', ErrorException::class))
            ->type(SetupTokenResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a readable representation of temporarily vaulted payment source associated with the setup
     * token id.
     *
     * @param string $id ID of the setup token.
     *
     * @return SetupTokenResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function setupTokensGet(string $id): SetupTokenResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v3/vault/setup-tokens/{id}')
            ->auth('Oauth2')
            ->parameters(TemplateParam::init('id', $id));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Authorization failed due to insufficient permissions.', ErrorException::class)
            )
            ->throwErrorOn('404', ErrorType::init('The specified resource does not exist.', ErrorException::class))
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'The requested action could not be performed, semantically incorrect, or fa' .
                    'iled business validation.',
                    ErrorException::class
                )
            )
            ->throwErrorOn('500', ErrorType::init('An internal server error has occurred.', ErrorException::class))
            ->type(SetupTokenResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
