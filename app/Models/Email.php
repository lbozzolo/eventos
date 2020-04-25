<?php

namespace Eventos\Models;

use Illuminate\Support\Facades\Mail;

class Email extends Mail
{

    protected function normalizeMailboxes(array $mailboxes)
    {
        $actualMailboxes = [];

        foreach ($mailboxes as $key => $value) {
            if (is_string($key)) {
                //key is email addr
                $address = $key;
                $name = $value;
            } else {
                $address = $value;
                $name = null;
            }
            $this->assertValidAddress($address);
            $actualMailboxes[$address] = $name;
        }

        return $actualMailboxes;
    }

    public static function assertValidAddress($address)
    {
        return true;
    }

}
