<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomUsersResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomUserList extends Model
{
    /**
     * @description 用户拓展字段。
     *
     * @var string[]
     */
    public $extension;

    /**
     * @description 用户昵称。
     *
     * @var string
     */
    public $nick;

    /**
     * @description 用户唯一标识。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'extension' => 'Extension',
        'nick'      => 'Nick',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
