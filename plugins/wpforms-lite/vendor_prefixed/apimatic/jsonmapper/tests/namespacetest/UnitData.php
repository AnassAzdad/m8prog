<?php

namespace WPForms\Vendor\namespacetest;

class UnitData
{
    /**
     * @var \ArrayObject[Unit]
     */
    public $data;
    /**
     * @var Unit[]
     */
    public $units;
    /**
     * @var string[]
     */
    public $messages;
    /**
     * @var model\User
     */
    public $user;
    /**
     * @var
     */
    public $empty;
    /**
     * @var model\UserList[model\User]
     */
    public $users;
    public $internalData = array();
    public function setNamespacedTypeHint(\WPForms\Vendor\othernamespace\Foo $foo)
    {
        $this->internalData['namespacedTypeHint'] = $foo;
    }
}
