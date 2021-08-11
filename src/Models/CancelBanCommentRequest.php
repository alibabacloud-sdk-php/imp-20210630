<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CancelBanCommentRequest extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 房间唯一标识，由调用CreateRoom返回。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 用户在房间内的唯一标识
     *
     * @var string
     */
    public $userId;

    /**
     * @description 取消禁言的用户唯一标识
     *
     * @var string
     */
    public $banCommentUser;
    protected $_name = [
        'appId'          => 'AppId',
        'roomId'         => 'RoomId',
        'userId'         => 'UserId',
        'banCommentUser' => 'BanCommentUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->banCommentUser) {
            $res['BanCommentUser'] = $this->banCommentUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelBanCommentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['BanCommentUser'])) {
            $model->banCommentUser = $map['BanCommentUser'];
        }

        return $model;
    }
}
