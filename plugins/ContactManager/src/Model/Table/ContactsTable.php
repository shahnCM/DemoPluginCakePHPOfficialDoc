<?php

namespace ContactManager\Model\Table;

use Cake\ORM\Table;

class ContactsTable extends Table
{
    public function initialize(array $config): void 
    {
        parent::initialize($config); // <- Check how does this act
    }
}