<?php

use MylesDuncanKing\SimpleMigration\SimpleMigration;

return new class extends SimpleMigration
{
    protected array $migration = [
        'todos' => [
            'id',
            'string:title',
            'boolean:complete',
            'timestamps'
        ],
    ];
};
