<?php
function pluck(string $property)
{
    return function($o) use($property) {
        if (is_object($o) && isset($o->{$propertyName})) {
            return $o->{$property};
        } elseif ((is_array($o) || $o instanceof ArrayAccess) && isset($o[$property])) {
            return $o[$property];
        }

        return false;
    };
}
$user = ['name' => 'Gilles', 'country' => 'Switzerland', 'member' => true];
var_dump(pluck('name')($user));



