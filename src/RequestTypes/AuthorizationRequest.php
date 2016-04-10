<?php

namespace League\OAuth2\Server\RequestTypes;

use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;
use League\OAuth2\Server\Entities\UserEntityInterface;

class AuthorizationRequest
{
    /**
     * The grant type identifier
     *
     * @var string
     */
    protected $grantTypeId;

    /**
     * The client identifier
     *
     * @var ClientEntityInterface
     */
    protected $client;

    /**
     * The user identifier
     *
     * @var UserEntityInterface
     */
    protected $user;

    /**
     * An array of scope identifiers
     *
     * @var ScopeEntityInterface[]
     */
    protected $scopes = [];

    /**
     * Has the user authorized the authorization request
     *
     * @var bool
     */
    protected $authorizationApproved = false;

    /**
     * The redirect URI used in the request
     *
     * @var string
     */
    protected $redirectUri;

    /**
     * The state parameter on the authorization request
     *
     * @var string
     */
    protected $state;

    /**
     * @return string
     */
    public function getGrantTypeId()
    {
        return $this->grantTypeId;
    }

    /**
     * @param string $grantTypeId
     */
    public function setGrantTypeId($grantTypeId)
    {
        $this->grantTypeId = $grantTypeId;
    }

    /**
     * @return ClientEntityInterface
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param ClientEntityInterface $client
     */
    public function setClient(ClientEntityInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return UserEntityInterface
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserEntityInterface $user
     */
    public function setUser(UserEntityInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @return \League\OAuth2\Server\Entities\ScopeEntityInterface[]
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * @param \League\OAuth2\Server\Entities\ScopeEntityInterface[] $scopes
     */
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
    }

    /**
     * @return bool
     */
    public function isAuthorizationApproved()
    {
        return $this->authorizationApproved;
    }

    /**
     * @param bool $authorizationApproved
     */
    public function setAuthorizationApproved($authorizationApproved)
    {
        $this->authorizationApproved = $authorizationApproved;
    }

    /**
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @param string $redirectUri
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }
}
