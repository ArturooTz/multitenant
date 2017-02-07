<?php
namespace DanTheDJ\MultiTenant\Events;

class TenantNotResolvedException extends \Exception
{
    public function getTenant()
    {
        return $this->getMessage();
    }
}