<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomUserStatisticsResponseBody\result;

use AlibabaCloud\Tea\Model;

class userStatisticsList extends Model
{
    /**
     * @description 用户ID。
     *
     * @var string
     */
    public $userId;

    /**
     * @description 观看时长，单位：毫秒。
     *
     * @var int
     */
    public $watchLiveTime;
    protected $_name = [
        'userId'        => 'UserId',
        'watchLiveTime' => 'WatchLiveTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->watchLiveTime) {
            $res['WatchLiveTime'] = $this->watchLiveTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userStatisticsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WatchLiveTime'])) {
            $model->watchLiveTime = $map['WatchLiveTime'];
        }

        return $model;
    }
}