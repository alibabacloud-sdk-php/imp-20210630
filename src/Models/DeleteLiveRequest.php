<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveRequest extends Model
{
    /**
     * @var string
     */
    public $liveId;
    protected $_name = [
        'liveId' => 'LiveId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }

        return $model;
    }
}
