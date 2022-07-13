<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class DeleteCommentByCreatorIdRequest extends Model
{
    /**
     * @description 应用唯一标识，可以包含小写字母、数字，长度为6个字符。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 需要删除的弹幕id列表
     *
     * @var string[]
     */
    public $commentIdList;

    /**
     * @description 弹幕的创建者ID。
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description 直播间唯一标识，在调用CreateRoom返回。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 删除的操作人ID。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'         => 'AppId',
        'commentIdList' => 'CommentIdList',
        'creatorId'     => 'CreatorId',
        'roomId'        => 'RoomId',
        'userId'        => 'UserId',
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
        if (null !== $this->commentIdList) {
            $res['CommentIdList'] = $this->commentIdList;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCommentByCreatorIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CommentIdList'])) {
            if (!empty($map['CommentIdList'])) {
                $model->commentIdList = $map['CommentIdList'];
            }
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
