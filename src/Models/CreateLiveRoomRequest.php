<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveRoomRequest extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 标题，支持中英文，最大长度32位。
     *
     * @var string
     */
    public $title;

    /**
     * @description 公告，支持中英文，最大长度256位。
     *
     * @var string
     */
    public $notice;

    /**
     * @description 封面，支持图片地址链接格式
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description 拓展字段，按需传递，需要额外记录的房间属性。
     *
     * @var string[]
     */
    public $extension;

    /**
     * @description 主播id，仅支持英文和数字，最大长度36位。
     *
     * @var string
     */
    public $anchorId;

    /**
     * @description 主播昵称。
     *
     * @var string
     */
    public $anchorNick;
    protected $_name = [
        'appId'      => 'AppId',
        'title'      => 'Title',
        'notice'     => 'Notice',
        'coverUrl'   => 'CoverUrl',
        'extension'  => 'Extension',
        'anchorId'   => 'AnchorId',
        'anchorNick' => 'AnchorNick',
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }
        if (null !== $this->anchorNick) {
            $res['AnchorNick'] = $this->anchorNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveRoomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['AnchorNick'])) {
            $model->anchorNick = $map['AnchorNick'];
        }

        return $model;
    }
}
