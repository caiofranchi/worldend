<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'type'         => 'mysql',
    'connection'   => array(
        'hostname'   => 'localhost',
        'database'   => 'db_worldend',
        'username'   => 'user_world',
        'password'   => 'teste',
        'persistent' => false,
    ),
    'table_prefix' => 'tb_',
    'charset'      => 'utf8',
    'caching'      => false,
    'profiling'    => false,
);
