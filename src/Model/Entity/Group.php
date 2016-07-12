<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Group Entity
 *
 * @property string $id
 * @property string $name
 * @property string $emails
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Group extends Entity
{
    // protected function _getEmails($emails)
    // {
    //     if (is_array($emails)) {
    //         $emails =json_encode($emails);
    //     }
    //     return $emails;
    // }
    protected function _setEmails($emails)
    {
        if (is_string($emails)&&(!strpos($emails, "\[")||!strpos($emails, "\]"))) {
            $emails =explode(",", $emails);
        }

        if (is_array($emails)) {
            $emails =json_encode($emails);
        }
        return $emails;
    }


    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
