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
$users = [
    ['name' => 'Gilles', 'country' => 'Switzerland', 'member' => true],
    ['name' => 'Léon', 'country' => 'Canada', 'member' => false],
    ['name' => 'Olive', 'country' => 'England', 'member' => true],
];
pluck('name', array_filter($users, pluck('member')));



