<?php

namespace OAuth\Model\Storage;

use League\OAuth2\Server\Entity\ScopeEntity;
use League\OAuth2\Server\Storage\ScopeInterface;

class ScopeStorage extends AbstractStorage implements ScopeInterface
{
    /**
     * {@inheritdoc}
     */
    public function get($scope, $grantType = null, $clientId = null)
    {
        $this->loadModel('OAuth.Scopes');
        $result = $this->Scopes->find()
            ->where([
                'id' => $scope
            ]);

        if ($result) {
            return (new ScopeEntity($this->server))->hydrate(
                [
                    'id' => $result->id,
                    'description' => $result->description,
                ]
            );
        }

        return;
    }
}
