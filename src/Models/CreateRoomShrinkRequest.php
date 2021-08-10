<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateRoomShrinkRequest extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 房间模板唯一标识，当前支持的取值：default，传空默认为default。
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 房间唯一标识，由字母、数字、符号.和-组成，最大长度36位，传空则随机生成一个房间id。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 房间标题，支持中英文，最大长度32位。
     *
     * @var string
     */
    public $title;

    /**
     * @description 房间公告，支持中英文，最大长度256位。
     *
     * @var string
     */
    public $notice;

    /**
     * @description 房主用户id，仅支持英文和数字，最大长度36位。
     *
     * @var string
     */
    public $roomOwnerId;

    /**
     * @description 拓展字段，按需传递，需要额外记录的房间属性。
     *
     * @var string
     */
    public $extensionShrink;
    protected $_name = [
        'appId'           => 'AppId',
        'templateId'      => 'TemplateId',
        'roomId'          => 'RoomId',
        'title'           => 'Title',
        'notice'          => 'Notice',
        'roomOwnerId'     => 'RoomOwnerId',
        'extensionShrink' => 'Extension',
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->roomOwnerId) {
            $res['RoomOwnerId'] = $this->roomOwnerId;
        }
        if (null !== $this->extensionShrink) {
            $res['Extension'] = $this->extensionShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoomShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['RoomOwnerId'])) {
            $model->roomOwnerId = $map['RoomOwnerId'];
        }
        if (isset($map['Extension'])) {
            $model->extensionShrink = $map['Extension'];
        }

        return $model;
    }
}
