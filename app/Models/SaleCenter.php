<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $owner_name
 * @property string $address
 * @property string $city
 * @property string $area
 * @property string $contact
 * @property string $picture_of_cnic
 * @property string $messaging_service_name
 * @property string $messaging_service_no
 * @property string $email
 * @property string $social_media_name_1
 * @property string $social_media_name_2
 * @property string $social_media_name_3
 * @property string $link_1
 * @property string $link_2
 * @property string $link_3
 * @property string $bank_account_title
 * @property string $bank_name
 * @property string $account_or_iban_no
 * @property string $money_transfer_no
 * @property string $money_transfer_service
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 */
class SaleCenter extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'owner_name', 'address', 'city', 'area', 'contact', 'picture_of_cnic', 'messaging_service_name', 'messaging_service_no', 'email', 'social_media_name_1', 'social_media_name_2', 'social_media_name_3', 'link_1', 'link_2', 'link_3', 'bank_account_title', 'bank_name', 'account_or_iban_no', 'money_transfer_no', 'money_transfer_service', 'status', 'created_at', 'updated_at'];

}
