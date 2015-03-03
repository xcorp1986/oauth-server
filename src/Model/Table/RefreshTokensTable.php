<?php

namespace OAuth\Model\Table;

use Cake\ORM\Table;

/**
 * RefreshToken Model
 *
 * @property Client $Client
 * @property User $User
 */
class RefreshTokensTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('oauth_refresh_tokens');
        $this->primaryKey('refresh_token');
        $this->belongsTo('AccessTokens', [
            'className' => 'OAuth.AccessTokens',
            'foreignKey' => 'oauth_token'
        ]);
        parent::initialize($config);
    }

}
